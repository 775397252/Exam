<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Paper;
use App\Models\Admin\Question;
use App\Models\Admin\UserAnswer;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Auth;

class AnswerController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @param $id 试卷id
     * @return \Illuminate\Http\Response
     */
    public function index($id,Request $request)
    {

        $all=$request->all();
        $question=new Question();
        //判断是否考过试

        if(isset($all['qid'])){
            //获取选项，判断对错
            $curent=$question->where('id',$all['qid'])->first();
            $trueitem=json_decode($curent->true_item);
            //判断此题是否回答过
            $is_a=UserAnswer::where('uid',Auth::id())->where('question_id',$all['qid'])
                ->where('paper_id',$id)
                ->first();
            if($is_a){

            }else{
                if($curent->type==1){
                    if(!$trueitem)    $trueitem=[0];
                    foreach($trueitem as $k=>$v){
                        if($k==$all['item']){
                            //回答正确
                            $user_answer=new UserAnswer();
                            $user_answer->uid=Auth::id();
                            $user_answer->paper_id=$id;
                            $user_answer->question_id=$all['qid'];
                            $user_answer->answer=$all['item'];
                            $user_answer->score=$curent->score;
                            $user_answer->save();
                        }
                    }
                }else{
                    //多选题判断正确
                    $new=[];
                    if(!$trueitem)    $trueitem=[0];
                    foreach($trueitem as $k=>$v){
                        $new[]=$k;
                    }
                    $user_answer=new UserAnswer();
                    $c = array_diff($all['item'],$new);
                    if (!$c) {
                        $user_answer->score=$curent->score;
                    }
                    $user_answer->uid=Auth::id();
                    $user_answer->paper_id=$id;
                    $user_answer->question_id=$all['qid'];
                    $user_answer->answer=implode(',',$new);;
                    $user_answer->save();
                }
            }

            //获取下一题
            $first=$question->where('id','>',$all['qid'])->first();
            $conut=$question->where('id','>',$all['qid'])->count();
            if($conut==1){
                $over=1;
            }
            if(!$first){
                //die.做完题统计分数
                return redirect('/after_over/'.$id);
            }
        }else{
            $first=$question->where('paper_id',$id)->first();
        }

        return view('front.answer.answer',compact('first','id','over'));
    }



    public function paperList(Paper $paper)
    {
        $all=$paper->where('status',1)->paginate(15);
        foreach($all as $v){
            $is_test=UserAnswer::where('uid',Auth::id())->where('paper_id',$v->id)->first();
            if($is_test) $v->show=false;
            else $v->show=true;
        }

        return view('front.paper.index',compact('all'));

    }
    public function rank($id)
    {
        //试卷所有用户
        $user=UserAnswer::where('paper_id',$id)->get();
        foreach($user as $k=>$v){
            $new[$v->uid]=UserAnswer::where('uid',$v->uid)->where('paper_id',$id)->sum('score');
        }
        $info=[];
        foreach($new as $k=>$v){

                $temp=User::where('id',$k)->first();
            $temp->score=$v;
            $info[]=$temp;
        }

        return view('front.paper.rank',compact('info'));

    }

    //答题完成页面
    public function afterOver($id){
        $uid=Auth::id();
        $paper=Paper::where('id',$id)->first();
        $score=UserAnswer::where('uid',$uid)->where('paper_id',$id)->sum('score');
        return view('front.after_over',compact('score','paper'));
    }

}

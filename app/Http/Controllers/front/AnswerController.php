<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Paper;
use App\Models\Admin\Question;


class AnswerController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $question=new Question();
        $first=$question->where('paper_id',$id)->first();
        return view('front.answer.answer',compact('first'));
    }

    /**
     * @param $id 试卷id
     * @param $qid 问题id
     */
    public function nextQuestion($id, $qid){
    }


    public function paperList(Paper $paper)
    {
        $all=$paper->where('status',1)->paginate(15);
        return view('front.paper.index',compact('all'));

    }
    public function rank()
    {
        return view('front.paper.rank');

    }



}

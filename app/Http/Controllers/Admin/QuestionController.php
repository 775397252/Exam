<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Paper;
use App\Models\Admin\Question;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Log;
use App\Models\Application;
use App\Models\AppAndroid as Android;
use App\Models\AppIos as Ios;
use QrCode;

class QuestionController extends Controller
{

    public function index($id,Request $request)
    {
        $paper=new Paper();
        $question=new Question();
        $all=$question->where('paper_id',$id)->paginate(15);
        return view('admin.question.index',compact('all','id'));
    }

    public function create($id)
    {
        $data = [];
        return view('admin.question.create', compact('id'));
    }


    public function store($id,Request $request)
    {
       // dd($request->all());
        $question=new Question();
        $question->paper_id=$id;
        $question->title=$request->get('title');
        $question->type=$request->get('type');
        $question->score=$request->get('score');
        $question->item=json_encode($request->get('item'));
        $question->true_item=json_encode($request->get('true_item'));
        $question->save();
        return redirect()->route('admin.question.index', ['id'=>$id])->withSuccess('添加成功！');
    }


    public function edit($id)
    {
        $question = Question::find((int)$id);
        if (!$question) return redirect('/admin/question')->withErrors("找不到该问题!");
        return view('admin.question.edit', compact('question','id'));
    }


    public function update(Request $request, $id)
    {
        $question= Question::find((int)$id);
        $question->title=$request->get('title');
        $question->type=$request->get('type');
        $question->score=$request->get('score');
        $question->item=json_encode($request->get('item'));
        $question->true_item=json_encode($request->get('true_item'));
        $question->save();
        return redirect()->route('admin.papaer.index')->withSuccess('编辑成功！');
    }


    public function destroy($id)
    {
        $paper = Question::find((int)$id);
        if ($paper) {
            $paper->delete();
        }
        return redirect()->back()->withSuccess("删除成功");
    }

}

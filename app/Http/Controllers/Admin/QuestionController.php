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

    public function create()
    {
        $data = [];
        return view('admin.question.create', $data);
    }


    public function store(Request $request)
    {
        $paper = new Paper();
        $paper->title=$request->get('title');
        $paper->description=$request->get('description');
        $paper->status=$request->get('status');
        $paper->creator=Auth::id();
        $paper->save();
        return redirect('/admin/paper')->withSuccess('添加成功！');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $paper = Paper::find((int)$id);
        if (!$paper) return redirect('/admin/paper')->withErrors("找不到该试卷!");
        $data['id'] = (int)$id;
        return view('admin.paper.edit', compact('paper','id'));
    }


    public function update(Request $request, $id)
    {
        $paper = Paper::find((int)$id);
        $paper->title=$request->get('title');
        $paper->description=$request->get('description');
        $paper->status=$request->get('status');
        $paper->save();
        return redirect('/admin/paper')->withSuccess('修改成功！');
    }


    public function destroy($id)
    {
        $paper = Paper::find((int)$id);
        if ($paper) {
            $paper->delete();
        }
        return redirect()->back()->withSuccess("删除成功");
    }

}

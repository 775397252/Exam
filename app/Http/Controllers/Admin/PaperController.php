<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Paper;
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

class PaperController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = array();
            $data['draw'] = $request->get('draw');
            $start = $request->get('start');
            $length = $request->get('length');
            $order = $request->get('order');
            $columns = $request->get('columns');
            $search = $request->get('search');
            $data['recordsTotal'] = Paper::count();
            if (strlen($search['value']) > 0) {
                $data['recordsFiltered'] = Paper::where(function ($query) use ($search) {
                    $query->where('title', 'LIKE', '%' . $search['value'] . '%')
                        ->orWhere('description', 'like', '%' . $search['value'] . '%');
                })->count();
                $data['data'] = Paper::where(function ($query) use ($search) {
                    $query->where('title', 'LIKE', '%' . $search['value'] . '%')
                        ->orWhere('description', 'like', '%' . $search['value'] . '%');
                })
                    ->skip($start)->take($length)
                    ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                    ->get();
            } else {
                $data['recordsFiltered'] = Paper::count();
                $data['data'] = Paper::
                skip($start)->take($length)
                    ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                    ->get();
            }
            return response()->json($data);
        }
        return view('admin.paper.index');
    }

    public function create()
    {
        $data = [];
        return view('admin.paper.create', $data);
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

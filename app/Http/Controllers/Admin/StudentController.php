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

class StudentController extends Controller
{

    public function index()
    {
        $question=new User();
        $all=$question->paginate(15);
        return view('admin.student.index',compact('all'));
    }
    public function destroy($id)
    {
        $paper = User::find((int)$id);
        if ($paper) {
            $paper->delete();
        }
        return redirect()->back()->withSuccess("删除成功");
    }

}

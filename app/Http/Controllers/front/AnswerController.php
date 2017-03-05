<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;


class AnswerController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.answer.answer');

    }
    public function paperList()
    {
        return view('front.paper.index');

    }
    public function rank()
    {
        return view('front.paper.rank');

    }



}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function () {
    return redirect('/paper');
});
Route::group(['namespace' => 'Front'], function()
{
    //获取试卷第一题
    Route::get('/answer/{id}', 'AnswerController@index');

    //试卷列表
    Route::get('/answer/{pid}/{qid}', 'AnswerController@index');

    Route::get('/paper', 'AnswerController@paperList');
    Route::get('/rank/{id}', 'AnswerController@rank');

    Route::get('/after_over/{id}', 'AnswerController@afterOver');


});
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

Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout');
Route::post('logout', 'LoginController@logout');

Route::get('/', 'IndexController@index');


Route::get('index', ['as' => 'admin.index', 'uses' => function () {
    return redirect('/admin/log-viewer');
}]);


Route::group(['middleware' => ['auth:admin', 'menu', 'authAdmin']], function () {

    //权限管理路由
    Route::get('permission/{cid}/create', ['as' => 'admin.permission.create', 'uses' => 'PermissionController@create']);
    Route::get('permission/manage', ['as' => 'admin.permission.manage', 'uses' => 'PermissionController@index']);
    Route::get('permission/{cid?}', ['as' => 'admin.permission.index', 'uses' => 'PermissionController@index']);
    Route::post('permission/index', ['as' => 'admin.permission.index', 'uses' => 'PermissionController@index']); //查询
    Route::resource('permission', 'PermissionController', ['names' => ['update' => 'admin.permission.edit', 'store' => 'admin.permission.create']]);

    //角色管理路由
    Route::get('role/index', ['as' => 'admin.role.index', 'uses' => 'RoleController@index']);
    Route::post('role/index', ['as' => 'admin.role.index', 'uses' => 'RoleController@index']);
    Route::resource('role', 'RoleController', ['names' => ['update' => 'admin.role.edit', 'store' => 'admin.role.create']]);

    //用户管理路由
    Route::get('user/index', ['as' => 'admin.user.index', 'uses' => 'UserController@index']);  //用户管理
    Route::post('user/index', ['as' => 'admin.user.index', 'uses' => 'UserController@index']);
    Route::resource('user', 'UserController', ['names' => ['update' => 'admin.role.edit', 'store' => 'admin.role.create']]);
    //试卷路由管理
    Route::get('paper/index', ['as' => 'admin.paper.index', 'uses' => 'PaperController@index']);  //用户管理
    Route::post('paper/index', ['as' => 'admin.paper.index', 'uses' => 'PaperController@index']);
    Route::resource('paper', 'PaperController', ['names' => ['update' => 'admin.paper.edit', 'store' => 'admin.paper.create']]);
    //试题管理
    Route::get('paper/question/{id}', 'QuestionController@index')->name('admin.question.index');
    Route::get('paper/question/{id}/create', 'QuestionController@create')->name('admin.question.create');
    Route::post('paper/question/{id}/store', 'QuestionController@store')->name('admin.question.store');
    Route::get('paper/question/{id}/edit', 'QuestionController@edit')->name('admin.question.edit');
    Route::get('paper/question/{id}/destroy', 'QuestionController@destroy')->name('admin.question.destroy');
    Route::post('paper/question/{id}/update', 'QuestionController@update')->name('admin.question.update');

    Route::get('/student/index', 'StudentController@index')
        ->name('admin.student.index');
    Route::get('/student/{id}/destroy', 'StudentController@destroy')->name('admin.student.destroy');

    Route::resource('student', 'StudentController', ['names' => ['update' => 'admin.student.edit', 'store' => 'admin.student.create']]);



});

Route::get('/', function () {
    return redirect('/admin/index');
});


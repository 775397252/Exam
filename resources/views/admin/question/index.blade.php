@extends('admin.layouts.base')

@section('title','控制面板')

@section('pageHeader','控制面板')

@section('pageDesc','DashBoard')

@section('content')

    <div class="row page-title-row" style="margin:5px;">
        <div class="col-md-6">
        </div>
        <div class="col-md-6 text-right">
                <a href="/admin/paper/question/{{$id}}/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> 添加问题
                </a>
        </div>
    </div>
    <div class="row page-title-row" style="margin:5px;">
        <div class="col-md-6">
        </div>
        <div class="col-md-6 text-right">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                @include('admin.partials.errors')
                @include('admin.partials.success')
                <div class="box-body">
                    <div class="bs-example" data-example-id="hoverable-table">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>序号</th>
                                <th>标题</th>
                                <th>类型</th>
                                <th>分值</th>
                                <th>选项</th>
                                <th>正确选项</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($all as $k=>$v)
                            <tr>
                                <th scope="row">{{$k}}</th>
                                <td>{{$v->title}}</td>
                                <td>{{$v->type}}</td>
                                <td>{{$v->score}}</td>
                                <td>{{$v->item}}</td>
                                <td>{{$v->true_item}}</td>
                                <td>
                                    <a style="margin:3px;" href="/admin/paper/3/edit" class="X-Small btn-xs text-success ">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <a style="margin:3px;" href="#" attr="3" class="delBtn X-Small btn-xs text-danger">
                                        <i class="fa fa-times-circle"></i> 删除
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                        {{ $all->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@stop
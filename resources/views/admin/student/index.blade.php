@extends('admin.layouts.base')

@section('title','控制面板')

@section('pageHeader','控制面板')

@section('pageDesc','DashBoard')

@section('content')

    <div class="row page-title-row" style="margin:5px;">
        <div class="col-md-6">
        </div>
        <div class="col-md-6 text-right">
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
                                <th>姓名</th>
                                <th>邮箱</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($all as $k=>$v)
                            <tr>
                                <th scope="row">{{$k}}</th>
                                <td>{{$v->name}}</td>
                                <td>{{$v->email}}</td>
                                <td>
                                    <a style="margin:3px;" href="#" attr="3" class="delBtn X-Small btn-xs text-danger">
                                        <i class="fa fa-times-circle">
                                        </i> 无法删除前台用户
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
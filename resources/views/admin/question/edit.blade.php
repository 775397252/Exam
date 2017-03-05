@extends('admin.layouts.base')

@section('title','控制面板')

@section('pageHeader','控制面板')

@section('pageDesc','DashBoard')

@section('content')
    <div class="main animsition">
        <div class="container-fluid">

            <div class="row">
                <div class="">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">添加试题</h3>
                        </div>
                        <div class="panel-body">

                            @include('admin.partials.errors')
                            @include('admin.partials.success')

                            <form class="form-horizontal" role="form" method="POST" action="/admin/paper/question/{{$id}}/update">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @include('admin.question._form')
                                <div class="form-group">
                                    <div class="col-md-7 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary btn-md">
                                            <i class="fa fa-plus-circle"></i>
                                            添加
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script>
        function copy_self(p){
            var parent,parent_clone
            parent= p.parent()
            var some=Math.random()
            var s = "    <div class='form-group'>\
        <label for='tag' class='col-md-3 control-label'>选项</label>\
                <div class='col-md-5'>\
                <input type='text' class='form-control' name='item["+(some)+"]' autofocus>\
        </div>\
        <label class='radio-inline'>\
                <input type='checkbox' name='true_item["+(some)+"]'  value='1'> 设为答案\
                </label>\
                <input type='button' onclick='copy_self($(this))' class='btn-primary btn btn-md fa fa-plus-circle' value='添加'>\
                <input type='button' onclick=' destroy_self($(this))' class='btn-primary btn btn-md fa fa-plus-circle' value='删除'>";

            //parent_clone= p.parent().clone();
            parent.after(s)
        }

        function destroy_self(p){
            var parent,cou
            cou=$('#scount').children().length;
            if(cou==1){
                alert('请至少留一个选项')
                return false;
            }
            parent= p.parent()
            parent.remove()
        }
    </script>
@stop
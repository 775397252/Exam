@extends('layouts.app')

@section('css')
@stop

@section('content')
    <div class="projects-header page-header">
        <h2>试卷排行榜</h2>
    </div>
    <div class="bs-example" data-example-id="simple-table">
        <table class="table">
            <caption>试卷名称：Optional table caption.</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>姓名</th>
                <th>分数</th>
                <th>邮箱</th>
            </tr>
            </thead>
            <tbody>
            @foreach($info as $k=>$v)
            <tr>
                <th scope="row">{{$k+1}}</th>
                <td>{{$v->name}}</td>
                <td>{{$v->score}}</td>
                <td>{{$v->email}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <a  class="btn btn-primary" href="/paper">回到首页</a>
    </div>
@stop

@section('js')
            <script>
            </script>
@stop
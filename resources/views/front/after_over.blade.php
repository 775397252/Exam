@extends('layouts.app')

@section('css')
@stop

@section('content')
    <div class="projects-header page-header">
        <h2>恭喜你：</h2>
    </div>
    <div class="bs-example" data-example-id="simple-table">
        <table class="table">
            <caption>试卷名称：{{$paper->title}}.</caption>
            <caption>试卷描述：{{$paper->description}}.</caption>

        </table>
        <div class="alert alert-success" role="alert">
            <a href="#" class="alert-link">
                你获得了<span class="label label-danger">{{$score}}</span>
                分
            </a>
        </div>
        <!-- Standard button -->
        <a class="btn btn-default" href="/rank/{{$paper->id}}">查看排行榜</a>

        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <a  class="btn btn-primary" href="/paper">回到首页</a>

    </div>
@stop

@section('js')
            <script>
            </script>
@stop
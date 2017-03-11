@extends('layouts.app')

@section('css')
@stop

@section('content')
    <div class="projects-header page-header">
        <h2>试卷列表</h2>
        <p>请选择一套试卷测试</p>
    </div>
    <div class="row">
@foreach($all as $v)
        <div class="col-sm-6 col-md-4 col-lg-3 ">
            <div class="thumbnail" >
                <div class="caption">
                    <h3>
                        <a href="#">{{$v->title}}<br>
                        </a>
                    </h3>
                    <p>
                        <a href="{{url('rank',[$v->id])}}" class="btn btn-danger">查看排行榜</a>
                        @if($v->show)
                        <a href="{{url('answer',[$v->id])}}" class="btn btn-danger">开始考试</a>
                            @endif
                    </p>
                </div>
            </div>
        </div>
@endforeach

    </div>
    {{ $all->links() }}
@stop

@section('js')
            <script>
                @if(isset($_GET['error']))
                    alert("{{$_GET['error']}}")
                @endif
            </script>
@stop
@extends('layouts.app')

@section('css')
@stop

@section('content')
    <div class="projects-header page-header">
        <h2>试卷分数表</h2>
    </div>
    <div class="bs-example" data-example-id="simple-table">
        <table class="table">
            <caption>试卷名称：Optional table caption.</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>姓名</th>
                <th>分数</th>
                <th>时间</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>
@stop

@section('js')
            <script>
            </script>
@stop
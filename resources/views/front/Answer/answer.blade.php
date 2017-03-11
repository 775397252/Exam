@extends('layouts.app')

@section('css')
@stop

@section('content')
    <div style="width: 100%;height:auto;display: inline-block;border: 1px solid white;position: relative;margin-top:10px;">
        <div style="width: 100%;">
                <div style="width: 100%;border-bottom:none;background:#FFF;">

                    <div style="width: 100%;height: 50px;font-size:15px;color: #000;line-height: 50px;padding-left: 20px;">
                        <div style="color:#FFF;background: red;width: 22px;height: 22px;border-radius:11px;line-height:22px;font-size:13px; text-align: center;"
                             class="glyphicon glyphicon-map-marker"></div>
                        @if($first->type==1)
                            [单选题]
                        @else
                            [多选题]
                        @endif
                    </div>
                </div>
            <form action="" >
                <div style="width: 100%;height:auto;display: inline-block;background:#FFF;">
                    <div style="width: 100%;height: 90%;padding:20px 20px 0px 60px;">
                        <!--试题区域-->
                        <input type="hidden" name="qid" value="{{$first->id}}">
                            <strong>{{$first->title}}</strong>
                            @foreach(json_decode($first->item) as $k=>$v)
                                @if($first->type==1)
                                <div class="radio">
                                    <label>
                                        <input type="radio" @if( $loop->index==0) checked @endif name="item" value="{{$k}}">
                                        {{$v}}
                                    </label>
                                </div>
                            @else
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" @if( $loop->index==0) checked @endif name="item[]" value="{{$k}}">
                                        {{$v}}
                                    </label>
                                </div>
                            @endif
                            @endforeach
                        <!--考题的操作区域-->
                        <div class="operation" style="margin-top: 20px;">
                            <div class="text-right" style="margin-right: 20px;">
                                <div class="form-group" style="color: #FFF;">
                                    @if(isset($over)&&$over==1)
                                        <input  type="submit" class="btn btn-success" id="submitQuestions" value="提交试卷"/>
                                    @else
                                        <input class="btn btn-info" id="nextQuestion" value="下一题" type="submit"/>
                                    @endif
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@stop

@section('js')
    <script>
        function getanswer(){
            if($("#"+id).is(':checked')) {
                if(!$("#"+id).is(':radio')){
                    $("#"+id).prop("checked",false);
                }
            }else{

                $("#"+id).prop("checked","checked");
            }
        }
    </script>
@stop
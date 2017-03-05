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
                        [单选题]
                    </div>
                </div>
                <div style="width: 100%;height:auto;display: inline-block;background:#FFF;">
                    <div style="width: 100%;height: 90%;padding:20px 20px 0px 60px;">
                        <!--试题区域-->
                        <ul class="list-unstyled question" >
                            <li class="question_title"><strong>第 1 题 </strong>下丘脑与腺垂体之间主要通过下列哪条途径联系？ </li>
                            <li class="question_info" onclick="clickTrim(this)" id="111"><input name="item" type="checkbox" value="A">&nbsp;A.神经纤维</li>
                            <li class="question_info" onclick="clickTrim(this)" id="1121"><input name="item" type="checkbox" value="A">&nbsp;A.神经纤维</li>
                            <li class="question_info" onclick="clickTrim(this)" id="11221"><input name="item" type="checkbox" value="A">&nbsp;A.神经纤维</li>
                          </ul>
                        <!--考题的操作区域-->
                        <div class="operation" style="margin-top: 20px;">
                            <div class="text-right" style="margin-right: 20px;">
                                <div class="form-group" style="color: #FFF;">
                                    <button class="btn btn-success" id="submitQuestions">提交试卷</button>
                                    <button class="btn btn-info" id="nextQuestion">下一题</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        function clickTrim(source){
            var id = source.id;
            if($("#"+id).find("input").is(':checked')) {
                if(!$("#"+id).find("input").is(':radio')){
                    $("#"+id).find("input").prop("checked",false);
                }
            }else {
                $("#"+id).find("input").prop("checked","checked");
            }
        }

    </script>
@stop
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">试题名称</label>
    <div class="col-md-5">
        <input type="text" class="form-control" required name="title" id="tag" value="{{ $question['title'] or ''}}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">该题分数</label>
    <div class="col-md-5">
        <input type="number" class="form-control" required name="score" id="tag" value="{{ $question['score'] or ''}}" autofocus>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-3 control-label">试题类型</label>
    <div class="col-md-5">
        <select name="type" id="">
            <option value="1" @if(isset($question['type'])&&$question['type']==1) selected @endif>单选题</option>
            <option value="2"  @if(isset($question['type'])&&$question['type']==2) selected @endif>多选题</option>
        </select>
    </div>
</div>
<div id="scount">
    @if(isset($question['item']))
    @foreach(json_decode($question['item']) as $k=>$v)
        <div class='form-group'>
            <label for='tag' class='col-md-3 control-label'>选项</label>
            <div class='col-md-5'>
                <input type='text' class='form-control' value="{{$v}}" name='item[{{$k}}]' autofocus>
            </div>
            <label class='radio-inline'>
                <input type='checkbox' @foreach(json_decode($question['true_item']) as $ks=>$vs)
                @if($ks==$k) checked @endif
                @endforeach name='true_item[{{$k}}]'  value='1'> 设为答案
            </label>
            <input type='button' onclick='copy_self($(this))' class='btn-primary btn btn-md fa fa-plus-circle' value='添加'>
            <input type='button' onclick=' destroy_self($(this))' class='btn-primary btn btn-md fa fa-plus-circle' value='删除'>
        </div>
    @endforeach
    @endif
</div>







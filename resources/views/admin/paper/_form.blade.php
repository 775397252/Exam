<div class="form-group">
    <label for="tag" class="col-md-3 control-label">试卷名称</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="title" id="tag" value="{{ $paper['title'] or ''}}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">试卷描述</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="description" id="tag" value="{{ $paper['description'] or ''}}" autofocus>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-3 control-label">试卷是否发布</label>
    <div class="col-md-5">
        <label class="radio-inline">
            <input type="radio" @if(isset($paper)&&$paper['status']==1) checked @endif name="status" id="inlineRadio1" value="1"> 是
        </label>
        <label class="radio-inline">
            <input type="radio" @if(isset($paper)&&$paper['status']==0) checked @endif name="status" id="inlineRadio2" value="0"> 否
        </label>
    </div>
</div>





<div class="form-group">
    <label for="tag" class="col-md-3 control-label">试题名称</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="title" id="tag" value="{{ $paper['title'] or ''}}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">该题分数</label>
    <div class="col-md-5">
        <input type="number" class="form-control" name="score" id="tag" value="{{ $paper['score'] or ''}}" autofocus>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-3 control-label">试题类型</label>
    <div class="col-md-5">
        <select name="type" id="">
            <option value="1">单选题</option>
            <option value="2">多选题</option>
        </select>
    </div>
</div>
<div id="scount">

</div>







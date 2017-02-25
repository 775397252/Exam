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
            <option value="3">填空题</option>
        </select>
    </div>
</div>
<div id="scount">
    <div class="form-group">
        <label for="tag" class="col-md-3 control-label">选项</label>
        <div class="col-md-5">
            <input type="text" class="form-control" name="item[]" autofocus>
        </div>
        <input type="button" onclick="copy_self($(this))" class="btn-primary btn btn-md fa fa-plus-circle" value="添加">
        <input type="button" onclick="destroy_self($(this))" class="btn-primary btn btn-md fa fa-plus-circle" value="删除">
    </div>
</div>

<script>
    function copy_self(p){
        var parent,parent_clone
        parent= p.parent()
        parent_clone= p.parent().clone();
        parent.after(parent_clone)
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





<?php
/* Smarty version 3.1.30, created on 2017-03-26 11:29:31
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\news_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d789fbe76e06_59159999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc50db3d5f75410931c9227dda448ebfbe88b147' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\news_form.html',
      1 => 1490520564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d789fbe76e06_59159999 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="news-form form-reset">
  <h3>新闻录入</h3><hr>
  <div class="form-group">
    <label for="news-title">标题</label>
    <input type="text" class="form-control" id="news-title" name="title" placeholder="title">
  </div>
  <div class="form-group">
    <label for="bgimg">添加图片</label>
    <div class="add-img">
      <div class="row">
        <div class="col-md-4">
          <button type="button" class="btn btn-default btn-check">选择上传文件
            <input class="fileinput fileinput_0" type="file" name="img" data-id="0">
          </button>
          <span class="filename_0"></span>
        </div>
        <input type="hidden" class="imginfo_0" name="imginfo_0">
        <a href="javascript:;" class="btn btn-info col-md-1 up-img" data-id="0">上传</a>
        <a href="javascript:;" class="btn btn-primary col-md-3 col-md-offset-1" data-toggle="modal" data-target="#choosefile">选择已上传的图片</a>
      </div>
      <label class="desc-label">添加图片描述</label>
      <input type="text" class="form-control" name="desc_0" placeholder="img-desc">
    </div>
    <div class="add-box"></div>
    <div class="add-btn">
      <button class="add addimg btn btn-default" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
    </div>
  </div>
  <div class="form-group">
    <label for="news-content">内容</label>
    <input type="text" class="form-control" id="news-content" name="content" placeholder="content">
  </div>
  <button type="button" class="btn btn-warning">Submit</button>

  <div class="modal fade" id="choosefile" tabindex="-1" role="dialog" aria-labelledby="choosefile">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">请挑选图片</h4>
        </div>
        <div class="modal-body choose-body">
          <ul class="choose-box">
            <li>
              <input type="radio" id="inlineCheckbox1" name="checkfile" value="imgid">
              <img src="/php/tjhzs/image/header/header.jpg" alt="imgid">
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">OK</button>
        </div>
      </div>
    </div>
  </div>
</form>

<?php echo '<script'; ?>
 src="./static/js/control.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./static/js/mainform.js"><?php echo '</script'; ?>
>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-03-26 08:36:17
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\hotel_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d761618be308_70604491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaa4301aaf0e1b30231a6490ab529fc4211c98f4' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\hotel_form.html',
      1 => 1490510175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d761618be308_70604491 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="hotels-form form-reset">
  <h3>酒店信息录入</h3><hr>
  <div class="form-group">
    <label for="hotel-name">酒店名字</label>
    <input type="text" class="form-control" id="hotel-name" name="name" placeholder="title">
  </div>
  <div class="form-group">
    <label for="bgimg">添加图片</label>
    <div class="add-img">
      <div class="row">
        <div class="col-md-4">
          <button type="button" class="btn btn-default btn-check">选择上传文件
            <input class="fileinput" type="file" id="imgfile" name="bgimg">
          </button>
          <span class="filename"></span>
        </div>
        <a href="javascript:;" class="btn btn-info col-md-1 up-img">上传</a>
        <a href="javascript:;" class="btn btn-primary col-md-3 col-md-offset-1" data-toggle="modal" data-target="#choosefile">选择已上传的图片</a>
      </div>
      <input type="text" class="form-control" id="img-desc" name="desc" placeholder="img-desc">
    </div>
    <div class="add-btn">
      <button class="add btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
    </div>
  </div>
  <div class="form-group">
    <label for="hotel-content">内容</label>
    <input type="text" class="form-control" id="hotel-content" name="content" placeholder="content">
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

<?php }
}

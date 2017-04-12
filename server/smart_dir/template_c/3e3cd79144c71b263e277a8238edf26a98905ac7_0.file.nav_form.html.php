<?php
/* Smarty version 3.1.30, created on 2017-04-11 05:16:40
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\nav_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ec4a986ca7f2_92403289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e3cd79144c71b263e277a8238edf26a98905ac7' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\nav_form.html',
      1 => 1491880593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec4a986ca7f2_92403289 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ctrl">
  <button type="button" class="btn btn-info form-edit">编辑</button>
  <button type="button" class="btn btn-info form-cancel" disabled>取消编辑</button>
</div>

<form class="nav-form form-reset">
  <h3>导航条设置</h3><hr>
  <div class="form-group">
   <label>导航条颜色设置</label>
   <div class="radio-box">
     <input class="color-radio" type="radio" name="color" value="#fff"> <span class="color-info color-white"></span>
   </div>
   <div class="radio-box">
     <input class="color-radio" type="radio" name="color" value="#000"> <span class="color-info color-black"></span>
   </div>
  </div>
  <div class="form-group">
   <label for="navbar-title">导航条副标题设置</label>
   <input type="text" class="form-control" id="navbar-title" name="title" placeholder="和谐 / 包容 / 发展 / 共赢" value="和谐 / 包容 / 发展 / 共赢">
  </div>
  <div class="form-group">
   <label>导航是否固定在顶部</label>
   <div class="radio-box">
     <input class="color-radio" type="radio" name="position" value="false"> <span>固定在网页顶部</span>
   </div>
   <div class="radio-box">
     <input class="color-radio" type="radio" name="position" value="true"> <span>始终保持在窗口顶部</span>
   </div>
  </div>
  <button type="button" class="btn btn-warning sub-nav">保存</button>
</form>

<?php echo '<script'; ?>
 type="text/javascript" src="static/js/mainform.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="static/js/control.js"><?php echo '</script'; ?>
>
<?php }
}

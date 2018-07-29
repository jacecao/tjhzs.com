<?php
/* Smarty version 3.1.30, created on 2017-04-11 07:53:22
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\bottom_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ec6f52a1b978_20427325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37b2a1d1b2d12c69a6d55e789746598864a66879' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\bottom_form.html',
      1 => 1491889999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec6f52a1b978_20427325 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ctrl">
  <button type="button" class="btn btn-info form-edit">编辑</button>
  <button type="button" class="btn btn-info form-cancel" disabled>取消编辑</button>
</div>
  <form class="web-form form-reset">
    <h3>网页底部信息设置</h3><hr>
    <fieldset>
      <legend><strong>网页信息</strong></legend>
      <div class="form-group">
        <label>公司名字</label>
        <input type="text" class="form-control" name="name" placeholder="公司名字">
      </div>
      <div class="form-group">
        <label>公司地址</label>
        <input type="text" class="form-control" name="address" placeholder="公司地址">
      </div>
      <div class="form-group">
        <label>网站备案号</label>
        <input type="text" class="form-control" name="number" placeholder="网站备案号">
      </div>
    </fieldset>
    <fieldset>
      <legend><strong>其他信息-1</strong></legend>
      <div class="form-group">
        <label>大标题</label>
        <input type="text" class="form-control" name="title" placeholder="title">
      </div>
      <div class="form-group">
        <label>小标题</label>
        <input type="text" class="form-control" name="small_title" placeholder="small_title">
      </div>
      <div class="form-group">
        <label>是否为链接</label>
        <input type="checkbox" name="is_link">
      </div>
      <div class="form-group">
        <label>链接地址</label>
        <input type="text" class="form-control" name="link_url" placeholder="url">
      </div>
    </fieldset>

    <fieldset>
      <legend><strong>其他信息-2</strong></legend>
      <div class="form-group">
        <label>大标题</label>
        <input type="text" class="form-control" name="title" placeholder="title">
      </div>
      <div class="form-group">
        <label>小标题</label>
        <input type="text" class="form-control" name="small_title" placeholder="small_title">
      </div>
      <div class="form-group">
        <label>是否为链接</label>
        <input type="checkbox" name="is_link">
      </div>
      <div class="form-group">
        <label>链接地址</label>
        <input type="text" class="form-control" name="link_url" placeholder="url">
      </div>
    </fieldset>
    <button type="button" class="btn btn-warning">Submit</button>
  </form>

  <?php echo '<script'; ?>
 type="text/javascript" src="static/js/mainform.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="static/js/control.js"><?php echo '</script'; ?>
>

<?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-04-12 04:49:13
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\footer_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ed95a9672ab9_72980183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb68330bf6adeb5310eaf1baea3eade658d410b1' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\footer_form.html',
      1 => 1491897924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ed95a9672ab9_72980183 (Smarty_Internal_Template $_smarty_tpl) {
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
        <input type="text" class="form-control" name="title_1" placeholder="title">
      </div>
      <div class="form-group">
        <label>小标题</label>
        <input type="text" class="form-control" name="small_title_1" placeholder="small_title">
      </div>
      <div class="form-group">
        <label>是否为链接</label>
        <input type="checkbox" class="is-link" name="is_link_1" data-id="1">
      </div>
      <div class="form-group link-box-1"><!-- 动态传入 -->
      </div>
    </fieldset>

    <fieldset>
      <legend><strong>其他信息-2</strong></legend>
      <div class="form-group">
        <label>大标题</label>
        <input type="text" class="form-control" name="title_2" placeholder="title">
      </div>
      <div class="form-group">
        <label>小标题</label>
        <input type="text" class="form-control" name="small_title_2" placeholder="small_title">
      </div>
      <div class="form-group">
        <label>是否为链接</label>
        <input type="checkbox" class="is-link" name="is_link_2" data-id="2">
      </div>
      <div class="form-group link-box-2"><!-- 动态传入 -->
      </div>
    </fieldset>
    <button type="button" class="btn btn-warning sub-footer">保存信息</button>
  </form>

  <?php echo '<script'; ?>
 type="text/javascript" src="static/js/mainform.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="static/js/control.js"><?php echo '</script'; ?>
>

<?php }
}

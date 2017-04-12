<?php
/* Smarty version 3.1.30, created on 2017-04-11 07:46:13
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\about_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ec6da57ab1e7_56430796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70b61356a793941156b904e0d5a3a372d51dadc6' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\about_form.html',
      1 => 1491889493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec6da57ab1e7_56430796 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ctrl">
  <button type="button" class="btn btn-info form-edit">编辑</button>
  <button type="button" class="btn btn-info form-cancel" disabled>取消编辑</button>
</div>

<form class="about-form form-reset">
  <h3>关于我们</h3><hr>
  <div class="form-group">
    <label>我们的愿景</label>
    <input type="text" class="form-control note" name="future_note[]" placeholder="note" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tjhzs']->value[0]['content'][0])===null||$tmp==='' ? '' : $tmp);?>
">
    <input type="text" class="form-control note" name="future_note[]" placeholder="note" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tjhzs']->value[0]['content'][1])===null||$tmp==='' ? '' : $tmp);?>
">
    <input type="text" class="form-control note" name="future_note[]" placeholder="note" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tjhzs']->value[0]['content'][2])===null||$tmp==='' ? '' : $tmp);?>
">
  </div>
  <div class="form-group">
    <label>关于我们</label>
    <input type="text" class="form-control note" name="about_note[]" placeholder="note" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tjhzs']->value[1]['content'][0])===null||$tmp==='' ? '' : $tmp);?>
">
    <input type="text" class="form-control note" name="about_note[]" placeholder="note" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tjhzs']->value[1]['content'][1])===null||$tmp==='' ? '' : $tmp);?>
">
    <input type="text" class="form-control note" name="about_note[]" placeholder="note" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tjhzs']->value[1]['content'][2])===null||$tmp==='' ? '' : $tmp);?>
">
  </div>
  <button type="button" class="btn btn-warning sub-about">保存</button>
</form>

<?php echo '<script'; ?>
 type="text/javascript" src="static/js/mainform.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="static/js/control.js"><?php echo '</script'; ?>
>

<?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-05-20 14:07:10
  from "G:\iis-net\tjhzs\beta\server\smart_dir\tpl\about_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5920316e340d42_83715212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b8a123c2493615b3e6e3227ad7c536bceb12468' => 
    array (
      0 => 'G:\\iis-net\\tjhzs\\beta\\server\\smart_dir\\tpl\\about_form.html',
      1 => 1495281836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5920316e340d42_83715212 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ctrl">
  <button type="button" class="btn btn-info form-edit">编辑</button>
  <button type="button" class="btn btn-info form-cancel" disabled>取消编辑</button>
</div>

<form class="about-form form-reset form-static">
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
 type="text/javascript" src="server/static/js/mainform.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="server/static/js/control.js"><?php echo '</script'; ?>
>

<?php }
}

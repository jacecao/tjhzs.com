<?php
/* Smarty version 3.1.30, created on 2017-05-28 13:56:25
  from "d:\enkjhost\tjhzs123\web\tjhzs\beta\server\smart_dir\tpl\job_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592ad7095ff7d4_01486131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b62b0e8dc5f03e883f87212f7943203fc7a8dba' => 
    array (
      0 => 'd:\\enkjhost\\tjhzs123\\web\\tjhzs\\beta\\server\\smart_dir\\tpl\\job_form.html',
      1 => 1495523761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592ad7095ff7d4_01486131 (Smarty_Internal_Template $_smarty_tpl) {
?>

  <form class="job-form form-reset">
    <h3>招聘发布</h3><hr>
    <div class="form-group">
      <label>岗位名称</label>
      <input type="text" class="form-control" name="name" placeholder="job name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? '' : $tmp);?>
">
    </div>
    <div class="form-group">
      <label>工作简述</label>
      <input type="text" class="form-control" name="job_note" placeholder="job note" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['note']->value)===null||$tmp==='' ? '' : $tmp);?>
">
    </div>
    <div class="form-group">
      <label>工作地点</label>
      <input type="text" class="form-control" name="job_loc" placeholder="job location" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['loc']->value)===null||$tmp==='' ? '' : $tmp);?>
">
    </div>
    <div class="form-group">
      <label>工作要求</label>
      <textarea class="form-control" name="job_req" placeholder="job requirment" rows="5"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['req']->value)===null||$tmp==='' ? '' : $tmp);?>
</textarea>
    </div>
    <div class="form-group">
      <label>工作描述</label>
      <?php if (isset($_smarty_tpl->tpl_vars['des']->value)) {?>
      <input type="text" class="form-control note" name="job_des[]" placeholder="job describe" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['des']->value[0])===null||$tmp==='' ? '' : $tmp);?>
">
      <input type="text" class="form-control note" name="job_des[]" placeholder="job describe" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['des']->value[1])===null||$tmp==='' ? '' : $tmp);?>
">
      <input type="text" class="form-control note" name="job_des[]" placeholder="job describe" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['des']->value[2])===null||$tmp==='' ? '' : $tmp);?>
">
      <?php } else { ?>
      <input type="text" class="form-control note" name="job_des[]" placeholder="job describe">
      <input type="text" class="form-control note" name="job_des[]" placeholder="job describe">
      <input type="text" class="form-control note" name="job_des[]" placeholder="job describe">
      <?php }?>
    </div>
      <?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?>
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
      <?php }?>
    <button type="button" class="btn btn-warning sub-job" data-id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? '' : $tmp);?>
">提交</button>
  </form>
<?php echo '<script'; ?>
 src="static/js/mainform.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="static/js/control.js"><?php echo '</script'; ?>
>
<?php }
}

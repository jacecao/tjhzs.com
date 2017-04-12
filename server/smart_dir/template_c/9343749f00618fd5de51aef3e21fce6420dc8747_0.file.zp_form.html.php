<?php
/* Smarty version 3.1.30, created on 2017-03-26 08:37:26
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\zp_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d761a648a034_72586297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9343749f00618fd5de51aef3e21fce6420dc8747' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\zp_form.html',
      1 => 1490509835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d761a648a034_72586297 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <form class="job-form form-reset">
    <h3>招聘发布</h3><hr>
    <div class="form-group">
      <label>岗位名称</label>
      <input type="text" class="form-control" name="name" placeholder="job name">
    </div>
    <div class="form-group">
      <label>工作简述</label>
      <input type="text" class="form-control" name="job_note" placeholder="job note">
    </div>
    <div class="form-group">
      <label>工作地点</label>
      <input type="text" class="form-control" name="job_location" placeholder="job location">
    </div>
    <div class="form-group">
      <label>工作要求</label>
      <textarea class="form-control" name="job_req" placeholder="job requirment" rows="5"></textarea>
    </div>
    <div class="form-group">
      <label>工作描述</label>
      <input type="text" class="form-control note" name="job_describe1" placeholder="job describe">
      <input type="text" class="form-control note" name="job_describe2" placeholder="job describe">
      <input type="text" class="form-control note" name="job_describe2" placeholder="job describe">
    </div>
    <button type="button" class="btn btn-warning">Submit</button>
  </form>
<?php }
}

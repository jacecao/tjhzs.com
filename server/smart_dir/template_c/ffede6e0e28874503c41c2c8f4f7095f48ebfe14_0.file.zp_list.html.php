<?php
/* Smarty version 3.1.30, created on 2017-04-13 05:25:06
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\zp_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eeef927862c4_33202393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffede6e0e28874503c41c2c8f4f7095f48ebfe14' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\zp_list.html',
      1 => 1490347972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58eeef927862c4_33202393 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="jobs-list data-list">
  <h3>招聘信息发布列表</h3><hr>
  <table class="table table-hover text-center">
    <thead>
      <tr>
        <th class="text-center">编号</th>
        <th class="text-center">岗位名称</th>
        <th class="text-center">发布员</th>
        <th class="text-center">添加时间</th>
        <th class="text-center">修改时间</th>
        <th class="text-center">管理</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>销售助理</td>
        <td>username</td>
        <td>2017-03-12</td>
        <td>2017-03-12</td>
        <td>
          <button class="btn btn-default edit" type="button" data-news="jobid">编辑</button>
          <button class="btn btn-warning del" type="button" data-news="jobid">删除</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-04-13 05:25:23
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\hotel_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eeefa3207c13_61385358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f36b0a0f0094a9dbf497f47e70e212e3fb7888e' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\hotel_list.html',
      1 => 1490347725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58eeefa3207c13_61385358 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="hotels-list data-list">
  <h3>酒店信息列表</h3><hr>
  <table class="table table-hover text-center">
    <thead>
      <tr>
        <th class="text-center">编号</th>
        <th class="text-center">名字</th>
        <th class="text-center">作者</th>
        <th class="text-center">添加时间</th>
        <th class="text-center">修改时间</th>
        <th class="text-center">管理</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>hello word</td>
        <td>username</td>
        <td>2017-03-12</td>
        <td>2017-03-12</td>
        <td>
          <button class="btn btn-default edit" type="button" data-news="newsid">编辑</button>
          <button class="btn btn-warning del" type="button" data-news="newsid">删除</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<?php }
}

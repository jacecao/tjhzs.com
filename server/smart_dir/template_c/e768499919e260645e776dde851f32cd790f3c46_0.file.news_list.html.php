<?php
/* Smarty version 3.1.30, created on 2017-04-13 05:25:27
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\news_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eeefa7e12123_40183241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e768499919e260645e776dde851f32cd790f3c46' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\news_list.html',
      1 => 1490347630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58eeefa7e12123_40183241 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="news-list data-list">
  <h3>新闻列表</h3><hr>
  <table class="table table-hover text-center data-list">
    <thead>
      <tr>
        <th class="text-center">编号</th>
        <th class="text-center">标题</th>
        <th class="text-center">作者</th>
        <th class="text-center">添加时间</th>
        <th class="text-center">修改时间</th>
        <th class="text-center">管理</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>hello word hello word hello word hello word</td>
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

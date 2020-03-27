<?php
/* Smarty version 3.1.30, created on 2017-05-20 14:26:48
  from "G:\iis-net\tjhzs\beta\server\smart_dir\tpl\news_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59203608c3f992_59329061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c91cc41f541db39a9df8db8da64ca64fab6b542' => 
    array (
      0 => 'G:\\iis-net\\tjhzs\\beta\\server\\smart_dir\\tpl\\news_list.html',
      1 => 1495281932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59203608c3f992_59329061 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th class="text-center">管理</th>
      </tr>
    </thead>
    <tbody>
      <?php if (isset($_smarty_tpl->tpl_vars['news']->value)) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'one');
$_smarty_tpl->tpl_vars['one']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->iteration++;
$__foreach_one_0_saved = $_smarty_tpl->tpl_vars['one'];
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['one']->iteration;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one']->value['username'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one']->value['date'];?>
</td>
        <td>
          <button class="btn btn-default news-edit" type="button" data-id="<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
">编辑</button>
          <button class="btn btn-warning news-del" type="button" data-id="<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
">删除</button>
        </td>
      </tr>
      <?php
$_smarty_tpl->tpl_vars['one'] = $__foreach_one_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <?php }?>
    </tbody>
  </table>
</div>

<?php echo '<script'; ?>
 src="server/static/js/mainform.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="server/static/js/control.js"><?php echo '</script'; ?>
>
<?php }
}

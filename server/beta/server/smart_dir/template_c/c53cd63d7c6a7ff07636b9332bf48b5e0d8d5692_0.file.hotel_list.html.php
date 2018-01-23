<?php
/* Smarty version 3.1.30, created on 2017-05-20 14:26:45
  from "G:\iis-net\tjhzs\beta\server\smart_dir\tpl\hotel_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59203605e9c229_16872928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c53cd63d7c6a7ff07636b9332bf48b5e0d8d5692' => 
    array (
      0 => 'G:\\iis-net\\tjhzs\\beta\\server\\smart_dir\\tpl\\hotel_list.html',
      1 => 1495281877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59203605e9c229_16872928 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th class="text-center">管理</th>
      </tr>
    </thead>
    <tbody>
      <?php if (isset($_smarty_tpl->tpl_vars['hotel']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel']->value, 'one');
$_smarty_tpl->tpl_vars['one']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->iteration++;
$__foreach_one_0_saved = $_smarty_tpl->tpl_vars['one'];
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['one']->iteration;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['one']->value['username'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['one']->value['date'];?>
</td>
          <td>
            <button class="btn btn-default hotel-edit" type="button" data-id="<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
">编辑</button>
            <button class="btn btn-warning hotel-del" type="button" data-id="<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
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

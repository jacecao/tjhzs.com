<?php
/* Smarty version 3.1.30, created on 2017-03-23 06:48:13
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\userlist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d3619dd2fa93_34713520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac95b79ec94c9806446aae13abaf88f91e35e235' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\userlist.html',
      1 => 1490247819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d3619dd2fa93_34713520 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="user-list data-list">
  <h3>管理员列表</h3><hr>
  <table class="table table-hover text-center data-list">
    <thead>
      <tr>
        <th class="text-center">编号</th>
        <th class="text-center">管理员账号</th>
        <th class="text-center">注册时间</th>
        <th class="text-center">管理</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->iteration++;
$__foreach_user_0_saved = $_smarty_tpl->tpl_vars['user'];
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->iteration;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['date'];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['power']->value === 'root') {?>
        <td><button class="btn btn-warning del-user" type="button" data-user="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
">删除管理员</button></td>
        <?php } else { ?>
        <td><button class="btn btn-warning del-user" type="button" disabled>删除管理员</button></td>
        <?php }?>
      </tr>
        <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <?php }?>
    </tbody>
  </table>
</div>
<?php echo '<script'; ?>
 src="./static/js/control.js"><?php echo '</script'; ?>
>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2019-07-03 14:06:08
  from "D:\wamp64\www\server\smart_dir\tpl\job_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1cb650976234_04539846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c37c40eee791249d8d9d60afcccb48789ece544' => 
    array (
      0 => 'D:\\wamp64\\www\\server\\smart_dir\\tpl\\job_list.html',
      1 => 1561275885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1cb650976234_04539846 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="jobs-list data-list">
  <h3>招聘信息发布列表</h3><hr>
  <table class="table table-hover text-center">
    <thead>
      <tr>
        <th class="text-center">编号</th>
        <th class="text-center">岗位名称</th>
        <th class="text-center">职位发布者</th>
        <th class="text-center">添加时间</th>
        <th class="text-center">管理</th>
      </tr>
    </thead>
    <tbody>
      <?php if (isset($_smarty_tpl->tpl_vars['jobs']->value)) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobs']->value, 'job');
$_smarty_tpl->tpl_vars['job']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->iteration++;
$__foreach_job_0_saved = $_smarty_tpl->tpl_vars['job'];
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['job']->iteration;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['job']->value['user'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['job']->value['date'];?>
</td>
        <td>
          <button class="btn btn-default job-edit" type="button" data-id="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
">编辑</button>
          <button class="btn btn-warning job-del" type="button" data-id="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
">删除</button>
        </td>
      </tr>
      <?php
$_smarty_tpl->tpl_vars['job'] = $__foreach_job_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <?php }?>
    </tbody>
  </table>
</div>
<?php echo '<script'; ?>
 src="static/js/mainform.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="static/js/control.js"><?php echo '</script'; ?>
>
<?php }
}

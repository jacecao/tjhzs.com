<?php
/* Smarty version 3.1.30, created on 2017-03-29 11:16:32
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\img_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58db7b70267e05_03062377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d02f5f4eb0086bbb26f476ff1489e247e91df4a' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\img_list.html',
      1 => 1490778966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58db7b70267e05_03062377 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['images']->value) {?>
  <ul class="choose-box">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
    <li>
      <input type="radio" name="chooseimg" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
" data-desc="<?php echo $_smarty_tpl->tpl_vars['image']->value['desc'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
">
      <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
">
    </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </ul>
<?php } else { ?>
  <p>还没有图片上传哦</p>
<?php }
}
}

<?php
/* Smarty version 3.1.30, created on 2019-09-14 22:58:08
  from "D:\wamp64\www\server_ori\smart_dir\tpl\img_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d7d708090c245_57640493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78b028f06f9a60c27f669ec4ca6d686ff12e244d' => 
    array (
      0 => 'D:\\wamp64\\www\\server_ori\\smart_dir\\tpl\\img_list.html',
      1 => 1561275885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7d708090c245_57640493 (Smarty_Internal_Template $_smarty_tpl) {
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
" data-desc="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value['desc'])===null||$tmp==='' ? 'post' : $tmp);?>
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

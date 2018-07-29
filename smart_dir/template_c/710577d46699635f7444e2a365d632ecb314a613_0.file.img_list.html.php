<?php
/* Smarty version 3.1.30, created on 2017-05-23 08:44:07
  from "d:\enkjhost\tjhzs123\web\tjhzs\beta\server\smart_dir\tpl\img_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5923f657d14162_01268982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '710577d46699635f7444e2a365d632ecb314a613' => 
    array (
      0 => 'd:\\enkjhost\\tjhzs123\\web\\tjhzs\\beta\\server\\smart_dir\\tpl\\img_list.html',
      1 => 1495523760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5923f657d14162_01268982 (Smarty_Internal_Template $_smarty_tpl) {
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

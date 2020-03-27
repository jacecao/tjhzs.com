<?php
/* Smarty version 3.1.30, created on 2019-07-03 14:06:14
  from "D:\wamp64\www\server\smart_dir\tpl\footer_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1cb656520951_55463144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f546b36e8d6c7895cf9e5d10987b1589770905d' => 
    array (
      0 => 'D:\\wamp64\\www\\server\\smart_dir\\tpl\\footer_form.html',
      1 => 1561275885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1cb656520951_55463144 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ctrl">
  <button type="button" class="btn btn-info form-edit">编辑</button>
  <button type="button" class="btn btn-info form-cancel" disabled>取消编辑</button>
</div>
  <form class="web-form form-reset form-static">
    <h3>网页底部信息设置</h3><hr>
    <fieldset>
      <legend><strong>网页信息</strong></legend>
      <div class="form-group">
        <label>公司名字</label>
        <input type="text" class="form-control" name="name" placeholder="公司名字" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['webinfo']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
">
      </div>
      <div class="form-group">
        <label>公司地址</label>
        <input type="text" class="form-control" name="address" placeholder="公司地址" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['webinfo']->value['address'])===null||$tmp==='' ? '' : $tmp);?>
">
      </div>
      <div class="form-group">
        <label>网站备案号</label>
        <input type="text" class="form-control" name="number" placeholder="网站备案号" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['webinfo']->value['number'])===null||$tmp==='' ? '' : $tmp);?>
">
      </div>
    </fieldset>
    <fieldset>
      <legend><strong>其他信息-1</strong></legend>
      <div class="form-group">
        <label>大标题</label>
        <?php if (isset($_smarty_tpl->tpl_vars['blockinfo']->value[0])) {?>
        <input type="text" class="form-control" name="title_1" placeholder="title" value="<?php echo $_smarty_tpl->tpl_vars['blockinfo']->value[0]['title'];?>
">
        <?php } else { ?>
        <input type="text" class="form-control" name="title_1" placeholder="title">
        <?php }?>
      </div>
      <div class="form-group">
        <label>小标题</label>
        <?php if (isset($_smarty_tpl->tpl_vars['blockinfo']->value[0])) {?>
        <input type="text" class="form-control" name="small_title_1" placeholder="small_title" value="<?php echo $_smarty_tpl->tpl_vars['blockinfo']->value[0]['smalltitle'];?>
">
        <?php } else { ?>
        <input type="text" class="form-control" name="small_title_1" placeholder="small_title">
        <?php }?>
      </div>
      <div class="form-group">
        <label>是否为链接</label>
        <?php if (isset($_smarty_tpl->tpl_vars['blockinfo']->value[0]) && $_smarty_tpl->tpl_vars['blockinfo']->value[0]['link']) {?>
        <input type="checkbox" class="is-link" name="is_link_1" data-id="1" value="true" checked>
        <?php } else { ?>
        <input type="checkbox" class="is-link" name="is_link_1" data-id="1" value="true">
        <?php }?>
      </div>
      <div class="form-group link-box-1"><!-- 动态传入 -->
        <?php if (isset($_smarty_tpl->tpl_vars['blockinfo']->value[0]) && $_smarty_tpl->tpl_vars['blockinfo']->value[0]['link']) {?>
        <div class="link-body-1">
          <div class="form-group">
            <label>链接地址</label>
            <input type="text" class="form-control" name="link_url_1" placeholder="url" value="<?php echo $_smarty_tpl->tpl_vars['blockinfo']->value[0]['url'];?>
">
          </div>
        </div>
        <?php }?>
      </div>
    </fieldset>

    <fieldset>
      <legend><strong>其他信息-2</strong></legend>
      <div class="form-group">
        <label>大标题</label>
        <?php if (isset($_smarty_tpl->tpl_vars['blockinfo']->value[1])) {?>
        <input type="text" class="form-control" name="title_2" placeholder="title" value="<?php echo $_smarty_tpl->tpl_vars['blockinfo']->value[1]['title'];?>
">
        <?php } else { ?>
        <input type="text" class="form-control" name="title_2" placeholder="title">
        <?php }?>
      </div>
      <div class="form-group">
        <label>小标题</label>
        <?php if (isset($_smarty_tpl->tpl_vars['blockinfo']->value[1])) {?>
        <input type="text" class="form-control" name="small_title_2" placeholder="small_title" value="<?php echo $_smarty_tpl->tpl_vars['blockinfo']->value[1]['smalltitle'];?>
">
        <?php } else { ?>
        <input type="text" class="form-control" name="small_title_2" placeholder="small_title">
        <?php }?>
      </div>
      <div class="form-group">
        <label>是否为链接</label>
        <?php if (isset($_smarty_tpl->tpl_vars['blockinfo']->value[1]) && $_smarty_tpl->tpl_vars['blockinfo']->value[1]['link']) {?>
        <input type="checkbox" class="is-link" name="is_link_2" data-id="2" value="true" checked>
        <?php } else { ?>
        <input type="checkbox" class="is-link" name="is_link_2" data-id="2" value="true">
        <?php }?>
      </div>
      <div class="form-group link-box-2"><!-- 动态传入 -->
      <?php if (isset($_smarty_tpl->tpl_vars['blockinfo']->value[1]) && $_smarty_tpl->tpl_vars['blockinfo']->value[1]['link']) {?>
      <div class="link-body-2">
        <div class="form-group">
          <label>链接地址</label>
          <input type="text" class="form-control" name="link_url_2" placeholder="url" value="<?php echo $_smarty_tpl->tpl_vars['blockinfo']->value[1]['url'];?>
">
        </div>
      </div>
      <?php }?>
      </div>
    </fieldset>
    <button type="button" class="btn btn-warning sub-footer">保存信息</button>
  </form>

  <?php echo '<script'; ?>
 type="text/javascript" src="static/js/mainform.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="static/js/control.js"><?php echo '</script'; ?>
>

<?php }
}

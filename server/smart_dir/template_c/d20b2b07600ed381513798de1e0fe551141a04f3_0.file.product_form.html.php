<?php
/* Smarty version 3.1.30, created on 2017-04-13 10:30:55
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\product_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ef373f431541_72641899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd20b2b07600ed381513798de1e0fe551141a04f3' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\product_form.html',
      1 => 1492054088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ef373f431541_72641899 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ctrl">
  <button type="button" class="btn btn-info form-edit">编辑</button>
  <button type="button" class="btn btn-info form-cancel" disabled>取消编辑</button>
</div>
<form class="products-form form-reset">
  <h3><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? '产品信息初始' : $tmp);?>
设置</h3><hr>
  <fieldset>
    <legend>导航信息</legend>
    <div class="form-group">
      <label for="bgimg">Logo图片</label>
      <div class="row">
        <div class="show_image">
          <img class="scan-img scan-img-logo" src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['logo']->value['img_url'])===null||$tmp==='' ? '' : $tmp);?>
" alt="logo">
        </div>
        <div class="col-md-6">
          <button type="button" class="btn btn-default btn-check" disabled>上传图片
            <input class="fileinput fileinput_logo" type="file" name="logoimg" data-id="logo">
          </button>
          <span class="imgname filename_logo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['logo']->value['img_name'])===null||$tmp==='' ? '请上传图片' : $tmp);?>
</span>
        </div>
        <div class="logo-box">
          <?php if (isset($_smarty_tpl->tpl_vars['logo']->value)) {?>
          <div class="logo-info-old">
            <input type="hidden" name="post_id[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['logo']->value['img_id'])===null||$tmp==='' ? '' : $tmp);?>
">
            <input type="hidden" name="post_name[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['logo']->value['img_name'])===null||$tmp==='' ? '' : $tmp);?>
">
            <input type="hidden" name="post_url[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['logo']->value['img_url'])===null||$tmp==='' ? '' : $tmp);?>
">
            <input type="hidden" name="post_desc[]" value="logo">
          </div>
          <?php }?>
        </div>
        <button type="button" class="btn btn-info col-md-1 up-logo" data-id="logo" disabled>上传</button>
        <button type="button" class="btn btn-primary col-md-2 col-md-offset-1 choose choose-logo" data-toggle="modal" data-id="logo" data-dir="logo" data-target="#choosefile" >选择图片</button>
      </div>
    </div>
    <div class="form-group">
      <label>顶部信息</label>
      <?php if (isset($_smarty_tpl->tpl_vars['note']->value)) {?>
        <input type="text" class="form-control note" name="header_note[]" placeholder="note" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['note']->value[0])===null||$tmp==='' ? '' : $tmp);?>
">
        <input type="text" class="form-control note" name="header_note[]" placeholder="note" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['note']->value[1])===null||$tmp==='' ? '' : $tmp);?>
">
      <?php } else { ?>
        <input type="text" class="form-control note" name="header_note[]" placeholder="note" value="">
        <input type="text" class="form-control note" name="header_note[]" placeholder="note" value="">
      <?php }?>
    </div>
  </fieldset>
  <fieldset>
    <legend><?php echo (($tmp = @$_smarty_tpl->tpl_vars['show']->value['title'])===null||$tmp==='' ? '产品展示' : $tmp);?>
信息</legend>
    <div class="form-group">
      <label>展示信息</label>
      <?php if (isset($_smarty_tpl->tpl_vars['show']->value) && $_smarty_tpl->tpl_vars['show']->value['note']) {?>
        <input type="text" class="form-control note" name="show_note[]" placeholder="note" value="<?php echo $_smarty_tpl->tpl_vars['show']->value['note'][0];?>
">
        <input type="text" class="form-control note" name="show_note[]" placeholder="note" value="<?php echo $_smarty_tpl->tpl_vars['show']->value['note'][1];?>
">
      <?php } else { ?>
        <input type="text" class="form-control note" name="show_note[]" placeholder="note" value="">
        <input type="text" class="form-control note" name="show_note[]" placeholder="note" value="">
      <?php }?>
    </div>
    <div class="form-group">
      <label>底部标语</label>
      <?php if (isset($_smarty_tpl->tpl_vars['show']->value)) {?>
        <input type="text" class="form-control note" name="bottom_note" placeholder="note" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['show']->value['ad'])===null||$tmp==='' ? '' : $tmp);?>
">
      <?php } else { ?>
        <input type="text" class="form-control note" name="bottom_note" placeholder="note" value="">
      <?php }?>
    </div>
    <div class="form-group">
      <label for="bgimg">添加图片</label>
      <div class="add-img">
      <?php if (isset($_smarty_tpl->tpl_vars['show']->value) && !empty($_smarty_tpl->tpl_vars['show']->value['images'])) {?>
        <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['show']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->index++;
$__foreach_image_0_saved = $_smarty_tpl->tpl_vars['image'];
?>
          <div class="col-md-6 scan-box-<?php echo $_smarty_tpl->tpl_vars['image']->index;?>
">
            <div class="show_image">
              <img class="scan-img" src="<?php echo $_smarty_tpl->tpl_vars['image']->value['img_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['img_url'];?>
">
              <button type="button" class="btn btn-warning del-scan" data-id="<?php echo $_smarty_tpl->tpl_vars['image']->index;?>
"><span class="glyphicon glyphicon-trash"></span></button>
            </div>
            <div class="img-info">
              <input type="hidden" name="img_id[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value['img_id'])===null||$tmp==='' ? '' : $tmp);?>
">
              <input type="hidden" name="img_url[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value['img_url'])===null||$tmp==='' ? '' : $tmp);?>
">
              <input type="hidden" name="img_name[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value['img_name'])===null||$tmp==='' ? '' : $tmp);?>
">
              <input type="hidden" name="img_desc[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value['img_desc'])===null||$tmp==='' ? '' : $tmp);?>
">
            </div>
          </div>
        <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
      <?php } else { ?>
        <div class="row row-0">
          <div class="col-md-6">
            <button type="button" class="btn btn-default btn-check">上传图片
              <input class="fileinput fileinput_0" type="file" name="img" data-id="0">
            </button>
            <span class="imgname filename_0"></span>
          </div>
          <button type="button" class="btn btn-info col-md-1 up-0" data-id="0">上传</button>
          <button type="button" class="btn btn-primary col-md-2 col-md-offset-1 choose choose-product" data-toggle="modal" data-id="0" data-dir="product" data-target="#choosefile">选择图片</button>
        </div>
        <label class="desc-label">添加图片描述</label>
        <input type="text" class="form-control desc-0" name="img_desc_new[]" placeholder="img-desc">
      <?php }?>
      </div>
      <div class="add-box"></div>
      <!-- 添加图片 -->
      <div class="add-btn">
        <button class="add addimg-product btn btn-default" type="button">
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        </button>
      </div>
    </div>
  </fieldset>

  <button type="button" class="btn btn-warning sub-data" data-up="<?php echo $_smarty_tpl->tpl_vars['api']->value;?>
">保存修改</button>

</form>

<div class="modal fade" id="choosefile" tabindex="-1" role="dialog" aria-labelledby="choosefile">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">请挑选图片</h4>
      </div>
      <div class="modal-body choose-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary choose-ok">OK</button>
      </div>
    </div>
  </div>
</div>

<?php echo '<script'; ?>
 src="./static/js/mainform.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./static/js/control.js"><?php echo '</script'; ?>
>

<?php }
}

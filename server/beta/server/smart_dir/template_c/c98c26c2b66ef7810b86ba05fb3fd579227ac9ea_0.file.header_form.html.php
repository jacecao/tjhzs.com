<?php
/* Smarty version 3.1.30, created on 2017-05-13 18:54:54
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\header_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59173a5ea52e27_01862580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c98c26c2b66ef7810b86ba05fb3fd579227ac9ea' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\header_form.html',
      1 => 1494694445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59173a5ea52e27_01862580 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ctrl">
  <button type="button" class="btn btn-info form-edit">编辑</button>
  <button type="button" class="btn btn-info form-cancel" disabled>取消编辑</button>
</div>
<form class="show-form header-form form-reset form-static">
  <h3>头部信息设置</h3><hr>
  <div class="form-group">
    <label for="city">举办城市</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="City" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['city']->value)===null||$tmp==='' ? '成都' : $tmp);?>
">
  </div>
  <div class="form-group">
   <label for="season">举办季节</label>
   <input type="text" class="form-control" id="season" name="season" placeholder="Season" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['season']->value)===null||$tmp==='' ? '春季' : $tmp);?>
">
  </div>
  <div class="form-group">
   <label for="readytime">布展时间</label>
   <input type="text" class="form-control" id="readytime" name="readytime" placeholder="填写格式：2017-04-12" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['readytime']->value)===null||$tmp==='' ? '' : $tmp);?>
">
  </div>
  <div class="form-group">
    <label for="starttime">开展时间</label>
    <input type="text" class="form-control" id="starttime" name="starttime" placeholder="填写格式：2017-10-12" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['starttime']->value)===null||$tmp==='' ? '' : $tmp);?>
">
  </div>
  <div class="form-group">
    <label for="addr">举办地址</label>
    <input type="text" class="form-control" id="addr" name="addr" placeholder="Address" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['addr']->value)===null||$tmp==='' ? '成都新会展中心' : $tmp);?>
">
  </div>
  <div class="form-group">
    <label for="zhuban">主办方</label>
    <input type="text" class="form-control" id="zhuban" name="zhuban" placeholder="Zhuban" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['zhuban']->value)===null||$tmp==='' ? '' : $tmp);?>
">
  </div>
  <div class="form-group">
    <label for="chenban">承办方</label>
    <input type="text" class="form-control" id="chenban" name="chenban" placeholder="Chenban" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['chenban']->value)===null||$tmp==='' ? '' : $tmp);?>
">
  </div>
  <div class="form-group">
    <label for="imgfile">上传背景图片</label>
    <div class="row">
      <div class="show_image">
        <img class="scan-img scan-img-post" src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['bgimg']->value['img_url'])===null||$tmp==='' ? '' : $tmp);?>
" alt="请上传图片">
      </div>
      <div class="col-md-6">
        <button type="button" class="btn btn-default btn-check" disabled>上传图片
          <input class="fileinput fileinput_post" type="file" name="postimg" data-id="post">
        </button>
        <span class="imgname filename_post"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['bgimg']->value['img_name'])===null||$tmp==='' ? '请上传图片' : $tmp);?>
</span>
      </div>
      <div class="post-box">
        <?php if (isset($_smarty_tpl->tpl_vars['bgimg']->value)) {?>
        <div class="post-info-old">
          <input type="hidden" name="post_id[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['bgimg']->value['img_id'])===null||$tmp==='' ? '' : $tmp);?>
">
          <input type="hidden" name="post_name[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['bgimg']->value['img_name'])===null||$tmp==='' ? '' : $tmp);?>
">
          <input type="hidden" name="post_url[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['bgimg']->value['img_url'])===null||$tmp==='' ? '' : $tmp);?>
">
          <input type="hidden" name="post_desc[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['bgimg']->value['img_desc'])===null||$tmp==='' ? 'logo or post' : $tmp);?>
">
        </div>
        <?php }?>
      </div>
      <button type="button" class="btn btn-info col-md-1 up-header-post" data-id="post" disabled>上传</button>
      <button type="button" class="btn btn-primary col-md-2 col-md-offset-1 choose choose-header-post" data-toggle="modal" data-id="post" data-dir="header" data-target="#choosefile" >选择图片</button>
    </div>
  </div>
  <button type="button" class="btn btn-warning sub-header">保存</button>
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
 type="text/javascript" src="./static/js/mainform.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./static/js/control.js"><?php echo '</script'; ?>
>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-06-02 04:25:24
  from "d:\enkjhost\tjhzs123\web\tjhzs\beta\server\smart_dir\tpl\news_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5930e8b494fd14_86226525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6242f41d447f871aad7bc60dea1b12d768235dc9' => 
    array (
      0 => 'd:\\enkjhost\\tjhzs123\\web\\tjhzs\\beta\\server\\smart_dir\\tpl\\news_form.html',
      1 => 1496377471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5930e8b494fd14_86226525 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="news-form form-reset">
  <h3>新闻录入</h3><hr>
  <div class="form-group">
    <label for="news-title">标题</label>
    <input type="text" class="form-control" id="news-title" name="title" placeholder="标题" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? '' : $tmp);?>
">
  </div>
  <div class="form-group">
    <label for="bgimg">新闻封面图片</label>
    <div class="row">
      <div class="show_image">
        <?php if (isset($_smarty_tpl->tpl_vars['poster']->value)) {?>
        <img class="scan-img scan-img-news-post" src="<?php echo $_smarty_tpl->tpl_vars['poster']->value['url'];?>
" alt="封面图片 size: 740 x 300">
        <?php } else { ?>
        <img class="scan-img scan-img-news-post" src="" alt="封面图片 size: 740 x 300">
        <?php }?>
      </div>
      <div class="col-md-6">
        <button type="button" class="btn btn-default btn-check">上传图片
          <input class="fileinput fileinput_news-post" type="file" name="postimg" data-id="news-post">
        </button>
        <span class="imgname filename_news-post"></span>
      </div>
      <div class="news-post-box">
        <?php if (isset($_smarty_tpl->tpl_vars['poster']->value)) {?>
        <div class="news-post-info-old">
          <input type="hidden" name="post_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['poster']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
          <input type="hidden" name="post_name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['poster']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
">
          <input type="hidden" name="post_url" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['poster']->value['url'])===null||$tmp==='' ? '' : $tmp);?>
">
        </div>
        <?php }?>
      </div>
      <button type="button" class="btn btn-info col-md-1 up-news-post" data-id="news-post">上传</button>
      <button type="button" class="btn btn-primary col-md-2 col-md-offset-1 choose choose-news-post" data-toggle="modal" data-id="news-post" data-dir="news" data-target="#choosefile" >选择图片</button>
    </div>
    <label class="desc-label">添加封面描述</label>
     <?php if (isset($_smarty_tpl->tpl_vars['poster']->value)) {?>
    <input type="text" class="form-control desc-news-post" name="post_desc" placeholder="post-desc" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['poster']->value['desc'])===null||$tmp==='' ? '' : $tmp);?>
">
    <?php } else { ?>
    <input type="text" class="form-control desc-news-post" name="post_desc" placeholder="post-desc">
    <?php }?>
  </div>
  <div class="form-group">
    <label for="bgimg">添加新闻图片</label>
    <div class="add-img">
      <?php if (isset($_smarty_tpl->tpl_vars['images']->value) && !empty($_smarty_tpl->tpl_vars['images']->value)) {?>
        <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->index++;
$__foreach_image_0_saved = $_smarty_tpl->tpl_vars['image'];
?>
          <div class="col-md-6 scan-box-<?php echo $_smarty_tpl->tpl_vars['image']->index;?>
">
            <div class="show_image">
              <img class="scan-img" src="<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['image']->value['desc'];?>
">
              <button type="button" class="btn btn-warning del-scan" data-id="<?php echo $_smarty_tpl->tpl_vars['image']->index;?>
"><span class="glyphicon glyphicon-trash"></span></button>
            </div>
            <div class="img-info">
              <input type="hidden" name="img_id[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
              <input type="hidden" name="img_url[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value['url'])===null||$tmp==='' ? '' : $tmp);?>
">
              <input type="hidden" name="img_name[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
">
              <input type="hidden" name="img_desc[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value['desc'])===null||$tmp==='' ? '' : $tmp);?>
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
          <button type="button" class="btn btn-info col-md-1 up-news" data-id="0">上传</button>
          <button type="button" class="btn btn-primary col-md-2 col-md-offset-1 choose choose-news" data-toggle="modal" data-id="0" data-dir="news" data-target="#choosefile">选择图片</button>
        </div>
        <label class="desc-label">添加图片描述</label>
        <input type="text" class="form-control desc-0" name="img_desc_new[]" placeholder="img-desc">
      <?php }?>
    </div>
    <div class="add-box"></div>
    <div class="add-btn">
      <button class="add addimg-news btn btn-default" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
    </div>
  </div>
  <div class="form-group">
    <label for="news-content">内容</label>
    <textarea class="form-control" name="content" id="news-content" placeholder="news content" rows="5"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? '' : $tmp);?>
</textarea>
  </div>
  <?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?>
  <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
  <?php }?>
  <button type="button" class="btn btn-warning sub-news" data-id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? '' : $tmp);?>
">提交数据</button>
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
 src="static/js/mainform.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="static/js/control.js"><?php echo '</script'; ?>
>

<?php }
}

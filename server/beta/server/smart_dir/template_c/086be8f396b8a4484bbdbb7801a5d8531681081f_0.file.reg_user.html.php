<?php
/* Smarty version 3.1.30, created on 2017-03-23 06:33:18
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\reg_user.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d35e1edac733_82530465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '086be8f396b8a4484bbdbb7801a5d8531681081f' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\reg_user.html',
      1 => 1490247174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d35e1edac733_82530465 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="user-login userform">
  <h3>添加新的管理员</h3><hr>
  <div class="form-box">
    <div class="form-group">
      <label for="user">用户名</label>
      <input type="text" class="form-control" id="user" name="username" placeholder="Username">
    </div>
    <div class="form-group">
      <label for="psw">密码</label>
      <input type="password" class="form-control" id="psw" name="password" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="psw_r">再一次输入密码</label>
      <input type="password" class="form-control" id="psw_r" placeholder="Password">
    </div>
    <div class="form-group captchar-input">
      <label for="captchar">请输入验证码 <a class="change-captchar" href="javascript:void(0);">换一个</a></label>
      <div class="input-group">
        <input type="text" class="form-control" id="captchar" name="captchar" placeholder="Captchar">
        <span class="input-group-addon captchar-box">
          <img class="captchar-img" src="/php/tjhzs/server/captchar.php" alt="识别码">
        </span>
      </div>
    </div>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['user']->value['power'] === 'root') {?>
  <button type="button" class="btn btn-primary btn-sub btn-reg">注册管理员</button>
  <?php } else { ?>
  <button type="button" class="btn btn-primary" disabled>注册管理员</button>
  <?php }?>
</form>

<?php echo '<script'; ?>
 src="./static/js/form.js"><?php echo '</script'; ?>
>
<?php }
}

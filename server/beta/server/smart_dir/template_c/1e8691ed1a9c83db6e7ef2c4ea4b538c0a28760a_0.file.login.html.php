<?php
/* Smarty version 3.1.30, created on 2017-05-20 13:26:29
  from "G:\iis-net\tjhzs\beta\server\smart_dir\tpl\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592027e584f208_11582227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e8691ed1a9c83db6e7ef2c4ea4b538c0a28760a' => 
    array (
      0 => 'G:\\iis-net\\tjhzs\\beta\\server\\smart_dir\\tpl\\login.html',
      1 => 1495279586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592027e584f208_11582227 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="win-login">
  <section class="main-info">
    <div class="login-info">
      <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close fade" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php if ($_smarty_tpl->tpl_vars['have_root']->value) {?>
        <strong>Warning!</strong>请不要轻易使用超级账户登录！
        <?php } else { ?>
        <strong>Warning!</strong>请注册一个超级用户！
        <?php }?>
      </div>
      <?php if ($_smarty_tpl->tpl_vars['have_root']->value) {?>
      <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close fade" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        如果你想成为管理员，请超级用户为你注册管理员账号！
      </div>
      <?php }?>
    </div>
  </section>
  <form class="main-login userform">
    <div class="form-box">
      <div class="form-group user-input">
        <?php if ($_smarty_tpl->tpl_vars['have_root']->value) {?>
        <label for="user-log">用户名</label>
        <input type="text" class="form-control" id="user-log" name="username" placeholder="Username">
        <?php } else { ?>
        <label for="user">用户名</label>
        <input type="text" class="form-control" id="user" name="username" placeholder="Username">
        <?php }?>
      </div>
      <div class="form-group">
        <?php if ($_smarty_tpl->tpl_vars['have_root']->value) {?>
        <label for="psw-log">密码</label>
        <input type="password" class="form-control" id="psw-log" name="password" placeholder="Password">
        <?php } else { ?>
        <label for="psw">密码</label>
        <input type="password" class="form-control" id="psw" name="password" placeholder="Password">
        <?php }?>
      </div>
      <?php if (!$_smarty_tpl->tpl_vars['have_root']->value) {?>
      <div class="form-group">
        <label for="psw_r">再一次输入密码</label>
        <input type="password" class="form-control" id="psw_r" placeholder="Password">
      </div>
      <?php }?>
      <div class="form-group captchar-input">
        <label for="captchar">请输入验证码 <a class="change-captchar" href="javascript:void(0);">换一个</a></label>
        <div class="input-group">
          <input type="text" class="form-control" id="captchar" placeholder="Captchar">
          <span class="input-group-addon captchar-box">
            <img class="captchar-img" src="/beta/server/enter/captchar.php" alt="识别码">
          </span>
        </div>
      </div>
      <?php if (!$_smarty_tpl->tpl_vars['have_root']->value) {?>
      <input type="hidden" name="power" value="root">
      <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['have_root']->value) {?>
    <button type="button" class="btn btn-primary btn-sub btn-log">登录</button>
    <?php } else { ?>
    <button type="button" class="btn btn-primary btn-sub btn-root">注册超级用户</button>
    <?php }?>
  </form>
  <div class="canvas"></div>
</div>
<?php echo '<script'; ?>
 src="server/static/js/form.js"><?php echo '</script'; ?>
>
<?php }
}

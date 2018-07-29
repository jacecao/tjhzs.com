<?php
/* Smarty version 3.1.30, created on 2017-05-24 12:02:32
  from "d:\enkjhost\tjhzs123\web\tjhzs\beta\server\smart_dir\tpl\reg_user.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592576580c2fe0_95897483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd99b8620fc01ed87b403fe953f0eb4123081e8c0' => 
    array (
      0 => 'd:\\enkjhost\\tjhzs123\\web\\tjhzs\\beta\\server\\smart_dir\\tpl\\reg_user.html',
      1 => 1495523763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592576580c2fe0_95897483 (Smarty_Internal_Template $_smarty_tpl) {
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
          <img class="captchar-img" src="enter/captchar.php" alt="识别码">
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
 src="static/js/form.js"><?php echo '</script'; ?>
>
<?php }
}

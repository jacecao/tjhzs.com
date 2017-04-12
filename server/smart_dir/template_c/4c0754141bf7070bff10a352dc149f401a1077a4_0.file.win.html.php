<?php
/* Smarty version 3.1.30, created on 2017-04-06 10:25:54
  from "F:\AjaxDemo\ajaxtest\php\tjhzs\smart_dir\tpl\win.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5fb92ab2d01_31466696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c0754141bf7070bff10a352dc149f401a1077a4' => 
    array (
      0 => 'F:\\AjaxDemo\\ajaxtest\\php\\tjhzs\\smart_dir\\tpl\\win.html',
      1 => 1491467133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e5fb92ab2d01_31466696 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="win-left">
    <!-- 左侧竖直菜单折叠 -->
    <div class="btn-group-vertical" role="group" aria-label="...">
      <!-- 头部信息编辑 -->
      <button type="button" class="left-menu btn btn-primary header-set">头部信息设置</button>
      <!-- 导航条管理 -->
      <button type="button" class="left-menu nav-set btn btn-primary">导航条设置</button>
      <!-- 管理后台人员 -->
      <?php if ($_smarty_tpl->tpl_vars['user']->value['power'] === 'root') {?>
      <button class="left-menu btn btn-primary" type="button" data-toggle="collapse" data-target="#mangers" aria-expanded="false" aria-controls="mangers">管理员控制<span class="glyphicon glyphicon-chevron-down icon-down"></span></button>
      <div class="collapse" id="mangers">
        <div class="btn-group-vertical vertical-menu" role="group" aria-label="...">
          <button type="button" class="btn btn-default admin-reg">添加管理员</button>
          <button type="button" class="btn btn-default admin-list">管理员列表</button>
        </div>
      </div>
      <?php }?>
      <!-- 新闻管理 -->
      <button class="left-menu btn btn-primary" type="button" data-toggle="collapse" data-target="#news" aria-expanded="false" aria-controls="news">新闻管理<span class="glyphicon glyphicon-chevron-down icon-down"></span></button>
      <div class="collapse" id="news">
        <div class="btn-group-vertical vertical-menu" role="group" aria-label="...">
          <a class="btn btn-default add-news" href="javascript:;">添加新闻</a>
          <a class="btn btn-default list-news" href="javascript:;">管理新闻</a>
        </div>
      </div>
      <!-- 酒店信息管理 -->
      <button class="left-menu btn btn-primary" type="button" data-toggle="collapse" data-target="#hotel" aria-expanded="false" aria-controls="hotel">酒店信息管理<span class="glyphicon glyphicon-chevron-down icon-down"></span></button>
      <div class="collapse" id="hotel">
        <div class="btn-group-vertical vertical-menu" role="group" aria-label="...">
          <a class="btn btn-default add-hotel" href="javascript:;">添加酒店信息</a>
          <a class="btn btn-default list-hotel" href="javascript:;">管理酒店信息</a>
        </div>
      </div>
      <!-- 产品信息管理 -->
      <button class="left-menu btn btn-primary" type="button" data-toggle="collapse" data-target="#products" aria-expanded="false" aria-controls="products">产品信息管理<span class="glyphicon glyphicon-chevron-down icon-down"></span></button>
      <div class="collapse" id="products">
        <div class="btn-group-vertical vertical-menu" role="group" aria-label="...">
          <a class="btn btn-default product-show" href="javascript:;">展示设计</a>
          <a class="btn btn-default product-ad" href="javascript:;">广告制作</a>
          <a class="btn btn-default product-ac" href="javascript:;">活动推广</a>
        </div>
      </div>
      <!-- 关于我们 -->
      <a href="javascript:;" class="left-menu btn btn-primary about-set">关于我们</a>
      <!-- 职位发布 -->
      <!-- 产品信息管理 -->
      <button class="left-menu btn btn-primary" type="button" data-toggle="collapse" data-target="#jobs" aria-expanded="false" aria-controls="jobs">招聘信息管理<span class="glyphicon glyphicon-chevron-down icon-down"></span></button>
      <div class="collapse" id="jobs">
        <div class="btn-group-vertical vertical-menu" role="group" aria-label="...">
          <a class="btn btn-default add-job" href="javascript:;">发布招聘</a>
          <a class="btn btn-default list-job" href="javascript:;">招聘管理</a>
        </div>
      </div>
      <!-- 底部信息 -->
      <a href="javascript:;" class="left-menu btn btn-primary bottom-set">底部信息</a>
    </div>
</div>

<div class="win-right control-win">
    <div class="result">
      网站信息：<span>0</span>
      <hr>
      当前新闻总数：<span>0</span>
      <hr>
      当前酒店信息：<span>0</span>
      <hr>
      管理人员：<span>0</span>
      <hr>
      职位发布：<span>0</span>
      <hr>
    </div>
</div>
<?php echo '<script'; ?>
 src="./static/js/base.js"><?php echo '</script'; ?>
>
<?php }
}

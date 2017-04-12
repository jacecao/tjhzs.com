<?php
  // # 后台入口文件
  header('Content-type: text/html; charset=utf-8');
  session_start();
  require_once('config.php');
  require_once($_SERVER['DOCUMENT_ROOT'].'php/tjhzs/framework/pc.php');
  PC::run($config);
?>

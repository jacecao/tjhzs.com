<?php
  // # 后台入口文件
  header('Content-type: text/html; charset=utf-8');
  ini_set('display_errors', 'On');
  // echo $_SERVER['DOCUMENT_ROOT'];
  session_start();
  // require_once($_SERVER['DOCUMENT_ROOT'].'/beta/server/enter/config.php');
  require_once('config.php');
  require_once($_SERVER['DOCUMENT_ROOT'].'/beta/server/framework/pc.php');
  // require_once('../framework/pc.php');
  PC::run($config);
?>

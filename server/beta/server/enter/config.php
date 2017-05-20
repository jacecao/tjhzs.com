<?php

  // 总配置文件
  $config = array(

    'viewConfig' => array(
      'setTemplateDir' => $_SERVER['DOCUMENT_ROOT'].'/beta/server/smart_dir/tpl',
      'setCompileDir' => $_SERVER['DOCUMENT_ROOT'].'/beta/server/smart_dir/template_c',
      'setCacheDir' => $_SERVER['DOCUMENT_ROOT'].'/beta/server/smart_dir/cache'
    ),

    'dbConfig' => array(
      'dbhost' => '127.0.0.1:3306',
      'dbuser' => 'root',
      'dbpsw' => 'seagull',
      'dbname' => 'tjhzs',
      'dbcharset' => 'utf8'
    ),

    'fileConfig' => array(
      // 网页主目录物理路径
      'path' => $_SERVER['DOCUMENT_ROOT']."/beta/",
      // 网页地址
      'url' => 'http://localhost/beta/'
    )

  );

?>

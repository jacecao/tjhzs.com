<?php

  // 总配置文件
  $config = array(

    'viewConfig' => array(
      'setTemplateDir' => $_SERVER['DOCUMENT_ROOT'].'php/tjhzs/smart_dir/tpl',
      'setCompileDir' => $_SERVER['DOCUMENT_ROOT'].'php/tjhzs/smart_dir/template_c',
      'setCacheDir' => $_SERVER['DOCUMENT_ROOT'].'php/tjhzs/smart_dir/cache'
    ),

    'dbConfig' => array(
      'dbhost' => '127.0.0.1:3306',
      'dbuser' => 'root',
      'dbpsw' => 'seagull',
      'dbname' => 'tjhzs',
      'dbcharset' => 'utf8'
    ),

    'fileConfig' => array(
      'path' => $_SERVER['DOCUMENT_ROOT'].'php/tjhzs/',
      'url' => 'http://ajaxtest.com/php/tjhzs/'
    )

  );

?>

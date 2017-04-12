<?php
  //

  if (isset($_FILES['up_file']) ) {
    $cnn = $_FILES['up_file'];
    // echo $file;
    // print_r($cnn);
    upload($cnn, $_SERVER['DOCUMENT_ROOT'].'php/tjhzs/static/images');
  } else {
    echo 'no';
  }

  function getSuffix ($filename) {
        return strtolower(pathinfo($filename, PATHINFO_EXTENSION));
      }
  function getUniqidName ($length = 10) {
      return substr(md5(uniqid(microtime(true), true)), 0, $length);
    }
  function upload ($fileinfo, $path) {
      $allowSuffix = array('gif', 'jpeg', 'jpg', 'png', 'txt', 'json');
      $maxsize = 10485760;
       if ($fileinfo['error'] === UPLOAD_ERR_OK) {
         // 文件是否是通过HTTP POST方式上传来的
         if (is_uploaded_file($fileinfo['tmp_name'])) {
           // 限制上传文件的类型
           $suffix = getSuffix($fileinfo['name']);
           $_id = getUniqidName();
           // 上传文件储存路径
           $_name = pathinfo($fileinfo['name'], PATHINFO_FILENAME);
           $newpath = $path.'/'.'tjhzs_'.$_id.$_name.'.'.$suffix;
           if (in_array($suffix, $allowSuffix)) {
             // 限制上传文件的大小
             if ($fileinfo['size'] <= $maxsize) {
               // 获取上传文件
               if (move_uploaded_file($fileinfo['tmp_name'], $newpath)) {
                 $mes = '文件上传成功';
               } else {
                 $mes = '内存文件移动失败';
               }
             } else {
               $mes = '文件过大';
             }
           } else {
             $mes = '非法文件类型';
           }
         } else {
           $mes = $fileinfo['name'].'上传途径非法';
         }
       } else {
         switch ($fileinfo['error']) {
           // 0——没有错误发生，文件上传成功。。
           case 1:
             $mes = '上传的文件超过配置';
             break;
           case 2:
             $mes = '上传文件的大小超过设置';
             break;
           case 3:
             $mes = '文件只有部分被上传';
             break;
           case 4:
             $mes = '没有文件被上传';
             break;
         }
       }
       print_r(array('mes'=>$mes,'path'=>$newpath));
     }

?>

<?php
  // 图片上传操作
  class FILE {
    public static $fileclass;

    public static function init ($name, $config) {
      self::$fileclass = F($name);
      self::$fileclass->init($config);
    }

    // 头部图片上传
    public static function headerUP ($fileinfo) {
      $res = self::$fileclass->upload ($fileinfo, 'header');
      return $res;
    }

    // 新闻图片上传
    public static function newsUP ($fileinfo) {
      $res = self::$fileclass->upload ($fileinfo, 'news');
      return $res;
    }

    // 酒店图片上传
    public static function hotelUP ($fileinfo) {
      $res = self::$fileclass->upload ($fileinfo, 'hotel');
      return $res;
    }

    // 产品图片上传
    public static function productUP ($fileinfo) {
      $res = self::$fileclass->upload ($fileinfo, 'product');
      return $res;
    }

    // logo图片上传
    public static function logoUp ($fileinfo) {
      $res = self::$fileclass->upload ($fileinfo, 'logo');
      return $res;
    }

    //删除图片
    public static function del ($filepath) {
      $res = self::$fileclass->delFile($filepath);
      return $res;
    }

    // 获取json文件信息
    public static function getJson ($filename) {
      $res = self::$fileclass->getjson($filename);
      return $res;
    }

    // 将数据写入json文件
    public static function writeJson ($filename, $arr) {
      $res = self::$fileclass->writejson($filename, $arr);
      return $res;
    }

  }
?>

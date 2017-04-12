<?php
  // mysql_class 工厂模式
  class DB {
    public static $db;

    public static function init ($dbtype, $config) {
      self::$db = DBclass($dbtype);
      self::$db->connect($config);
    }

    public static function query ($sql) {
      return self::$db->query($sql);
    }

    public static function findAll ($sql) {
      $query = self::$db->query($sql);
      return self::$db->findAll($query);
    }

    public static function findOne ($sql) {
      $query = self::$db->query($sql);
      return self::$db->findOne($query);
    }

    public static function findResult ($sql, $row = 0, $field = 0) {
      $query = self::$db->query($sql);
      return self::$db->findResult($query, $row, $field);
    }

    public static function insert ($table_name, $arr) {
      return self::$db->insert($table_name, $arr);
    }

    public static function update($table_name, $arr, $where) {
      return self::$db->update($table_name, $arr, $where);
    }

    public static function del ($table_name, $where) {
      return self::$db->del($table_name, $where);
    }

  }
?>

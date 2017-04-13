<?php
  // 所有图片存储读取处理
  class imageModel {

    private $_table = 'images'; // 定义表名

    // 添加图片数据
    public function insert_img ($upinfo) {
      // $upinfo来自filemode中定义好的$upinfo
      // 上传后的文件信息
      // $upinfo = array(
      //   'url'=> $url.$dir.'/'.$newname, // 文件引用地址需要存入数据库
      //   'path'=> $targetdir.'/'.$newname, // 文件真实地址方便后期删除
      //   'name'=> $newname, // 新的文件名
      //   'mes'=> $mes, // 返回上传结果信息
      //   'dir'=> $dir
      // );
      $arr = array(
        'name' => $upinfo['name'],
        'path' => $upinfo['path'],
        'url' => $upinfo['url'],
        'dir' => $upinfo['dir']
      );
      return DB::insert($this->_table, $arr);
    }

    // 获取指定图片
    public function find_by_dir ($dir) {
      $sql = 'SELECT * FROM '.$this->_table.' WHERE `dir`='."'$dir'".' ORDER BY `date` DESC';
      return DB::findAll($sql);
    }

    // 修改图片数据
    public function update_img ($arr) {
      $id = $arr['id'];
      $_arr = array(
        'desc' => $arr['desc'] ? $arr['desc'] : 'no message',
        'used' => 1
        );
      return DB::update($this->_table, $_arr, 'id='.$id);
    }
  }
?>

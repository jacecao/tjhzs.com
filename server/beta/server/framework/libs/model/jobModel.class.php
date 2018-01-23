<?php
  // 职位数据处理
  class jobModel {
    private $_table = 'jobs'; // 指定数据表名
    private $_splite = '#'; // 设定字符串分隔符
    private $_user = ''; // 当前登录管理员信息
    // 获取当前登录用户名
    public function __construct () {
      $user = M('user');
      $this->_user = $user->getuser();
      DB::create_table($this->_table);
    }

    // 重组存入数据
    private function reset_in_data () {
      $_str = null;
      if (is_array($_POST['job_des'])) {
        foreach ($_POST['job_des'] as $key => $value) {
          $_str .= Daddslashes($value).$this->_splite;
        }
      }
      $_data = array(
        'name' => Daddslashes($_POST['name']),
        'note' => Daddslashes($_POST['job_note']),
        'loc' => Daddslashes($_POST['job_loc']),
        'req' => Daddslashes($_POST['job_req']),
        'des' => $_str,
        'user' => $this->_user['username']
        );
      return $_data;
    }
    // 添加职位数据
    public function insert_job () {
      // 对于写入数据库的操作都要求验证是否管理员登录
      if (!empty($this->_user)) {
        $data = $this-> reset_in_data();
        return DB::insert($this->_table, $data);
      }
    }
    // 数据修改
    public function update_job () {
      if (!empty($this->_user)) {
        $data = $this-> reset_in_data();
        $id = Daddslashes($_POST['id']);
        return DB::update($this->_table, $data, '`id`='.$id);
      }
    }
    // 重组输出数据
    private function reset_out_data ($arr) {
      // 将字符串转为数组
      $_desc = explode($this->_splite, $arr['des']);
      // 截取数组(抛弃最后一个值)
      // 因为根据reset_in_data()方法会在‘des’中多加一个分隔符
      $_desc = array_slice($_desc, 0, count($_desc)-1);
      $arr['des'] = $_desc;
      return $arr;
    }

    // 获取所有职位数据
    public function find_all () {
      $sql = 'SELECT * FROM '.$this->_table.' ORDER BY `date` DESC';
      $data = DB::findAll($sql);
      // 返回数据不为空，且是一个数组
      if ($data && is_array($data)) {
        foreach ($data as $key => $value) {
          $data[$key] = $this->reset_out_data($value);
        }
        return array('jobs'=> $data);
      }
    }

    // 获取指定id职位数据
    public function find_by_id ($id) {
      $sql = 'SELECT * FROM '.$this->_table.' WHERE `id`="'.$id.'"';
      $data = DB::findOne($sql);
      // 返回数据不为空，且是一个数组
      if ($data && is_array($data)) {
        $value = reset_out_data($value);
      }
      return $data;
    }

    // 删除job
    public function del_job () {
      if (!empty($this->_user)) {
        $id = Daddslashes($_POST['id']);
        return DB::del($this->_table, '`id`='.$id);
      }
    }

    // 统计当前发布职位总数量
    public function total_jobs () {
      $sql = 'SELECT * FROM '.$this->_table;
      return DB::findResult($sql);
    }
    // public function test () {
    //   return $this->reset_in_data();
    // }

  }
?>

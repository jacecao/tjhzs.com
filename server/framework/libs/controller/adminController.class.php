<?php
  // 后台页面加载
  class adminController {
    // 保存当前登录用户名
    public $user = '';
    // 初始执行方法
    public function __construct () {
      // 判断当前是否已经登录->auth模型来处理
      // 如果没有登录就需要跳转到登录页
      $userObj = M('user');
      $this->user = $userObj->getuser();
    }
    // 注册处理
    public function register () {
      // 注册存在2种情况
      // 1.是超级用户注册,2.是超级用户注册管理员
      // 需要根据$user是否有值来判断
      // 如果超级用户注册，那注册成功后需要返回管理页面
      // 如果注册管理员，那么返回管理员列表
      $userObj = M('user');
      $res = $userObj->register();

      if (empty($this->user)) {
        // 在没有用户登录的情况下注册那么就是超级用户注册
        if ($res) {
          // 当超级用户注册成功后，直接启动登录
          $this->submit();
        } else {
          echo 0;
        }
      } else {
        // 返回所有管理员列表
        switch ($res) {
          case 0:
            echo 0;
            break;
          case 4:
            echo 4;
            break;
          default:
            echo 1;
            break;
        }
      }
    }

    // 删除管理员
    public function del_user () {
      $userObj = M('user');
      $res = $userObj->del_user();
      echo $res;
      switch ($res) {
        case 0:
          echo 0;
          break;
        case 4:
          echo 4;
          break;
        default:
          echo $res;
          break;
      }
    }

    // 显示所有管理员列表界面
    public function user_list () {
      if (!empty($this->user)) {
        $userObj = M('user');
        $users = $userObj->get_all_user();
        VIEW::assign(array('power'=>$this->user['power']));
        VIEW::assign(array('users'=>$users));
        VIEW::display('user_list.html');
      }
    }

    // 显示登录界面
    public function login () {
      // 判断是否以及登录
      if (!empty($this->user)) {
        $this->win();
      } else {
        // 检查是否有超级用户
        $userObj = M('user');
        $result = $userObj->have_root();
        VIEW::assign(array('have_root'=>$result));
        VIEW::display('login.html');
      }
    }

    // 注册管理员界面
    public function reg_user () {
      if (!empty($this->user)) {
        VIEW::assign(array('user'=>$this->user));
        VIEW::display('reg_user.html');
      } else {
        $this->login();
      }
    }

    // 检查注册用户名是否唯一
    public function checkusername () {
      $userObj = M('user');
      $res = $userObj->checkusername();
      if ($res) {
        echo 1;
      } else {
        echo 0;
      }
    }

    // 退出登录
    public function logout() {
      $authobj = M('user');
      $authobj->logout();
      echo 1;
    }

    // 提交登录信息
    public function submit () {
      $userObj = M('user');
      $result = $userObj->loginsubmit();
      $this->user = $userObj->getuser();
      if ($result) {
        echo 1;
        return true;
      } else {
        echo 0;
        return false;
      }
    }


    // 获取用户信息
    public function userinfo () {
      if (!empty($this->user)) {
        $_user = array(
          'username'=>$this->user['username'],
          'power'=>$this->user['power']
          );
        echo json_encode($_user);
      } else {
        echo '';
      }
    }

    // 获取管理界面
    public function win() {
      // 只有当用户登录时才显示主界面
      if (!empty($this->user)) {
        VIEW::assign(array('user'=>$this->user));
        VIEW::display('win.html');
      } else {
        $this->login();
      }
    }

    // 获取所有信息录入界面
    private function get_json_data ($name) {
      // 启动数据工程模型
      $data = M('product');
      $dataArr = $data->read_json($name);
      if ($dataArr) {
        VIEW::assign($dataArr);
      }
    }
    // 获取指定信息数据
    // $name json文件名
    // $id  需要查找数据的id值
    private function get_json_by_id ($name, $id) {
      if (!empty($id)) {
        // 启动数据工程模型
        $data = M('product');
        $dataArr = $data->read_json($name);
        foreach ($dataArr as $key => $values) {
          foreach ($values as $value) {
            $_data_arr[] = $value;
          }
        }
        foreach ($_data_arr as $_value) {
          if ($_value['id'] === $id) {
            VIEW::assign($_value);
          }
        }
      }
    }

    public function view () {
      if (!empty($this->user)) {
        // 获取view名称
        $viewname = $_GET['view'];
        $other = isset($_GET['other']) ? $_GET['other'] : '';
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        // 为不同的窗口获取不同的数据资源
        switch ($viewname) {
          case 'header':
            $this->get_json_data('headerinfo');
            break;
          case 'news': // 指定id-新闻修改页面
            if (!empty($id)) {
              $newsModel = M('news');
              $data = $newsModel->get_by_id($id);
              VIEW::assign($data);
            }
            break;
          case 'about':
            $this->get_json_data('about');
            break;
          case 'footer':
            $this->get_json_data('footer');
            break;
          case 'job': // 指定id-工作修改页面
            $this->get_json_by_id('jobs', $id);
            break;
        }
        if (!empty($other)) {
          switch ($other) {
            case 'show':
              $this->get_json_data('productShow');
              VIEW::assign(array('api'=>'show'));
              break;
            case 'ad':
              $this->get_json_data('productAd');
              VIEW::assign(array('api'=>'ad'));
              break;
            case 'ac':
              $this->get_json_data('productAc');
              VIEW::assign(array('api'=>'ac'));
              break;
          }
        }
        VIEW::display($viewname.'_form.html');
      } else {
        $this->login();
      }
    }

    // 获取所有数据列表界面
    public function list_win () {
      if (!empty($this->user)) {
        // 获取list名称
        $listname = $_GET['list'];
        // 为不同的窗口获取不同的数据资源
        switch ($listname) {
          case 'job':
            $this->get_json_data('jobs');
            break;
          case 'news':
            $newsModel = M('news');
            $data = $newsModel->get_all_news();
            VIEW::assign(array('news'=>$data));
            break;
          case 'footer':
            // $this->get_json_data('footer');
            break;
        }

        VIEW::display($listname.'_list.html');
      } else {
        $this->login();
      }
    }

    // 获取图片列表界面
    public function imglist () {
      if (!empty($this->user)) {
        $imgObj = M('image');
        $dir = $_GET['dir'];
        $res = $imgObj->find_by_dir($dir);
        VIEW::assign(array('images'=>$res));
        VIEW::display('img_list.html');
      } else {
        $this->login();
      }
    }

  }

?>

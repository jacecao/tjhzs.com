<?php
  // 图文相关的数据处理
class dataController {
  // 保存当前登录用户名
  public $user = '';
  // 初始执行方法
  public function __construct () {
    // 判断当前是否已经登录->auth模型来处理
    // 如果没有登录就需要跳转到登录页
    $userObj = M('user');
    $this->user = $userObj->getuser();
  }
  // 上传图片并保存到数据库
  private function up ($method) {
    $upObj = M('upload');
    $res = $upObj->up($method);
    // 除开用户接口外，其他接口都将采用状态返回机制
    if ($res['status']) {
      $imgObj = M('image');
      $id = $imgObj->insert_img($res['upinfo']);
      $res['upinfo']['id'] = $id;
    }
    echo json_encode($res);
  }

  // 头部图片上传
  public function headerup () {
    $this->up('header');
  }
  // 头部数据上传
  public function header_sub () {
    $pro = M('product');
    $res = $pro->write_header();
    if ($res) {
      echo 1;
    } else {
      echo 0;
    }
  }

  // 导航条数据上传
  public function nav_sub () {
    $pro = M('product');
    $res = $pro->write_nav();
    if ($res) {
      echo 1;
    } else {
      echo 0;
    }
  }


  // 新闻图片上传
  public function newsup () {
    $this->up('news');
  }
  // 酒店图片上传
  public function hotelup () {
    $this->up('hotel');
  }


  // 产品图片上传
  public function productup () {
    $this->up('product');
  }
  // logo图片上传
  public function logoup () {
    $this->up('logo');
  }

  // 产品数据提交
  public function product_show () {
    $pro = M('product');
    $res = $pro->write_show();
    if ($res) {
      echo 1;
    } else {
      echo 0;
    }
  }
  public function product_ad () {
    $pro = M('product');
    $res = $pro->write_ad();
    if ($res) {
      echo 1;
    } else {
      echo 0;
    }
  }
  public function product_ac () {
    $pro = M('product');
    $res = $pro->write_ac();
    if ($res) {
      echo 1;
    } else {
      echo 0;
    }
  }

  // 关于我们数据提交
  public function about_sub () {
    $pro = M('product');
    $res = $pro->write_about();
    echo $res;
    if ($res) {
      echo 1;
    } else {
      echo 0;
    }
  }

  // footer数据提交
  public function footer_sub () {
    $pro = M('product');
    $res = $pro->write_footer();
    echo $res;
    if ($res) {
      echo 1;
    } else {
      echo 0;
    }
  }

}
?>

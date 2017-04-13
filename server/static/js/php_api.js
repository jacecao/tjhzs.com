// 所有后端的接口
var PATH = 'http://ajaxtest.com/php/tjhzs';
var URL = {
  // 入口
  enter: PATH + "/server/main.php",
  // 退出接口
  exit: PATH + '/server/main.php?controller=admin&method=logout',
  // 识别码检查
  captchar: PATH + '/server/checkCaptchar.php',
  // 链接识别码
  captcharIMG: PATH + '/server/captchar.php?r=' + Math.random(),
  // 注册入口
  userREG: PATH + '/server/main.php?controller=admin&method=register',
  // 提交登录入口
  userLOG: PATH + '/server/main.php?controller=admin&method=submit',
  // 管理员注册页面
  userREGwin: PATH + '/server/main.php?controller=admin&method=reg_user',
  // 管理员列表
  userList: PATH + '/server/main.php?controller=admin&method=user_list',
  // 删除管理员
  userDel: PATH + '/server/main.php?controller=admin&method=del_user',
  // 检查用户名是否唯一
  usernameCheck: PATH + '/server/main.php?controller=admin&method=checkusername',
  // 用户信息获取
  userINFO: PATH + '/server/main.php?controller=admin&method=userinfo',
  // 管理界面首页
  win: PATH + '/server/main.php?controller=admin&method=win',

  // 导航条设置
  navSet: PATH + '/server/main.php?controller=admin&method=view&view=nav',
  // 导航条数据设置
  sub_nav: PATH + '/server/main.php?controller=data&method=nav_sub',


  // 获取新闻录制界面
  newsAdd: PATH + '/server/main.php?controller=admin&method=view&view=news',
  // 新闻列表界面
  newsList: PATH + '/server/main.php?controller=admin&method=list_win&list=news',

  // 获取酒店录制界面
  hotelAdd: PATH + '/server/main.php?controller=admin&method=view&view=hotel',
  // 酒店列表界面
  hotelList: PATH + '/server/main.php?controller=admin&method=list_win&list=hotel',

  // 设置关于我们
  aboutSet: PATH + '/server/main.php?controller=admin&method=view&view=about',
  // 关于我们数据上传
  sub_about: PATH + '/server/main.php?controller=data&method=about_sub',

  // 招聘发布
  jobAdd: PATH + '/server/main.php?controller=admin&method=view&view=job',
  // 招聘列表
  jobList: PATH + '/server/main.php?controller=admin&method=list_win&list=job',
  // 招聘数据上传
  sub_job: PATH + '/server/main.php?controller=data&method=job_sub',
  // 修改后的招聘数据上传
  sub_edit_job: PATH + '/server/main.php?controller=data&method=job_update',
  // 删除数据
  del_job: PATH + '/server/main.php?controller=data&method=job_del',
  // 招聘数据修改
  edit_job: PATH + '/server/main.php?controller=admin&method=view&view=job&id=',

  // 底部信息设置
  footerSet: PATH + '/server/main.php?controller=admin&method=view&view=footer',
  // 底部数据上传
  sub_footer: PATH + '/server/main.php?controller=data&method=footer_sub',

  // 获取头部信息设置
  headerSet: PATH + '/server/main.php?controller=admin&method=view&view=header&other=header',
  // 顶部广告图片上传
  upHeader: PATH + '/server/main.php?controller=data&method=headerup',
  // 顶部数据提交
  sub_header: PATH + '/server/main.php?controller=data&method=header_sub',

  // 新闻图片上传
  upNews: PATH + '/server/main.php?controller=data&method=newsup',
  // 酒店图片上传
  upHotel: PATH + '/server/main.php?controller=data&method=hotelup',

  // 获取产品录制界面
  productShow: PATH + '/server/main.php?controller=admin&method=view&view=product&other=show',
  productAd: PATH + '/server/main.php?controller=admin&method=view&view=product&other=ad',
  productAc: PATH + '/server/main.php?controller=admin&method=view&view=product&other=ac',

  // 产品图片上传
  upProduct: PATH + '/server/main.php?controller=data&method=productup',
  // logo图片上传
  upLogo: PATH + '/server/main.php?controller=data&method=logoup',

  // 数据提交
  // 产品数据提交
  sub_pro_show: PATH + '/server/main.php?controller=data&method=product_show',
  sub_pro_ad: PATH + '/server/main.php?controller=data&method=product_ad',
  sub_pro_ac: PATH + '/server/main.php?controller=data&method=product_ac',

  // 获取图片
  getImg: PATH + '/server/main.php?controller=admin&method=imglist',
};

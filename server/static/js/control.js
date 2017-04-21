// 控制信息
var controleINFO = {
  del_success: '删除管理员成功!',
  del_fail: '删除管理员失败!',
  del_err: '对不起你没有操作权限',
  edit_success: '数据修改成功！',
  edit_error: '数据修改失败，请重新填写'
};

/********************************
**  管理员控制界面编写         **
*********************************/
// 删除管理员
$('.del-user').on('click', function () {
  $(this).attr('disabled','disabled');
  var name = $(this).data('user');
  $.post(URL.userDel, {user_name: name}, function (res) {
    switch (parseInt(res)) {
      case 0:
        activeMessge(controleINFO.del_fail, 'remove', '#f00');
        break;
      case 4:
        activeMessge(controleINFO.del_err, 'remove', '#f00');
        break;
      default:
        activeMessge(controleINFO.del_success, 'ok', '#8bc34a');
        break;
    }
    $.get(URL.userList, function (res) {
      $('.control-win').html(res);
    });
  });
});

/********************************
**   头部信息录入编写          **
********************************/
// 初始头部封面图片模块
var imgModel_header = new Imgmodel('.up-header-post', '.choose-header-post', URL.upHeader);
imgModel_header.upimg();
imgModel_header.chooseimg();

// 提交数据
$('.sub-header').on('click', function () {
  $(this).attr('disabled', true);
  // 执行数据提交处理
  up_form_data(URL.sub_header, URL.headerSet, '.header-form');
  // $.post(URL.sub_header, $('.header-form').serialize(), function (res) {
  //   document.write(res);
  //   // console.log(res);
  // });
});

/********************************
**   导航条设置  编写          **
********************************/
// 提交数据
$('.sub-nav').on('click', function () {
  $(this).attr('disabled', true);
  // 执行数据提交处理
  up_form_data(URL.sub_nav, URL.navSet, '.nav-form');
  // $.post(URL.sub_nav, $('.nav-form').serialize(), function (res) {
  //   console.log(res);
  // });
});
/********************************
**       新闻录制编写          **
********************************/
// 初始添加图片按钮
$('.addimg-news').on('click', function() {
  new Imgwin('news', URL.upNews);
});
// 初始新闻封面上传和选择图片模块
var imgModel_news_post = new Imgmodel('.up-news-post', '.choose-news-post', URL.upNews);
imgModel_news_post.upimg();
imgModel_news_post.chooseimg();
// 初始新闻上传和选择图片模块
var imgModel_news = new Imgmodel('.up-news', '.choose-news', URL.upNews);
imgModel_news.upimg();
imgModel_news.chooseimg();
// 提交数据
$('.sub-news').on('click', function () {
  var id = $(this).data('id');
  $(this).attr('disabled', true);
  if (id) {
    // 执行修改数据处理
    up_form_data(URL.sub_edit_news, URL.jobList, '.news-form');
    // $.post(URL.sub_edit_news, $('.news-form').serialize(), function (res) {
    //   // document.write(res);
    //   console.log(res);
    // });
  } else {
    // 执行数据提交处理
    up_form_data(URL.sub_news, URL.newsList, '.news-form');
  }
});
// 编辑数据
$('.news-edit').on('click', function () {
  var _id = $(this).data('id');
  var _url = URL.edit_news + _id;
  // $.get(_url, function (res) {console.log(res);});
  // 启动重定向
  redirector(_url);
});

// 删除数据
$('.news-del').on('click', function () {
  var id = $(this).data('id');
  $(this).attr('disabled', true);
  // 执行修改数据处理
  del_data(URL.del_news, URL.newsList, id);
  // $.post(URL.del_job, {'id': id}, function (res) {
  //   // document.write(res);
  //   console.log(res);
  // });
});

/********************************
**       关于我们编写          **
********************************/
// 提交数据
$('.sub-about').on('click', function () {
  // $(this).attr('disabled', true);
  // 执行数据提交处理
  up_form_data(URL.sub_about, URL.aboutSet, '.about-form');
  // $.post(URL.sub_about, $('.about-form').serialize(), function (res) {
  //   document.write(res);
  //   console.log(res);
  // });
});

/********************************
**       footer数据编写        **
********************************/
// 启动复选框模块
var check = new Check_link();
// 复选框操作
$('.is-link').on('click', function () {
  check.run($(this));
});

// 提交数据
$('.sub-footer').on('click', function () {
  $(this).attr('disabled', true);
  // 执行数据提交处理
  up_form_data(URL.sub_footer, URL.footerSet, '.web-form');
  // $.post(URL.sub_footer, $('.web-form').serialize(), function (res) {
  //   // document.write(res);
  //   console.log(res);
  // });
});

/********************************
**   产品页面界面编写          **
********************************/
// 产品页面
// 初始添加图片按钮
// argument 文件上传接口
$('.addimg-product').on('click', function() {
  new Imgwin('product', URL.upProduct);
});

// 初始产品图片模块
var imgModel_product = new Imgmodel('.up-0', '.choose-product', URL.upProduct);
imgModel_product.upimg();
imgModel_product.chooseimg();
// 初始logo图片模块
var imgModel_logo = new Imgmodel('.up-logo', '.choose-logo', URL.upLogo);
imgModel_logo.upimg();
imgModel_logo.chooseimg();

// 图片删除
$('.del-scan').on('click', function () {
  var id = $(this).data('id');
  $('.scan-box-' + id).fadeOut().remove();

});

// 产品信息提交
// 提交数据到json文件
$('.sub-data').on('click', function () {
  $(this).attr('disabled', true);
  // 数据提交地址
  var url = '';
  // 重定向地址
  var re_url = '';
  switch ($(this).data('up')) {
    case 'show':
      url = URL.sub_pro_show;
      re_url = URL.productShow;
    break;
    case 'ad':
      url = URL.sub_pro_ad;
      re_url = URL.productAd;
    break;
    case 'ac':
      url = URL.sub_pro_ac;
      re_url = URL.productAc;
    break;
  }
  // 执行数据提交处理
  up_form_data(url, re_url, '.products-form');
});

/********************************
**   招聘页面界面编写          **
********************************/
// 提交数据
$('.sub-job').on('click', function () {
  var id = $(this).data('id');
  $(this).attr('disabled', true);
  if (id) {
    // 执行修改数据处理
    up_form_data(URL.sub_edit_job, URL.jobList, '.job-form');
    // $.post(URL.sub_edit_job, $('.job-form').serialize(), function (res) {
    //   // document.write(res);
    //   console.log(res);
    // });
  } else {
    // 执行数据提交处理
    up_form_data(URL.sub_job, URL.jobList, '.job-form');
  }
});

// 编辑数据
$('.job-edit').on('click', function () {
  var _id = $(this).data('id');
  var _url = URL.edit_job + _id;
  // $.get(_url, function (res) {console.log(res);});
  // 启动重定向
  redirector(_url);
});

// 删除数据
$('.job-del').on('click', function () {
  var id = $(this).data('id');
  $(this).attr('disabled', true);
  // 执行修改数据处理
  del_data(URL.del_job, URL.jobList, id);
  // $.post(URL.del_job, {'id': id}, function (res) {
  //   // document.write(res);
  //   console.log(res);
  // });
});

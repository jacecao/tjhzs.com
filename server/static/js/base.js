// 所有数据管理界面获取都再这里发出
var GetWin = function (ele, url) {
  this.ele = ele;
  this.url = url;
  this.res();
};
GetWin.prototype.res = function () {
  var that = this;
  $(that.ele).on('click', function () {
    $.ajax({
      url : that.url,
      type : 'GET',
      beforeSend:function(){
        $('.control-win').append(loading());
      },
      success : function(res) {
        $('.control-win').html(res);
      }
    });
  });
};
// 左侧列表操作
// 管理员控制
// 头部信息设置
new GetWin('.header-set', URL.headerSet);

// 注册管理员
new GetWin('.admin-reg', URL.userREGwin);
// 获取管理列表
new GetWin('.admin-list', URL.userList);

// 导航条设置
new GetWin('.nav-set', URL.navSet);

// 获取新闻录入
new GetWin('.add-news', URL.newsAdd);
// 获取新闻列表
new GetWin('.list-news', URL.newsList);

// 获取酒店录入
new GetWin('.add-hotel', URL.hotelAdd);

// 获取产品录入
// 展示设计
new GetWin('.product-show', URL.productShow);
// 广告制作
new GetWin('.product-ad', URL.productAd);
// 活动那个推广
new GetWin('.product-ac', URL.productAc);

// 关于我们
new GetWin('.about-set', URL.aboutSet);
// 获取职位发布
new GetWin('.add-job', URL.jobAdd);
// 底部信息设置
new GetWin('.bottom-set', URL.footerSet);


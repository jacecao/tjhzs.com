/********************************
**    表单通用功能模块         **
*********************************/
// 提示信息
var message = {
  edit_success: '数据修改成功！',
  edit_error: '数据修改失败，请重新填写'
};

// 获取上传文件名
getFilename('.fileinput');

// 初始禁用指定表单
disabled('.form-reset');
function edit (form) {
  $('.form-edit').on('click', function () {
    $(this).attr('disabled', true);
    $('.form-cancel').attr('disabled', false);
    disabled(form, false);
  });
  $('.form-cancel').on('click', function () {
    $(this).attr('disabled', true);
    $('.form-edit').attr('disabled', false);
    disabled(form, true);
  });
}
// 启动表单编辑修改控制
edit('.form-reset');


// 重定向
var redirector = function (api) {
  $.ajax({
    url : api,
    type : 'GET',
    beforeSend:function(){
      $('.control-win').append(loading());
    },
    success : function(res) {
      $('.control-win').html(res);
    }
  });
};

// 重制加载
var Addloading = function () {
  this.load = loading('数据上传中，请稍等');
};
Addloading.prototype = {
  add: function () {
    var that = this;
    $('.form-reset').css('opacity', '0.5');
    $('.control-win').append(that.load);
  },
  remove: function () {
    var that = this;
    $('.form-reset').css('opacity', '1');
    that.load.remove();
  }
};

// 表单数据提交
// url 数据提交地址 re_url 提交成功后重定向地址
// form 需要提交的表单
var up_form_data = function (url, re_url, form) {
  // 加入loading动画
  var load = new Addloading();
  load.add();
  // 提交数据
  $.post(url, $(form).serialize(), function (res) {
    load.remove();
    console.log(res);
    if (parseInt(res)) {
      activeMessge(message.edit_success, 'ok', '#8bc34a');
      // 重定向表单 移除加载动画
      redirector(re_url);
    } else {
      activeMessge(message.edit_error, 'remove', '#e91e63');
      load.remove();
    }
  });
};


// 服务端主文件
// 构建服务端应用
var express = require('express');
var fs = require('fs');
// 引入路径模块
var path = require('path');
// 引入日志记录模块
var logger = require('morgan');

// 加载mongodb数据处理模块
// 注意需要启动服务端的mongodb服务
var mongoose = require('mongoose');
// 数据库地址
var mongoURI = '127.0.0.1:27017/tjhzs';
// 连接数据库
var db = mongoose.connect('mongodb://' + mongoURI);
// 使用db.connection.on()监听连接情况
db.connection.on('error', function (error) {
  console.log('数据库连接失败：' + error)
});
db.connection.on('open', function () {
  console.log('数据库连接成功啦！')
});
var app = express();

// 指定日志存放路径
var accessLog = fs.createWriteStream(path.join(__dirname, 'log/accessLog'), {flags: 'a'});
// 将morgan日志管理模块加入app中
// 日志打印到控制台
app.use(logger('dev'));
// 将日志输入到指定位置
app.use(logger('combined', {stream: accessLog}));
// 端口设置
var port = process.env.PORT || 3000;
// 加入app中间件
// app.use( express.static( path.join(__dirname, 'public') ) );
app.use( bodyParser.urlencoded({ extended: true }) );
// 测试数据库连接
var Header = require('./models/header');
// 加入路径
require('./route/route')(app);
app.listen(port, function () {
  console.log('****服务器已经启动****')
});

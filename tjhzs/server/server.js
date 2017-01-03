// 服务端主文件
// 构建服务端应用
var express = require('express')
var fs = require('fs')
// 引入路径模块
var path = require('path')
// 引入日志记录模块
var logger = require('morgan')

// 加载mongodb数据处理模块
// 注意需要启动服务端的mongodb服务
var mongoose = require('mongoose')
// 数据库地址
var mongoURI = '127.0.0.1:27017/tjhzs'
// 连接数据库
mongoose.connect('mongodb://' + mongoURI)
var app = express()

// 指定日志存放路径
var accessLog = fs.createWriteStream(path.join(__dirname, 'log/accessLog'), {flags: 'a'})
// 将morgan日志管理模块加入app中
// 日志打印到控制台
app.use(logger('dev'))
// 将日志输入到指定位置
app.use(logger('combined', {stream: accessLog}))
// 端口设置
var port = process.env.PORT || 3000
// 测试数据库连接
var Header = require('./models/header')
// 加入路径
app.get('/', function (req, res) {
  var headerinfo = new Header({
    startime: '2017-3-20至22日',
    showtime: '2017-3-23至25日',
    addr: '成都国际会展中心熊猫娇子会议中心',
    city: '成都',
    season: '春季',
    zhuban: '中国糖业酒类集团公司',
    chengban: '中糖新世纪国际会展有限公司'
  })
  headerinfo.save(function (err, headerinfo) {
    if (err) {
      console.log(err)
    } else {
      res.send('数据录入ok')
    }

  })
})
app.listen(port, function () {
  console.log('****服务器已经启动****')
})

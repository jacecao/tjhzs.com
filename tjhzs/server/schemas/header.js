// 建立header数据模型集
var mongoose = require('mongoose')
var headerSchema = new mongoose.Schema({
  startime: String,
  showtime: String,
  addr: String,
  city: String,
  season: String,
  zhuban: String,
  chengban: String
})

module.exports = headerSchema
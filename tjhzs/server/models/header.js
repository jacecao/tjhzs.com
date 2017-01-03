var mongoose = require('mongoose')
var HeaderSchema = require('../schemas/header.js')
var Header = mongoose.model('Header', HeaderSchema)

module.exports = Header
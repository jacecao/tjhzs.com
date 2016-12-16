// 计时器
// 目前主要实现功能倒计时和显示日期
export default (str) => {
  let getTime = (str) => {
    let _time = str.split('-')
    let _day = _time[2].substring(0, 2)
    if (_time[0] && _time[1] && _day) {
      let year = parseInt(_time[0])
      let month = parseInt(_time[1])
      let day = parseInt(_day)
      return new Date(year, month - 1, day)
    } else {
      return new Date()
    }
  }
  var ms = getTime(str) - new Date()
  var day
  let isOld = false
  // 如果倒计时已经过期那么直接返回当前日期
  if (ms > 0) {
    day = Math.ceil(ms / (24 * 60 * 60 * 1000))
  } else {
    let _day = new Date()
    day = _day.getDate()
    isOld = true
  }
  // 返回day和是否过期布尔值
  return {
    day, isOld
  }
}

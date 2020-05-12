// 辅助功能程序

  // 截取服务端年份
export function getServerYear (str) {
  // 匹配字符串中的年份
  let reg = new RegExp('(\\d{4})', 'g')
  // 如果匹配成功则返回匹配成功的字符串
  if (reg.test(str)) {
    return RegExp.$1
  }
  // 如果匹配失败则返回客户端的当前年份
  return new Date().getFullYear()
}

// 储存临时数据在当前页面
export function saveSession (key, value) {
  let _data = null
  if (value instanceof Array) {
    _data = window.JSON.stringify(value)
  }
  window.sessionStorage.setItem(key, _data)
}

// 获取临时储存数据
export function getSession (key) {
  if (window.sessionStorage.getItem(key)) {
    return window.JSON.parse(window.sessionStorage.getItem(key))
  } else {
    return false
  }
}

// 替换字符串
// @value 字符串
// @regexp 正则对象
export function replaceStr (value, regexp) {
  let _str = ''
  if (value && value instanceof Array) {
    _str = value.join(' ').replace(regexp, '')
  } else if (typeof value === 'string') {
    _str = value.replace(regexp, '')
  } else {
    _str = '传入的值不正确，无法解析'
  }
  return _str
}


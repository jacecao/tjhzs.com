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


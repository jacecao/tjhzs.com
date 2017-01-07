export default function (vm, file) {
  let vm = this
  if (window.localStorage.getItem('_' + file) === null) {
    vm.$http.get('/beta/static/data/' + file).then(function (res) {
      window.localStorage.setItem('_' + file, true)
      return res.body
    }, function () {
      console.error('获取头部信息出现错误：请检查配置信息是否正确或者网络故障')
    })
  }
}

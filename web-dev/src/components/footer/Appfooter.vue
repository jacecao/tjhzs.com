<template>
  <footer class="tjhzs-footer">
    <div class="footer-box">
      <!-- 注意这里如果需要动态传入数据 需要使用v-bind来绑定props,使其认为式js运算 -->
      <block v-for="item in items" :info="item"></block>
      <web-info :webinfo='webInfo'/>
    </div>
    <p class="version">Copyright&nbsp;&copy;&nbsp;TJHZS.COM&nbsp;隶属于成都和容兴邦广告有限公司&nbsp;&nbsp;{{version}} &nbsp;&nbsp;
      <a class="beian"
        href="http://beian.miit.gov.cn/"
        target="_blank" style="text-decoration: none;"
        title="工信备案">{{show_icp}}
      </a>
      <a v-if="showPoliceID"
        class="beian"
        href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=51010602001077"
        target="_blank" style="text-decoration: none; margin-left: 6px;"
        title="公安备案"><img src="/static/img/police.png" alt="公安备案" style="width: 12px; position: relative; top: 1px;">川公网安备51010602001077号
      </a>
    </p>
  </footer>
</template>

<script>
import Block from './Block'
import WebInfo from './Address'
import Path from '@js/path.js'
import Json from '@js/json_data.js'
import {getServerYear} from '@js/tool.js'
export default {
  name: 'tjhzs-footer',
  data () {
    return {
      items: {},
      webInfo: {},
      date: new Date().getFullYear(),
      showPoliceID: true
    }
  },
  computed: {
    version () {
      return `2009-${this.date} v1.1`
    },
    // 适配多个域名的ICP
    show_icp () {
      let _icp = ''
      switch (window.location.host) {
        case 'tjhzs.com':
        case 'www.tjhzs.com':
          _icp = '蜀ICP备17004863号-1'
          break
        case 'cdhrxb.com':
        case 'www.cdhrxb.com':
          _icp = '蜀ICP备17004863号-2'
          break
        case 'cdhbhz.com':
        case 'www.cdhbhz.com':
          _icp = '蜀ICP备19018426号-1'
          break
        default:
          _icp = '蜀ICP备17004863号-1'
      }
      return _icp
    }
  },
  created () {
    // 如果域名为cdhrxb.com，则不显示公安备案
    // this.showPoliceID = !(window.location.host === 'cdhrxb.com')
    // 获取脚部数据
    let _items = []
    let vm = this
    vm.$http.get(Path.dataURL + 'footer.json').then((res) => {
      // 获取服务端年份
      // +---------------------------------------
      // | 浏览器兼容问题
      // | 获取到的头部信息的属性有些是大写有些是小写
      // | 这里对此作一个兼容
      // +---------------------------------------
      let dateInfo = res.headers.map.date ? res.headers.map.date[0] : res.headers.map.Date[0]
      // 截取日期信息字符串中的年份
      vm.date = getServerYear(dateInfo)
      // tjhzs服务端需要JSON.parse()使用此步骤
      let data = Json(res.body)
      // 获取数据成功后
      for (let item of data.blockinfo) {
        if (item.link) {
          _items.push({
            title: item.title,
            smalltitle: item.smalltitle,
            // 该模组已经默认链接为首页
            url: item.url,
            // 是否为可点击链接
            pointer: item.link
          })
        } else {
          _items.push({
            title: item.title,
            smalltitle: item.smalltitle,
            pointer: item.link
          })
        }
      }
      // console.log(_items)
      vm.items = _items
      vm.webInfo = data.webinfo
      // vm.version = data.webinfo.version
    }, () => {
      console.error('获取底部数据出现错误：请检查配置信息是否正确或者网络故障')
    })
  },
  components: {Block, WebInfo}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/footer.scss';
  .tjhzs-footer{
    position: relative;
    @extend %width;
    height: $footerheight;
    background-color: #fff;
    border-top: 1px solid #e2e2e2;
  }
  .beian{
    color: #333;
  }
</style>

<template>
  <footer class="tjhzs-footer">
    <div class="footer-box">
      <!-- 注意这里如果需要动态传入数据 需要使用v-bind来绑定props,使其认为式js运算 -->
      <block v-for="item in items" :info="item"></block>
      <web-info :webinfo='webInfo'/>
    </div>
    <p class="version">Copyright&nbsp;&copy;&nbsp;TJHZS.COM&nbsp;隶属于成都和容兴邦广告有限公司&nbsp;&nbsp;{{version}} <a href="http://www.beian.miit.gov.cn/state/outPortal/loginPortal.action" title="备案查询">蜀ICP备17004863号</a></p>
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
      date: new Date().getFullYear()
    }
  },
  computed: {
    version () {
      return `2009-${this.date} v1.0`
    }
  },
  created () {
    let _items = []
    let vm = this
    vm.$http.get(Path.dataURL + 'footer.json').then((res) => {
      // 获取服务端年份
      let dateInfo = res.headers.map.date[0]
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

</style>

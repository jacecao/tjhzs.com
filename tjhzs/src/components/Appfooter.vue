<template>
  <footer class="footer">
    <div class="footer-box">
      <!-- 注意这里如果需要动态传入数据 需要使用v-bind来绑定props,使其认为式js运算 -->
      <block v-for="item in items" :info="item"></block>
      <web-info :webinfo='webInfo'/>
    </div>
    <p class="version">&copy;和邦会展&nbsp;&nbsp;{{version}}</p>
  </footer>
</template>

<script>
import Block from './footer/Block'
import WebInfo from './footer/Address'
import Path from '../js/path.js'
// 加载预设数据，当后台数据获取成功后再更新
import ResetData from '../data/footer.js'
import Json from '../js/json_data.js'
export default {
  name: 'footer',
  data () {
    return {
      items: ResetData.blockinfo,
      webInfo: ResetData.webinfo,
      version: ResetData.blockinfo.version
    }
  },
  mounted: function () {
    this.getinfo()
  },
  methods: {
    // 重新构造获取的数据
    getinfo () {
      let _items = []
      let vm = this
      vm.$http.get(Path.dataURL + 'footer.json').then(function (res) {
        // console.log('ok')
        // tjhzs服务端需要JSON.parse()使用此步骤
        let data = Json(res.body)
        // console.log('footer' + '\n' + data)
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
        vm.version = data.webinfo.version
      }, function () {
        console.error('获取底部数据出现错误：请检查配置信息是否正确或者网络故障')
      })
    }
  },
  components: {Block, WebInfo}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../sass/footer.scss';
  .footer{
    position: relative;
    @extend %width;
    height: $footerheight;
    background-color: #fff;
    border-top: 1px solid #e2e2e2;
  }

</style>

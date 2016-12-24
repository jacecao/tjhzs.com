<template>
  <footer class="footer">
    <div class="footer-box">
      <!-- 注意这里如果需要动态传入数据 需要使用v-bind来绑定props,使其认为式js运算 -->
      <block v-for="item in blocks" :info="item"></block>
      <info :webinfo='webInfo'/>
    </div>
  </footer>
</template>

<script>
import Block from './footer/Block'
import Info from './footer/Address'
// 载入网页底部栏数据
import tjhzsInfo from '../data/about.js'
export default {
  name: 'footer',
  data () {
    return {
      items: tjhzsInfo.blockinfo,
      webInfo: tjhzsInfo.webinfo
    }
  },
  computed: {
    // 重新构造获取的数据
    blocks: function () {
      let _items = []
      for (let item of this.items) {
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
      return _items
    }
  },
  components: {Block, Info}
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
  }

</style>

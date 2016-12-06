<template>
  <div class="footer">
    <div class="footer-box">
      <!-- 注意这里如果需要动态传入数据 需要使用v-bind来绑定props,使其认为式js运算 -->
      <block v-for="item in items" :info="item"></block>
      <info></info>
    </div>
  </div>
</template>

<script>
import Block from './footer/Block'
import Info from './footer/Address'
export default {
  name: 'footer',
  data () {
    return {
      items: [
        {
          title: '加入我们',
          samlltitle: '期待对销售感兴趣的您',
          pointer: true
        },
        {
          title: '客服电话',
          samlltitle: '13882228925',
          pointer: false
        }
      ]
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
    margin-top: 40px;
    @extend %width;
    height: $footerheight;
    background-color: #d4d4d4;
  }

</style>

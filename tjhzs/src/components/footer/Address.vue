<template>
  <div class="footer-address">
    <p>{{name}}</p>
    <p>地址：{{address}}</p>
    <p>备案号：{{webinfo}}</p>
  </div>
</template>

<script>
export default {
  name: 'address',
  data () {
    return {
      name: '成都和邦会议展览服务有限公司',
      address: '成都市下南大街2号宏达国际广场8楼6-12号(总部)',
      webinfo: '京ICP备10037209'
    }
  },
  components: {}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/footer.scss';
  .footer-address{
    // position: absolute;
  }
</style>

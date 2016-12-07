<template>
  <div class="header-bar">
    <ul class="clearfix">
      <li class="time">
        <span class="small-time">{{day}}</span>
      </li>
      <li class="weixin"></li>
      <li class="header-info">
        <p>布展时间：<span>{{startime}}</span></p>
        <p>开展时间：<span>{{endtime}}</span></p>
        <p>展会地址：<span>{{addr}}</span></p>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'header-title',
  data () {
    return {
      startime: '2017-3-20至22日',
      endtime: '2017-3-23至25日',
      addr: '成都国际会展中心熊猫饺子',
      day: 12
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/header.scss';
.header-bar{
  position: absolute;
  // width: 420px;
  bottom: 6px;
  left: 200px;
}
</style>

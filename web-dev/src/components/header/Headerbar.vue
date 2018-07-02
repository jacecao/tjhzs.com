<template>
  <div class="header-bar">
    <div class="header-info-box">
      <ul>
        <li class="time"
          v-on:mouseover="hover"
          v-on:mouseout='out'
        >
          <span class="small-time">{{time.day}}</span>
        </li>
        <li class="weixin"></li>
        <li class="header-info">
          <p>布展时间：<span>{{headertime.readytime}}</span></p>
          <p>开展时间：<span>{{headertime.starttime}}</span></p>
          <p>展会地址：<span>{{headertime.addr}}</span></p>
        </li>
      </ul>
      <timer :time="time" :isActive="isActive"/>
    </div>
  </div>
</template>

<script>
import Timer from './Timer.vue'
import Funtimer from '../../js/timer.js'
export default {
  name: 'header-title',
  props: {
    headertime: Object
  },
  data () {
    return {
      isActive: false
    }
  },
  computed: {
    // 计算倒计时或日期
    time: function () {
      let time = this.headertime.starttime
      return Funtimer(time)
    }
  },
  methods: {
    hover: function () {
      this.isActive = true
    },
    out: function () {
      this.isActive = false
    }
  },
  components: {Timer}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/header.scss';
.header-bar{
  position: relative;
  // width: 420px;
  top: 20px;
  left: 0;
  .header-info-box{
    position: relative;
  }
}
</style>

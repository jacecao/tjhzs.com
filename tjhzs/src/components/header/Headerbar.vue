<template>
  <div class="header-bar">
    <div class="header-info-box">
      <ul class="clearfix">
        <li class="time" 
          v-on:mouseover="hover"
          v-on:mouseout='out'
        >
          <span class="small-time">{{time.day}}</span>
        </li>
        <li class="weixin"></li>
        <li class="header-info">
          <p>布展时间：<span>{{startime}}</span></p>
          <p>开展时间：<span>{{showtime}}</span></p>
          <p>展会地址：<span>{{addr}}</span></p>
        </li>
      </ul>
      <timer :time="time" :isActive="isActive"/>
    </div>
  </div>
</template>

<script>
import Timer from './Timer.vue'
import info from '../../data/index-header-message.js'
export default {
  name: 'header-title',
  props: {
    time: Object
  },
  data () {
    return {
      startime: info.startime,
      showtime: info.showtime,
      addr: info.addr,
      isActive: false
    }
  },
  computed: {
    newday: function () {
      // 计算的属性会直接改变原来的属性
      // 如这里的day就已经改变了
      // 但需要注意的是不运行这个程序就不会有变化
      // return this.day * 2
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

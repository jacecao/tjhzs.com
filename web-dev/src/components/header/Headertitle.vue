<template>
  <div class="header-title">
    <h1>{{headerinfo.city}} - {{headerinfo.season}}<span>{{headerinfo.city}} - {{headerinfo.season}}</span></h1>
    <timer v-if="time" :time="time" :isActive="isActive"/>
  </div>
</template>

<script>
import Timer from './Timer'
import funtimer from '@js/timer.js'
export default {
  name: 'header-title',
  props: {
    headerinfo: Object
  },
  data () {
    return {
      isActive: true
    }
  },
  computed: {
    // 计算倒计时或日期
    time: function () {
      let _time = this.headerinfo.starttime
      if (_time) {
        return funtimer(_time)
      } else {
        return false
      }
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
  components: {
    Timer
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
@import '../../sass/_base.scss';
$height: 300px;
  .header-title
  {
    //position: absolute;
    //width: 100%;
    //height: $height;
    //top: 100px;
    left: 0;
    color: $header-title-color;
    z-index: 2;
    $color: #00ab88;

    h1{
      position: relative;
      margin-top: 20px;
      @extend %h1;
      text-align: center;
      letter-spacing: 0.15 * $font;
      color: $color;
      /* 实现艺术字体 */
      background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: bold;
      font-size: 4 * $font;

      span{
        position: absolute;
        width: 100%;
        text-align: center;
        left: 0;
        color: transparent;
        text-shadow: 0 0 10px #000;
        z-index: -1;
      }
    }
  }
</style>

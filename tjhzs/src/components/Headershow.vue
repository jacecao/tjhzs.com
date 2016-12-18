<template>
  <div v-bind:style="bgimg" class="header-show">
    <div v-on:mousemove='hoverMover' class="mask"></div>
    <!-- 绑定data数据到组件的props -->
    <headertitle :time='timerobj' />
  </div>
</template>

<script>
import Headertitle from './header/Headertitle'
import info from '../data/index-header-message.js'
import timer from '../js/timer.js'

export default {
  name: 'header-show',
  data () {
    return {
      bgimg: info.backgroundImage,
      timerobj: timer(info.startime)
    }
  },
  methods: {
    hoverMover () {

    }
  },
  components: {
    Headertitle
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../sass/_base.scss';
.header-show{
  position: relative;
  @extend %width;
  height: $headerheight;
  background-color: #32b16c;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: 0 0;
  border-bottom: 2px solid #b8b8b8;
  box-shadow: 0 2px 4px #b8b8b8;
  &:hover{
    .mask{
      opacity: 0.4;
    }
  }
}
.mask{
  // content: '';
  // display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: $headerheight;
  background: rgba(20,20,20,0.5);
  background: -webkit-linear-gradient(top, rgba(20,20,20,0.5) 100%,rgba(20,20,20,0.5) 100%);
  transition: all 500ms;
  opacity: 1;
  // cursor: pointer;
}
</style>

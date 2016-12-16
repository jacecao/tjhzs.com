<template>
  <div id="header_timer" 
       v-bind:class='{header_timer: isActive}'
  >
    <div v-if="!time.isOld">
      <h3>距离本届糖酒会开幕</h3>
      <p><span>还有</span>{{time.day}}<span>天</span></p>
    </div>
    <div v-else="!time.isOld">
      <h3>新一轮的招商已启动</h3>
      <p><span>今天已经</span>{{time.day}}<span>号啦</span></p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'header_timer',
  props: {
    time: Object,
    isActive: Boolean
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/header.scss';
#header_timer{
  position: absolute;
  width: 450px;
  top: -250px;
  right: -520px;
  opacity: 0;
  background: rgba(0,0,0,0.5);
  transition: all 500ms;
  &.header_timer{
    top: -100px;
    opacity: 1;
    box-shadow: 0 0 10px #eee;
  }
}
</style>

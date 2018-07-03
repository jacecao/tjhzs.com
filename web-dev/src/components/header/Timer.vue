<template>
  <div id="header_timer"
       v-bind:class='{header_timer: isActive}'
  >
    <div v-if="!time.isOld">
      <h3>距离本届糖酒会开幕</h3>
      <p>还有<span>{{time.day}}</span>天</p>
    </div>
    <div v-else>
      <h3>新一轮的招商已启动</h3>
      <p>今天已经<span>{{time.day}}</span>号啦</p>
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
  width: 450px;
  margin: 0 auto;
  background: rgba(0,0,0,0.5);
  opacity: 0;
  transition: all 500ms;
  &.header_timer{
    opacity: 1;
    box-shadow: 0 0 10px #eee;
  }
}
</style>

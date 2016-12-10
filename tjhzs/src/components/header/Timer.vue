<template>
  <div id="header_timer">
    <h3>{{title}}</h3>
    <p><span>还有</span>{{newday}}<span>天</span></p>
  </div>
</template>

<script>
export default {
  name: 'header_timer',
  props: {
    time: Number
  },
  data () {
    return {
      title: '距离本届糖酒会开幕'
    }
  },
  computed: {
    newday () {
      console.log(this.time)
      // 不建议直接改变props传来的值
      let day = this.time + 1
      return day
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/header.scss';
#header_timer{
  position: absolute;
  top: 120px;
  left: 800px;
}
</style>

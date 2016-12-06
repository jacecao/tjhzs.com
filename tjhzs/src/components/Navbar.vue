<template>
  <div :style="background" class="nav-bar">
    <div class="logo">
      <a href="/"><img v-bind:src="logo" alt="HBHZ"></a>
      <span>{{title}}</span>
    </div>
    <ul v-on:click='test'>
      <li><a :class='{active: isActive}' href="/">首页</a></li>
      <li><a href="">展台制作展示</a></li>
      <li><a href="">关于我们</a></li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'nav-bar',
  data () {
    return {
      // 这里得数据需要从服务器获取
      title: '和谐 / 包容 / 发展 / 共赢',
      logo: '../../static/images/header_logo.png',
      // background: {background: '#fff'},
      isActive: true
    }
  },
  methods: {
    test () {
      this.isActive = !this.isActive
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../sass/_base.scss';
$navbg: #000;
a{
  transition: color 700ms;
  @include a_css($navcolor);
}
a:hover, .active{
  color: $hovercolor;
}

.nav-bar{
  position: relative;
  top: 0;
  background: $navbg; 
  height: $navheight;
  @extend %width;
}
.logo{
  position: absolute;
  top: 0;
  left: 72px;
  span {
    display: inline-block;
    color: $navcolor;
    height: 50px;
    line-height: 50px;
  }
  img {
    float: left;
    margin-right: 16px; 
    height: 50px;
    width: 50px;
  }
}

ul{
  position: relative;
  width: 300px;
  left: 850px;
  top: 0;
  margin: 0;
  li{
    display: inline-block;
    margin-right: 46px;
    a{
      display: block;
      height: 50px;
      line-height: 50px;
      font-size: $font;
    }
  }
  li:last-child{
    margin-right: 0; 
  }
}
</style>

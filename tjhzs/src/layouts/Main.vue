<template>
  <div id="tjhzs_container">
    <nav-bar/>
    <!-- 注意这里有一个问题加入过渡后轮播动画有问题 -->
    <!-- 解决这个问题需要加入过渡模式 -->
    <transition name="slide-fade" mode="out-in">
      <router-view></router-view>
    </transition>
    <app-footer/>
  </div>
</template>

<script>
  import NavBar from '../components/Navbar.vue'
  import AppFooter from '../components/Appfooter.vue'
  import HeaderShow from '../components/Headershow.vue'
  export default {
    components: {
      NavBar, HeaderShow, AppFooter
    }
  }
</script>

<style lang="scss">
@import '../sass/_base.scss';
@font-face {
  font-family: 'icomoon';
  src:  url('../../static/fonts/icomoon.eot?9hfdda');
  src:  url('../../static/fonts/icomoon.eot?9hfdda#iefix') format('embedded-opentype'),
    url('../../static/fonts/icomoon.ttf?9hfdda') format('truetype'),
    url('../../static/fonts/icomoon.woff?9hfdda') format('woff'),
    url('../../static/fonts/icomoon.svg?9hfdda#icomoon') format('svg');
  font-weight: normal;
  font-style: normal;
}
body{
  @extend %width;
}
[class^="icon-"], [class*=" icon-"] {
  font-family: 'icomoon' !important;
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
}
#tjhzs_container {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background-color: #f7f8f8;
  // flex布局
  // display: flex;
  // flex-flow: row wrap;
  // .tjhzs-main-content
  // {
  //   min-height: 100%;
  //   flex-grow: 1;
  // }
}
// 路由过渡动画
.slide-fade-enter-active {
  transition: all .4s ease;
}
.slide-fade-leave-active {
  transition: all .3s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-leave-active {
  transform: translateX(10px);
  opacity: 0;
}
.slide-fade-enter {
  transform: translateX(-10px);
  opacity: 0;
}
// 加载过度
.main-fade-enter-active {
  transition: all 0.5s ease;
}
.main-fade-leave-active {
  transition: all 0.5s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.main-fade-leave-active {
  opacity: 0;
}
.main-fade-enter {
  opacity: 0;
}
</style>

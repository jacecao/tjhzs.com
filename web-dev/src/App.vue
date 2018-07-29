<template>
  <div id="tjhzs_container">
    <nav-bar @position="getPosition"/>
    <!-- 注意这里有一个问题加入过渡后轮播动画有问题 -->
    <!-- 解决这个问题需要加入过渡模式 -->
    <transition name="slide-fade" mode="out-in">
      <router-view :navPosition="navPosition"></router-view>
    </transition>
    <app-footer/>
  </div>
</template>

<script>
  import NavBar from 'components/navbar/Navbar.vue'
  import AppFooter from 'components/footer/Appfooter.vue'
  import HeaderShow from 'components/header/Headershow.vue'
  export default {
    data () {
      return {
        navPosition: 'fixed'
      }
    },
    methods: {
      getPosition (position) {
        this.$nextTick(() => {
          this.navPosition = position
        })
      }
    },
    components: {
      NavBar, HeaderShow, AppFooter
    }
  }
</script>

<style lang="scss">
@import url(./css/reset.css);
@import './sass/_base.scss';
@font-face {
  font-family: 'icomoon';
  src:  url('../static/fonts/icomoon.eot?9hfdda');
  src:  url('../static/fonts/icomoon.eot?9hfdda#iefix') format('embedded-opentype'),
    url('../static/fonts/icomoon.ttf?9hfdda') format('truetype'),
    url('../static/fonts/icomoon.woff?9hfdda') format('woff'),
    url('../static/fonts/icomoon.svg?9hfdda#icomoon') format('svg');
  font-weight: normal;
  font-style: normal;
}
body{
  @extend %width;
  font-size: 16px;
}
p,h1,h2,h3 { cursor: default;}
a>p, a>h1, a>h2, a>h3 { cursor: inherit;}
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
  background-color: #fefefe;
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
  transition: all 0.4s ease;
}
.main-fade-leave-active {
  transition: all 0.4s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.main-fade-leave-active {
  opacity: 0;
}
.main-fade-enter {
  opacity: 0;
}
</style>

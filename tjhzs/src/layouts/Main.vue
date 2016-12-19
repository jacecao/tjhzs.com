<template>
  <div id="tjhzs_container">
    <nav-bar/>
    <header-show/>
    <router-view></router-view>
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
  background-color: #f7f8f8;
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
}
</style>
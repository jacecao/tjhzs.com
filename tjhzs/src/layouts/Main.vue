<template>
  <div id="tjhzs_container" style="{background-color: color}">
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
    props: ['color'],
    components: {
      NavBar, HeaderShow, AppFooter
    }
  }
</script>

<style lang="scss">
@import '../sass/_base.scss';
body{
  background-color: #f7f8f8;
  @extend %width;
}
#tjhzs_container {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
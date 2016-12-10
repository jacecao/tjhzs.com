<template>
  <div class="tjhzs_container" style="{background-color: color}">
    <nav-bar/>
    <slot></slot>
    <app-footer/>
  </div>
</template>

<script>
  import NavBar from '../components/Navbar.vue'
  import AppFooter from '../components/Appfooter.vue'
  export default {
    props: ['color'],
    components: {
      NavBar, AppFooter
    }
  }
</script>

<style lang="scss">
@import '../sass/_base.scss';
body{
  background-color: #f7f8f8;
  @extend %width;
}
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
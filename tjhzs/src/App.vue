<template>
  <div id="app">
    <navbar></navbar>
    <headershow></headershow>
    <maincontent></maincontent>
    <appfooter></appfooter>
  </div>
</template>

<script>
import Navbar from './components/Navbar'
import Headershow from './components/Headershow'
import Maincontent from './components/Maincontent'
import Appfooter from './components/Appfooter'

export default {
  name: 'app',
  components: {
    Navbar, Headershow, Maincontent, Appfooter
  }
}
</script>

<style lang="scss">
@import './sass/_base.scss';
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

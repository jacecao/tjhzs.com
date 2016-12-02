<template>
  <div id="app">
    <navbar></navbar>
    <headershow></headershow>
  </div>
</template>

<script>
import Navbar from './components/Navbar'
import Headershow from './components/Headershow'

export default {
  name: 'app',
  components: {
    Navbar, Headershow
  }
}
</script>

<style lang="scss">
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>

<template>
  <div id="app">
    <navbar></navbar>
    <headershow></headershow>
    <maincontent></maincontent>
  </div>
</template>

<script>
import Navbar from './components/Navbar'
import Headershow from './components/Headershow'
import Maincontent from './components/Maincontent'

export default {
  name: 'app',
  components: {
    Navbar, Headershow, Maincontent
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

<template>
  <div class="header">
  </div>
</template>

<script>
export default {
  name: 'header-show',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
$height: 450px;
.header{
  width: 100%;
  height: $height;
  background-color: #32b16c;
}
</style>

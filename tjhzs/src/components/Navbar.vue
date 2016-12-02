<template>
  <div class="nav-bar">
    <div>
      <a href=""><img src="" alt=""></a>
      <ul>
        <li><a href="">首页</a></li>
        <li><a href="">展台制作展示</a></li>
        <li><a href="">关于我们</a></li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: 'nav-bar',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.nav-bar{
  height: 50px;
  width: 100%;
  background-color: #000;
}  
</style>

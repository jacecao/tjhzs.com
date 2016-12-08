<template>
  <div class="display-img">
    <ul id="show_img">
      <li >
        <a href="">
          <img src="../../../static/images/content/test.jpg" alt="...">
          <span>这里有一段你的说明文件来介绍这个东东</span>
        </a>
      </li>
    </ul>
    <span class="control" id="control_left">&lt;</span>
    <span class="control" id="control_right">&gt;</span>  
  </div>
</template>

<script>
// import cont from '../../js/header/header.js'
export default {
  name: 'main-content',
  data () {
    return {}
  },
  methods: {
    greet: function () {
      window.alert('hello')
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/content.scss';
  .display-img{
    position: relative;
    float: left;
    // background-color: #32b16c;
  }
</style>

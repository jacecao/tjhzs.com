<template>
  <div class="display-img">
    <span class="control" id="control_left">&lt;</span>
    <span class="control" id="control_right">&gt;</span>
    <ul id="show_img">
      <li>
        <a href="">
          <img src="../../../static/images/content/test.jpg" alt="...">
          <span>这里有一段你的说明文件来介绍这个东东</span>
        </a>
      </li>
    </ul>    
  </div>
</template>

<script>
export default {
  name: 'main-content',
  data () {
    return {}
  },
  components: {}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/_base.scss';
@import '../../sass/content.scss';
  .display-img{
    position: relative;
    float: left;
    height: $height;
    width: 740px;
    // background-color: #32b16c;
  }
</style>

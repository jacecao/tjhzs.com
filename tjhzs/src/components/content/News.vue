<template>
  <div class="news">
    <h3>我们最新动态</h3>
    <ul>
      <li v-for="item in newsdata">
        <router-link v-bind:to="path+item.id" v-bind:title="item.title">
          <h4>{{item.title}}</h4><span>{{item.time}}</span>
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
import Path from '../../js/path.js'
export default {
  name: 'news',
  props: {
    newsdata: {
      type: Array
    }
  },
  data () {
    return {
      path: Path.newsPAGE
    }
  },
  components: {}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/content.scss';
$height: 300px;
$width: 400px;
  .news{
    float: right;
    height: $height;
    width: $width;
    background-color: #fff;
    overflow: hidden;
  }
</style>

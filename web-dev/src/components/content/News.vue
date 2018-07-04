<template>
  <div class="news">
    <h3>我们最新动态</h3>
    <ul class="news-list">
      <li v-for="item in newsdata">
        <router-link v-bind:to="path+item.id" v-bind:title="item.title">
          <h4>{{item.title}}</h4><span>{{dateFilter(item.date)}}</span>
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
  methods: {
    dateFilter (date) {
      return date.split(' ')[0]
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
    box-shadow: 0 0 3px 3px rgba(50, 177, 108, 0.12941176470588237);
    h3 {
      box-shadow:0 0 1px 1px  rgba(0,0,0,0.2);
      border-radius: 5px;
    }
  }
</style>

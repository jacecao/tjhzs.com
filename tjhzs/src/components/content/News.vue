<template>
  <div class="news">
    <h3>我们最新动态</h3>
    <ul>
      <li v-for="item in news">
        <router-link v-bind:to="'/news/'+item.id" v-bind:title="item.title">
          <h4>{{item.title}}</h4><span>{{item.time}}</span>
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
// 加载新闻数据
import NewsData from '../../data/newsData.js'
export default {
  name: 'news',
  data () {
    return {
      items: NewsData
    }
  },
  computed: {
    news: function () {
      // 这里只获取最新的6条新闻数据
      return this.items.slice(0, 6)
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

<template>
  <div class="news">
    <h3>我们最新动态
      <span class="get-more"><router-link v-if="isShowMore" to="/news_list">>更多</router-link></span>
    </h3>
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
import Path from '@js/path.js'
export default {
  name: 'news',
  props: {
    newsdata: {
      type: Array
    }
  },
  data () {
    return {
      path: Path.newsPAGE,
      isShowMore: false // 当前新闻总数
    }
  },
  created () {
    // get news data info
    const _newsInfo = `${Path.webControl}getNewsTotal`
    const vm = this
    vm.$http.get(_newsInfo).then((res) => {
      if (parseInt(res.body) > 6) {
        this.isShowMore = true
      }
    }, () => {
      console.error('获取新闻数据出现错误')
    })
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
$width: 420px;
  .news{
    float: left;
    height: $height;
    width: $width;
    margin-left: 16px;
    background-color: #fff;
    overflow: hidden;
    box-shadow: 0 0 3px 3px rgba(50, 177, 108, 0.12941176470588237);
    h3 {
      box-shadow:0 0 1px 1px  rgba(0,0,0,0.2);
      border-radius: 5px;
      .get-more {
        position: absolute;
        font-size: 12px;
        margin-left: 20px;
      }
      a {color: #e8e8e8; text-decoration: none;}
      a:hover {color: $hovercolor;}
    }
  }
</style>

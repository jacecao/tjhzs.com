<template>
	<div class="tjhzs-new tjhzs-main-content">
		<header>
			<h3>{{news.title}}</h3>
			<span>{{news.time}}</span>
		</header>
		<section class="img-group">
			<display-img :isLink="false" :images='news.images'/>
		</section>
		<section class="new-content">
			<p>{{news.content}}</p>
		</section>
	</div>
</template>

<script>
import DisplayImg from '../components/content/Displayimg'
// 获取新闻数据
import NewsData from '../data/newsData.js'
export default {
  name: 'news_page',
  data () {
    return {}
  },
  computed: {
    news: function () {
      for (let news of NewsData) {
        // this.$route.params这里获取我们路由中规定的匹配值
        if (news.id === this.$route.params.id) {
          return news
        }
      }
    }
  },
  components: { DisplayImg }
}
</script>

<style scoped lang="scss">
@import '../sass/news.scss';
.tjhzs-new{
	@extend %middlewidth;
	margin: 50px auto;
  padding-top: 30px;
}
</style>
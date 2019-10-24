<template>
	<div class="tjhzs-new tjhzs-main-content">
    <router-link class="return_list" to="/news_list">返回新闻列表</router-link>
		<header>
			<h3>{{news.title}}</h3>
			<span class="news_time">编写时间：{{news.date}}</span>
		</header>
		<section class="img-group">
			<display-img v-if="images.length > 0" :isLink="false" :images='images' :size='size'/>
		</section>
		<section class="new-content">
			<p>{{news.content}}</p>
		</section>
	</div>
</template>

<script>
import DisplayImg from 'components/content/Displayimg'
import Path from '@js/path.js'
import Json from '@js/json_data.js'
export default {
  name: 'news_page',
  data () {
    return {
      news: {},
      size: {
        height: '460px',
        width: '760px'
      },
      images: []
    }
  },
  created () {
    let vm = this
    const _newsLink = `${Path.webControl}getOneNews&id=${this.$route.params.id}`
    // 请求单挑数据
    vm.$http.get(_newsLink).then((res) => {
      // tjhzs服务端需要JSON.parse()使用此步骤
      let resultData = Json(res.body)
      let _images = []
      vm.news = resultData.data
      if (vm.news.images instanceof Array) {
        vm.news.images.forEach(function (image) {
          _images.push({
            imgurl: image.url,
            desc: image.desc
          })
        })
      }
      vm.images = _images
    }, () => {
      console.error('获取单挑新闻数据失败')
    })
  },
  mounted () {
    window.scrollTo(0, 0)
  },
  components: { DisplayImg }
}
</script>

<style scoped lang="scss">
@import '../../sass/news.scss';
.tjhzs-new{
	@extend %mainwidth;
	margin: 50px auto;
}
.return_list {
  color: #868686;
  text-decoration: none;
  margin-left: 120px;
  border-bottom: 1px solid #fe005b;
}
</style>

<template>
	<div class="tjhzs-new tjhzs-main-content">
		<header>
			<h3>{{news.title}}</h3>
			<span class="news_time">编写时间：{{news.date}}</span>
		</header>
		<section class="img-group">
			<display-img :isLink="false" :images='images' :size='size'/>
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

    vm.$http.get(Path.dataURL + 'news.json').then((res) => {
      // tjhzs服务端需要JSON.parse()使用此步骤
      let data = Json(res.body)
      let _images = []
      for (let news of data) {
        // this.$route.params这里获取我们路由中规定的匹配值
        if (news.id === this.$route.params.id) {
          vm.news = news
          vm.news.images.forEach(function (image) {
            // console.log(image.url)
            _images.push({
              imgurl: image.url,
              desc: image.desc
            })
          })
        }
      }
      vm.images = _images
    }, () => {
      console.error('获取头部信息出现错误：请检查配置信息是否正确或者网络故障')
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
</style>

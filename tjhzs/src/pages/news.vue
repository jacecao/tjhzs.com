<template>
	<div class="tjhzs-new tjhzs-main-content">
		<header>
			<h3>{{news.title}}</h3>
			<span class="news_time">编写时间：{{news.time}}</span>
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
import Path from '../js/path.js'
export default {
  name: 'news_page',
  data () {
    return {
      news: {}
    }
  },
  methods: {
    getdata () {
      let vm = this
      vm.$http.get(Path.dataURL + 'news.json').then(function (res) {
        // tjhzs服务端需要JSON.parse()使用此步骤
        // let data = window.JSON.parse(res.body)
        let data = res.body
        let _arr = data.slice(0, 6)
        for (let news of _arr) {
          // this.$route.params这里获取我们路由中规定的匹配值
          if (news.id === this.$route.params.id) {
            vm.news = news
            vm.news.images.forEach(function (image) {
              let _url = Path.newsimgURL + image.imgurl
              image.imgurl = _url
            })
          }
        }
      }, function () {
        console.error('获取头部信息出现错误：请检查配置信息是否正确或者网络故障')
      })
    }
  },
  mounted: function () {
    this.getdata()
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

<template>
  <div class="tjhzs-content tjhzs-main-content">
    <section class="main-content">
      <displayimg :style="style" :images='items'></displayimg>
      <news :newsdata="news"></news>
    </section>
    <Hotel></Hotel>
  </div>
</template>

<script>
import Displayimg from './content/Displayimg'
import News from './content/News'
import Hotel from './content/Hotel'
import Path from '../js/path.js'
export default {
  name: 'main-content',
  data () {
    return {
      style: {
        'float': 'left'
      },
      items: [],
      news: []
    }
  },
  methods: {
    get_images_data: function () {
      const _url = Path.newsPAGE
      let vm = this
      let _images = []
      vm.$http.get(Path.dataURL + 'news.json').then(function (res) {
        // tjhzs服务端需要JSON.parse()使用此步骤
        // let data = window.JSON.parse(res.body)
        let data = res.body
        console.log('news' + '\n' + data)
        let _arr = data.slice(0, 6)
        for (let n of _arr) {
          _images.push({
            url: _url + n.id,
            imgurl: Path.newsimgURL + n.images[0].imgurl,
            desc: n.images[0].desc
          })
        }
        vm.items = _images
        vm.news = _arr
      }, function () {
        console.error('获取新闻数据出现错误：请检查配置信息是否正确或者网络故障')
      })
    }
  },
  mounted: function () {
    this.get_images_data()
  },
  components: {
    Displayimg, News, Hotel
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../sass/_base.scss';
  .tjhzs-content{
    margin: 30px auto 0 auto;
  }
  .main-content{
    @extend %mainwidth;
    position: relative;
    // background: #fff;
    height: 300px;
  }
</style>

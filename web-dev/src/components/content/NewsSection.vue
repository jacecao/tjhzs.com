<template>
  <div class="tjhzs-content tjhzs-main-content">
    <section class="main-content">
      <displayimg :style="style" :images='items' :size='size'></displayimg>
      <news :newsdata="news"></news>
    </section>
  </div>
</template>

<script>
import Displayimg from './Displayimg'
import News from './News'
import Hotel from './Hotel'
import Path from '../../js/path.js'
import Json from '../../js/json_data.js'
export default {
  name: 'main-content',
  data () {
    return {
      style: {
        'float': 'left'
      },
      size: {
        'width': '560px'
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
        let data = Json(res.body)
        // console.log('news' + '\n' + data)
        for (let n of data) {
          _images.push({
            url: _url + n.id,
            imgurl: n.poster.url,
            desc: n.poster.desc
          })
        }
        vm.items = _images
        vm.news = data
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
@import '../../sass/_base.scss';
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

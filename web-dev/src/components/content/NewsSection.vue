<template>
  <section class="home-middle">
    <displayimg v-if="items.length > 0" :setcss="style" :images='items' :size='size'></displayimg>
    <news :newsdata="news"></news>
  </section>
</template>

<script>
import Displayimg from './Displayimg'
import News from './News'
import Path from '@js/path.js'
import Json from '@js/json_data.js'
import {saveSession} from '@js/tool.js'
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
  created () {
    const _url = Path.newsPAGE
    let vm = this
    let _images = []
    vm.$http.get(Path.dataURL + 'news.json').then((res) => {
      let data = Json(res.body)
      // 重组新闻中图片数据
      for (let n of data) {
        _images.push({
          url: _url + n.id,
          imgurl: n.poster.url,
          desc: n.poster.desc
        })
      }
      vm.items = _images
      vm.news = data
      // 设置临时储存
      saveSession('newsImageItems', vm.items)
      saveSession('newsData', vm.news)
    }, () => {
      console.error('获取新闻数据出现错误：请检查配置信息是否正确或者网络故障')
    })
  },
  components: {
    Displayimg, News
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/_base.scss';
  .home-middle{
    width: 1000px;
    margin: 30px auto 0 auto;
    position: relative;
    height: 300px;
  }
</style>

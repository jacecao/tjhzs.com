<template>
  <div class="tjhzs-content">
    <section class="main-content">
      <displayimg :style="style" :images='images'></displayimg>
      <news></news>
    </section>
    <Hotel></Hotel> 
  </div>
</template>

<script>
import Displayimg from './content/Displayimg'
import News from './content/News'
import Hotel from './content/Hotel'
// 加载新闻数据
import NewsData from '../data/newsData.js'
export default {
  name: 'main-content',
  data () {
    return {
      style: {
        'float': 'left'
      },
      items: NewsData
    }
  },
  computed: {
    images () {
      const _url = '/news/'
      let _images = []
      let _arr = this.items.slice(0, 6)
      for (let n of _arr) {
        _images.push({
          url: _url + n.id,
          imgurl: n.images[0].imgurl,
          desc: n.images[0].desc
        })
      }
      return _images
    }
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
    margin: 60px auto;
  }
  .main-content{
    @extend %mainwidth;
    position: relative;
    // background: #fff;
    height: 300px;
  }
</style>

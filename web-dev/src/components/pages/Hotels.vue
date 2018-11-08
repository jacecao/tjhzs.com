<template>
	<div class="tjhzs-new tjhzs-main-content">
		<header>
			<h3>{{hotel.name}}</h3>
		</header>
		<section class="img-group" :style='size'>
			<display-img :isLink="false" :images='images' :size='size'/>
		</section>
		<section class="new-content">
			<p>{{hotel.content}}</p>
		</section>
    <span class="bottom-text">全心全意服务糖酒会</span>
	</div>
</template>

<script>
import DisplayImg from 'components/content/Displayimg'
import Path from '@js/path.js'
import Json from '@js/json_data.js'
export default {
  data () {
    return {
      size: {
        height: '540px',
        width: '840px'
      },
      hotel: {},
      images: []
    }
  },
  created () {
    let vm = this
    vm.$http.get(Path.dataURL + 'hotel.json').then((res) => {
      // tjhzs服务端需要JSON.parse()使用此步骤
      let data = Json(res.body)
      let _images = []
      for (let hotel of data) {
        if (hotel.id === this.$route.params.id) {
          let images = hotel.images
          // 检查images是否为一个数组
          // 即是否有更多图片显示
          if (images && images instanceof Array) {
            for (let image of images) {
              _images.push({
                imgurl: image.url,
                desc: image.desc
              })
            }
          // 如果没有图片组
          // 则显示封面图片
          } else {
            _images.push({
              imgurl: hotel.poster.url,
              desc: hotel.poster.desc
            })
          }
          vm.hotel = hotel
          vm.images = _images
          return
        }
      }
    }, () => {
      console.log('hotel获取数据出错')
    })
  },
  mounted: function () {
    window.scrollTo(0, 0)
  },
  components: { DisplayImg }
}
</script>

<style scoped lang="scss">
@import '../../sass/news.scss';
.tjhzs-new{
	@extend %middlewidth;
	margin: 50px auto;
}
</style>

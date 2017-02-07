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
    <span class="bottom-text">全心/全意/服务糖酒</span>
	</div>
</template>

<script>
import DisplayImg from '../components/content/Displayimg'
import Path from '../js/path.js'
export default {
  data () {
    return {
      size: {
        height: '500px',
        width: '1000px'
      },
      hotel: {},
      images: []
    }
  },
  methods: {
    getdata () {
      let vm = this
      vm.$http.get(Path.dataURL + 'hotel.json').then(function (res) {
        // tjhzs服务端需要JSON.parse()使用此步骤
        // let data = window.JSON.parse(res.body)
        let data = res.body
        for (let hotel of data) {
          if (hotel.id === this.$route.params.id) {
            let images = hotel.images
            for (let image of images) {
              image.imgurl = Path.hotelimgURL + image.imgurl
            }
            vm.hotel = hotel
            vm.images = images
            return
          }
        }
      }, function (err) {
        console.log(err)
        console.log('\n' + '获取数据出错，请检查数据和网络是否有问题')
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
  padding-top: 20px;
}
</style>

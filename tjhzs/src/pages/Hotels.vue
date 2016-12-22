<template>
	<div class="tjhzs-new">
		<header>
			<h3>{{hotel.name}}</h3>
		</header>
		<section class="img-group" :style='size'>
			<display-img :isLink="false" :images='hotel.images' :size='size'/>
		</section>
		<section class="new-content">
			<p>{{hotel.content}}</p>
		</section>
    <span class="bottom-text">全心/全意/服务糖酒</span>
	</div>
</template>

<script>
import DisplayImg from '../components/content/Displayimg'
// 加载热门酒店数据
import Hotels from '../data/hotelData.js'
export default {
  data () {
    return {
      size: {
        height: '500px',
        width: '1000px'
      }
    }
  },
  computed: {
    hotel () {
      for (let n of Hotels) {
        if (n.id === this.$route.params.id) {
          return n
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
}
</style>
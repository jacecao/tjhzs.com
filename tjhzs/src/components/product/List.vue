<template>
	<section class="product-list" :style="bgcolor" :key="index">
		<h3>{{item.title}}</h3>
		<span>{{item.note[0]}}</span>
		<span>{{item.note[1]}}</span>
		<play-img :isLink="false" :images="item.images"/>
		<span class="color-text">{{item.ad}}</span>
	</section>
</template>

<script>
import PlayImg from '../content/Displayimg.vue'

export default {
  name: 'list',
  props: {
    index: Number,
    item: Object
  },
  data () {
    return {
      item: '展台制作案例展示',
      desc: '用心设计 —— 匠心制作',
      images: [
        {
          url: '/',
          imgurl: '../../../static/images/content/1.jpg',
          desc: '说明文件来介绍图片的故事'
        },
        {
          url: '/',
          imgurl: '../../../static/images/content/2.jpg',
          desc: '说明文件来介绍图片的故事'
        },
        {
          url: '/',
          imgurl: '../../../static/images/content/3.jpg',
          desc: '说明文件来介绍图片的故事'
        },
        {
          url: '/',
          imgurl: '../../../static/images/content/4.jpg',
          desc: '说明文件来介绍图片的故事'
        }
      ],
      bgcolor: {backgroundColor: '#fff'}
    }
  },
  components: {
    PlayImg
  }
}
</script>

<style scoped lang="scss">
	@import '../../sass/product.scss';
	.product-list{
		@extend %middlewidth;
	}
</style>
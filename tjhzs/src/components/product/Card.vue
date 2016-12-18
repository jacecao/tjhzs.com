<template>
	<section class="product-item">
		<h3>{{item}}</h3>
		<div class="item-img-box">
			<img :src="img" alt="">
		</div>
		<span>实力设计、创意无敌</span>
		<span>彰显品牌实力</span>
	</section>
</template>

<script>
export default {
  name: 'card',
  data () {
    return {
      item: '展示设计',
      img: '../../static/images/product/item-logo-1.png',
      desc: '关于本项目的一段描述关于本项目的一段描述关于本项目的一段描述关于本项目的一段描述'
    }
  }
}
</script>

<style scoped lang="scss">
	@import '../../sass/product.scss'
</style>
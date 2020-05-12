<template>
	<section class="product-item" :style="cardStyle">
		<h3>{{item.title}}</h3>
		<div class="product_item_img_box" :style="{background: 'url('+background+')'}">
			<app-img :src="item.logo" class="card_img"/>
		</div>
		<span>{{item.note[0]}}</span>
		<span>{{item.note[1]}}</span>
	</section>
</template>

<script>
import AppImg from 'components/img/AppImg'
export default {
  name: 'card',
  props: {
    cardStyle: Object,
    background: String,
    item: Object
  },
  components: {AppImg}
}
</script>

<style lang="scss">
	@import '../../sass/product.scss';
</style>

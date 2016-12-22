<template>
	<section class="product-item" :style="cardStyle">
		<h3>{{item.title}}</h3>
		<div class="item-img-box" :style="{background: 'url('+background+')'}">
			<img :src="item.logo" alt="">
		</div>
		<span>{{item.note[0]}}</span>
		<span>{{item.note[1]}}</span>
	</section>
</template>

<script>
export default {
  name: 'card',
  props: {
    cardStyle: Object,
    background: String,
    item: Object
  },
  computed: {
    Style () {
      return Object.assign(this.cardStyle, {background: this.background})
    }
  }
}
</script>

<style scoped lang="scss">
	@import '../../sass/product.scss';
</style>
<template>
	<section class="product_list" :style="bgcolor" :key="index">
		<h3>{{item.title}}</h3>
		<span class="product_note">{{item.note[0]}}</span>
		<span class="product_note">{{item.note[1]}}</span>
		<play-img :isLink="false" :images="item.images" :size="size"/>
		<span class="color-text">{{item.ad}}</span>
	</section>
</template>

<script>
import PlayImg from '../content/Displayimg.vue'
export default {
  name: 'list',
  props: {
    index: String,
    item: Object
  },
  data () {
    return {
      bgcolor: {backgroundColor: '#fff'},
      size: {height: '460px', width: '960px'}
    }
  },
  mounted: function () {
    let vm = this
    vm.$watch('item', function (now, old) {
      if (now !== old) {
        vm.item = now
      }
    }, {deep: true})
    vm.$watch('index', function (now, old) {
      if (now !== old) {
        vm.index = now
      }
    }, {deep: true})
  },
  components: {
    PlayImg
  }
}
</script>

<style scoped lang="scss">
	@import '../../sass/product.scss';
	.product_list{
		width: 1000px;

	}
</style>

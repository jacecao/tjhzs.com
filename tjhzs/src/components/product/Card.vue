<template>
	<section class="product-item" :style="cardStyle">
		<h3>{{itemobj.title}}</h3>
		<div class="item-img-box" :style="{background: 'url('+background+')'}">
			<app-img :src="itemobj.logo" class="card_img"/>
		</div>
		<span>{{itemobj.note[0]}}</span>
		<span>{{itemobj.note[1]}}</span>
	</section>
</template>

<script>
import AppImg from '../img/AppImg'
import Path from '../../js/path.js'
export default {
  name: 'card',
  props: {
    cardStyle: Object,
    background: String,
    item: Object
  },
  data () {
    return {
      itemobj: {
        title: '',
        logo: Path.productimgURL + 'logo_1.png',
        note: []
      }
    }
  },
  mounted: function () {
    let vm = this
    this.$watch('item', function (now, old) {
      if (now !== old) {
        vm.itemobj = now
      }
    }, {deep: true})
  },
  components: {AppImg}
}
</script>

<style lang="scss">
	@import '../../sass/product.scss';
</style>

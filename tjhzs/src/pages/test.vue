<template>
<div class="test">
	<!-- <header-show/> -->
	<!-- <app-img src="" size="small"/> -->
  <list :item="item"/>
</div>
</template>

<script>
  import HeaderShow from '../components/Headershow.vue'
  import AppImg from '../components/img/AppImg'
  import List from '../components/product/List'
  import Data from '../data/productData.js'
  export default {
    name: 'test_page',
    data () {
      return {
        item: Data[0].show
      }
    },
    components: {HeaderShow, AppImg, List}
  }
</script>

<style scoped lang="scss">
@import '../sass/_base.scss';
.test{
	// height: 410px;
	// width: 500px;
	margin: 0 auto;
  overflow: hidden;
}
</style>

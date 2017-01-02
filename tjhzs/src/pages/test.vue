<template>
<div class="test">
	<!-- <header-show/> -->
		<loading/>
</div>
</template>

<script>
  import HeaderShow from '../components/Headershow.vue'
  import Loading from '../components/loading/Loading.vue'
  export default {
    name: 'test_page',
    components: {HeaderShow, Loading}
  }
</script>

<style scoped lang="scss">
@import '../sass/_base.scss';
.test{
	height: 410px;
	width: 500px;
	margin: 0 auto;
}
</style>
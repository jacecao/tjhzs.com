<template>
<div class="test">
	<!-- <header-show/> -->
		<app-img src="" size="small"/>
</div>
</template>

<script>
  import HeaderShow from '../components/Headershow.vue'
  import AppImg from '../components/img/AppImg'
  export default {
    name: 'test_page',
    components: {HeaderShow, AppImg}
  }
</script>

<style scoped lang="scss">
@import '../sass/_base.scss';
.test{
	height: 410px;
	width: 500px;
	margin: 0 auto;
  overflow: hidden;
}
</style>

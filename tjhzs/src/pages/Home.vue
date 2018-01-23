<template>
	<div class="homepage">
		<header-show/>
		<main-content/>
	</div>
</template>

<script>
import MainContent from '../components/Maincontent.vue'
import HeaderShow from '../components/Headershow.vue'
export default {
  name: 'tjhzs_product',
  components: {HeaderShow, MainContent}
}
</script>

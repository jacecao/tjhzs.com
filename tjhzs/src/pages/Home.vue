<template>
	<section>
		<header-show/>
		<main-content/>
	</section>
</template>

<script>
import MainContent from '../components/Maincontent.vue'
import HeaderShow from '../components/Headershow.vue'
export default {
  name: 'tjhzs_product',
  components: {HeaderShow, MainContent}
}
</script>

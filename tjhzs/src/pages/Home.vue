<template>
  <main-layout>
  	<header-show/>
  	<main-content/>
  </main-layout>
</template>

<script>
import MainLayout from '../layouts/Main.vue'
import HeaderShow from '../components/Headershow.vue'
import MainContent from '../components/Maincontent.vue'

export default {
  name: 'tjhzs_product',
  components: { MainContent, HeaderShow, MainLayout }
}
</script>

<style scoped lang="scss">
@import '../sass/_base.scss';

</style>

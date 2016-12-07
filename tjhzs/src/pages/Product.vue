<template>
  <div id="tjhzs_product">
  	<nav-bar/>
    <product/>
    <app-footer/>
  </div>
</template>

<script>
import Product from '../components/product/Product'
import NavBar from '../components/Navbar'
import HeaderShow from '../components/Headershow'
import AppFooter from '../components/Appfooter'

export default {
  name: 'tjhzs_product',
  components: { Product, NavBar, HeaderShow, AppFooter }
}
</script>

<style scoped lang="scss">
@import '../sass/_base.scss';

</style>

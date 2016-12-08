<template>
  <main-layout>
    <product/>
  </main-layout>
</template>

<script>
import Product from '../components/product/Product'
import MainLayout from '../layouts/Main'

export default {
  name: 'tjhzs_product',
  components: { Product, MainLayout }
}
</script>

<style scoped lang="scss">
@import '../sass/_base.scss';

</style>

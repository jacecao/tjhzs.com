<template>
	<div class="home-page">
		<header-show/>
		<news-section/>
    <hb-hotel :setTitle="section_a.title" :pathName="section_a.file"/>
    <hb-hotel :setTitle="section_b.title" :pathName="section_b.file"/>
	</div>
</template>

<script>
import NewsSection from 'components/content/NewsSection.vue'
import HeaderShow from 'components/header/Headershow.vue'
import Hotel from 'components/content/HotelMode.vue'
export default {
  name: 'tjhzs_home',
  data () {
    return {
      section_a: {
        title: '春季',
        file: 'hotel.json'
      },
      section_b: {
        title: '秋季',
        file: 'hotel_autumn.json'
      }
    }
  },
  components: {
    'header-show': HeaderShow,
    'news-section': NewsSection,
    'hb-hotel': Hotel
  }
}
</script>

<style scoped lang="scss">
</style>

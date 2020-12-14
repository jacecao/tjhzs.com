<template>
	<div class="home-page">
		<header-show/>
		<news-section/>
    <hb-hotel :setTitle="section_a.title" :dataName="section_a.file" :pagePath="section_a.page"/>
    <hb-hotel :setTitle="section_b.title" :dataName="section_b.file" :pagePath="section_b.page"/>
	</div>
</template>

<script>
import NewsSection from 'components/content/NewsSection.vue'
import HeaderShow from 'components/header/Headershow.vue'
import Hotel from 'components/content/HotelMode.vue'
import Path from '@js/path.js'
export default {
  name: 'tjhzs_home',
  data () {
    return {
      section_a: {
        title: '春季',
        file: 'hotel.json',
        page: Path.hotelPAGE
      },
      section_b: {
        title: '秋季',
        file: 'hotel_autumn.json',
        page: Path.autumnHotelPAGE
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

<template>
	<div class="homepage">
		<header-show/>
		<news-section/>
    <hb-hotel/>
	</div>
</template>

<script>
import NewsSection from '../components/NewsSection.vue'
import HeaderShow from '../components/Headershow.vue'
import Hotel from '../components/content/Hotel.vue'
export default {
  name: 'tjhzs_home',
  components: {
    'header-show': HeaderShow,
    'news-section': NewsSection,
    'hb-hotel': Hotel
  }
}
</script>

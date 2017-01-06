<template>
  <transition name="main-fade" mode="out-in">
    <img v-if="ready" :src="src" :alt="alt" :style="css">
    <loading v-else :havemask="false" :style="css"/>
  </transition>
</template>

<script>
  import Loading from '../loading/Loading'
  export default {
    name: 'app_img',
    props: {
      src: {
        type: String
      },
      alt: {
        type: String
      },
      css: {
        type: Object
      }
    },
    data () {
      return {
        ready: false
      }
    },
    mounted: function () {
      console.log(this.style)
      this.isloading(this.src)
    },
    methods: {
      isloading (url) {
        let _img = new window.Image()
        _img.src = url
        _img.onload = () => { this.ready = true }
      }
    },
    components: {Loading}
  }
</script>

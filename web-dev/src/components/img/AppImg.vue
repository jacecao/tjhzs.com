<template>
  <transition name="main-fade">
    <img v-if="ready" :src="src" :alt="alt" :style="css">
    <loading v-else :style="css" :haveinfo="false" :size="size"/>
  </transition>
</template>

<script>
  import Loading from 'components/loading/Loading'
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
      },
      // 加载动画尺寸，默认为正常normal可选small
      size: {
        type: String
      }
    },
    data () {
      return {
        ready: false
      }
    },
    mounted: function () {
      // console.log(this.style)
      this.isloading(this.src)
      let vm = this
      vm.$watch('src', function (now, old) {
        if (now !== old) {
          vm.isloading(vm.src)
        }
      })
    },
    methods: {
      isloading (url) {
        let _img = new window.Image()
        _img.src = url
        _img.onload = () => {
          this.ready = true
        }
      }
    },
    components: {Loading}
  }
</script>

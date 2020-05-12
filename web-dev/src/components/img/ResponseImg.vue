<template>
  <transition name="main-fade">
    <div v-if="ready" class="response_img_div" :style="css">
      <div class="bgMask" :style="imgDivCss"></div>
      <img :src="src" :alt="alt" :style="imgShowCss">
    </div>
    <loading v-else :setcss="css" :haveinfo="false" :size="size"/>
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
        ready: false,
        imgDivCss: {},
        imgShowCss: {
          'height': '100%',
          'width': 'auto',
          'left': 0
        },
        imgH: 0,
        imgW: 0
      }
    },
    mounted: function () {
      this.isloading(this.src)
      // 将容器css 传递给模糊遮罩
      Object.assign(this.imgDivCss, this.css)
      this.imgDivCss['background-image'] = `url(${this.src})`

      let vm = this
      vm.$watch('src', function (now, old) {
        if (now !== old) {
          vm.isloading(vm.src)
        }
      })
    },
    computed: {},
    methods: {
      isloading (url) {
        let _img = new window.Image()
        _img.src = url
        // 获取图片的真实尺寸，方便做画面显示适配
        _img.onload = () => {
          this.ready = true
          this.imgW = _img.width
          this.imgH = _img.height
          this.resetImgCss()
        }
      },
      resetImgCss () {
        // 获取当前容器大小，获取在容器高度下，图片应该显示的宽度
        let imgShowHeight = this.css.height
        let imgShowWidth = Math.floor(this.imgW * parseInt(this.css.height) / this.imgH)
        // 图片居中显示位置, 获取偏移量
        let positionLeft = (parseInt(this.css.width) - imgShowWidth) / 2
        positionLeft = Math.floor(positionLeft)
        // 设置css对象
        this.$set(this.imgShowCss, 'height', imgShowHeight)
        this.$set(this.imgShowCss, 'width', `${imgShowWidth}px`)
        this.$set(this.imgShowCss, 'left', `${positionLeft}px`)
        // console.log(this.imgShowCss.height, this.imgShowCss.width)
      }
    },
    components: {Loading}
  }
</script>

<style lang="scss">
.response_img_div {
  position: relative;
  & .bgMask {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    filter: blur(5px);
  }
  img {
    position: absolute;
    top: 0;
  }
}
</style>

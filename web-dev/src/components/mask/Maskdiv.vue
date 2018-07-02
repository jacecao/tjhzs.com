<template>
	<div class="tjhzs_mask" :style="auto? auto_style : mask_style"></div>
</template>

<script>
  export default {
    props: {
      // 是否全局遮罩
      auto: {
        type: Boolean,
        default: true
      },
      // 在非全局遮罩下需要指定父容器
      parentNode: {
        type: Object
      }
    },
    data () {
      return {
        auto_style: {
          position: 'fixed',
          left: 0,
          top: 0,
          bottom: 0,
          right: 0
        },
        mask_style: {
          position: 'absolute',
          top: 0,
          left: 0
        }
      }
    },
    mounted: function () {
      // 覆盖parentNode的遮盖样式
      if (!this.auto && this.parentNode) {
        // this.$el 指当前创建的Node
        // this.$el.
        this.$el.style.width = this.parentNode.$el.parentNode.offsetWidth + 'px'
        this.$el.style.height = this.parentNode.$el.parentNode.offsetHeight + 'px'
      }
    }
  }
</script>

<style scoped lang="scss">
  .tjhzs_mask{
  	background-color: rgba(100,100,100,0.1);
  }
</style>

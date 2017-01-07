<template>
	<div class="tjhzs_loading" :style="style">
    <slot name="loading_bg"></slot>
		<maskdiv v-if="havemask" :auto="false" :parentNode="this"/>
		<div :class="'loading'+' '+'loading_'+size">
			<div class="circle-1"></div>
			<div class="circle-2"></div>
			<span v-if="haveinfo" class="loading_info">{{loading_info}}</span>
		</div>
	</div>
</template>

<script>
  import Maskdiv from '../mask/Maskdiv'
  export default {
    props: {
      // 设置加载提示信息类容
      loading_info: {
        type: String,
        default: '--正在加载--'
      },
      // 是否需要遮罩
      havemask: {
        type: Boolean,
        default: true
      },
      // 是否需要显示提示信息
      haveinfo: {
        type: Boolean,
        default: true
      },
      // 样式添加
      style: {
        type: Object
      },
      // loading尺寸选择
      // small-normal 两种选择
      size: {
        type: String,
        default: 'normal'
      }
    },
    components: {
      Maskdiv
    },
    mounted: function () {
      let _width = this.$el.parentNode.offsetWidth
      let _height = this.$el.parentNode.offsetHeight
      this.$el.style.width = _width + 'px'
      this.$el.style.height = _height + 'px'
      if (this.size === 'small') {
        let _loading = this.$el.querySelector('.loading')
        // let _circle = _loading.querySelector('.circle-1')
        let _info = _loading.querySelector('.loading_info')
        // 计算出small_loading在较小的元素中的top值
        // 例如在本网页中首页酒店展示栏的加载动画就需要重新计算相对高度
        let _top = window.Math.ceil((_height - _info.offsetTop - _info.offsetHeight) / 2)
        _loading.style.top = _top + 'px'
      }
    }
  }
</script>

<style lang="scss" scoped>
	@import '../../sass/_base.scss';
	.tjhzs_loading{
		position: relative;
	}
  .loading{
    position: relative;
    top: 40%;
    .circle-1 , .circle-2{
      position: absolute;
      border-radius: 50%;
      background-color: #0062e0;
      left: 50%;
      top: 0;
      opacity: 0.6;
      z-index: $z-top;
    }
    .circle-1{
      animation: bounce1 2s infinite ease-in-out;
    }
    .circle-2{
      animation: bounce2 2s infinite ease-in-out;
    }
    @keyframes bounce1 {
      0%, 100%{
        transform: scale(0.2);
        opacity: 0.2;
      }
      50%{
        transform: scale(1);
        opacity: 0.6;
      }
    }
    @keyframes bounce2 {
      0%, 100%{
        transform: scale(1);
        opacity: 0.6;
      }
      50%{
        transform: scale(0.2);
        opacity: 0.2;
      }
    }
    .loading_info{
      position: absolute;
      width: 100%;
      height: 20px;
      line-height: 20px;
      text-align: center;
      color: #0062e0;
    }
  }
	.loading_normal{
		.circle-1 , .circle-2 {
			width: 60px;
			height: 60px;
			margin-left: -30px;
		}
		.loading_info{
				top: 70px;
        font-size: 1.2 * $font;
        animation: info_animate_normal 2s infinite ease-in-out;
		}
    @keyframes info_animate_normal {
      0%, 100%{
        top: 80px;
        opacity: 0.3;
      }
      50%{
        top: 70px;
        opacity: 0.8;
      }
    }
	}
  .loading_small{
    .circle-1 , .circle-2 {
      width: 40px;
      height: 40px;
      margin-left: -20px;
    }
    .loading_info{
        top: 45px;
        font-size: 0.9 * $font;
        animation: info_animate_small 2s infinite ease-in-out;
    }
    @keyframes info_animate_small {
      0%, 100%{
        top: 45px;
        opacity: 0.3;
      }
      50%{
        top: 55px;
        opacity: 0.8;
      }
    }
  }
</style>

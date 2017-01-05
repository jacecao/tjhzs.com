<template>
	<div class="tjhzs_loading">
		<maskdiv :auto="false" :parentNode="this"/>
		<div class="loading">
			<div class="circle-1"></div>
			<div class="circle-2"></div>
			<span class="loading_info">{{loading_info}}</span>
		</div>
	</div>
</template>

<script>
  import Maskdiv from '../mask/Maskdiv'
  export default {
    props: {
      loading_info: {
        type: String,
        default: '--正在加载--'
      }
    },
    components: {
      Maskdiv
    },
    mounted: function () {
      this.$el.style.width = this.$el.parentNode.offsetWidth + 'px'
      this.$el.style.height = this.$el.parentNode.offsetHeight + 'px'
    }
  }
</script>

<style lang="scss" scoped>
	@import '../../sass/_base.scss';
	.tjhzs_loading{
		position: relative;
		// height: 410px;
		// width: 500px;
	}
	.loading{
		// width: 100%;
		// height: 100%;
		position: relative;
		// margin: -30px auto;
		top: 45%;
		// display: none;
		.circle-1 , .circle-2 {
			position: absolute;
			width: 60px;
			height: 60px;
			border-radius: 50%;
			background-color: #0062e0;
			left: 50%;
			top: 0;
			margin-left: -30px;
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
			}
			50%{
				transform: scale(1);
			}
		}
		@keyframes bounce2 {
			0%, 100%{
				transform: scale(1);
			}
			50%{
				transform: scale(0.2);
			}
		}
		.loading_info{
				position: absolute;
				width: 100%;
				height: 20px;
				font-size: 1.2 * $font;
				line-height: 20px;
				text-align: center;
				color: #0062e0;
				top: 70px;
				animation: info_animate 2s infinite ease-in-out;
		}
		@keyframes info_animate {
			0%, 100%{
				top: 80px;
				opacity: 0.4;
			}
			50%{
				top: 70px;
				opacity: 1;
			}
		}
	}
</style>
<template>
<div>
	<header-show/>
	<div class="notfound tjhzs-main-content">
		<span>404PAGE</span>
		<div class="message">
			<p>对不起你已经偏离我们已经规划好的路线，回头是岸呀！</p>
		</div>
	</div>
</div>
</template>

<script>
  import HeaderShow from 'components/header/Headershow.vue'
  export default {
    name: 'undefined_page',
    components: {HeaderShow}
  }
</script>

<style scoped lang="scss">
@import '../../sass/_base.scss';
	.notfound{
		@extend %middlewidth;
		height: 800px;
		height: 40vh;
		margin: 100px auto;
		color: $navcolor;
		text-align: center;
		span{
			font-size: 5 * $font;
			color: $hovercolor;
		}
		.message{
			position: relative;
			height: 100px;
			margin: 0 auto;
			top: 50px;
			box-shadow: 0 0 4px 4px #c6c6c6;
			p {
				font-size: 1.3 * $font;
				line-height: 100px;
			}
		}
	}
</style>

<template>
<div class="undefined tjhzs-main-content">
	<span>404PAGE</span>
	<div class="message">
		<p>对不起你已经偏离我们已经规划好的路线，回头是岸呀！</p>
	</div>
</div>
</template>

<script>
  export default {
    name: 'undefined_page',
    components: {}
  }
</script>

<style scoped lang="scss">
@import '../sass/_base.scss';
	.undefined{
		@extend %middlewidth;
		height: 800px;
		height: 40vh;
		margin-top: 100px;
		color: $navcolor;
		text-align: center;
		span{
			font-size: 5 * $font;
			color: $hovercolor;
		}
		.message{
			position: relative;
			height: 100px;
			width: 1000px;
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
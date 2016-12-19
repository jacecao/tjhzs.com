<template>
<div class="undefined">
	<p>对不起你已经偏离我们已经规划好的路线</p>
	<p>麻烦你回到正常路线</p>
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
		p {
			font-size: 1.3 * $font;
		}
	}
</style>
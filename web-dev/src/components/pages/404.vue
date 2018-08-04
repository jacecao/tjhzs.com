<template>
<div>
	<div class="notfound tjhzs-main-content">
     <span class="time">{{time}}</span>
		<div class="message">
			<p>已偏离我们的路线！{{time}} 秒后返回首页</p>
		</div>
	</div>
  <header-show/>
</div>
</template>

<script>
  import HeaderShow from 'components/header/Headershow.vue'
  export default {
    name: 'undefined_page',
    data () {
      return {
        time: 6
      }
    },
    mounted () {
      const vm = this
      const action = () => {
        if (vm.time > 1) {
          vm.time --
          setTimeout(() => {
            action()
          }, 1000)
        } else {
          setTimeout(() => {
            window.location.href = '/'
          }, 300)
        }
      }
      setTimeout(action, 1000)
    },
    components: {HeaderShow}
  }
</script>

<style scoped lang="scss">
@import '../../sass/_base.scss';
	.notfound{
		@extend %middlewidth;
		height: 800px;
		height: 40vh;
		margin: 50px auto 0;
		color: $navcolor;
		text-align: center;
		.time{
      display: block;
			font-size: 4 * $font;
			color: $hovercolor;
      /*transform: rotate(45deg);*/
      animation: shake 1s linear infinite alternate;
		}
		.message{
			height: 100px;
      width: 600px;
			margin: 0 auto;
			box-shadow: 0 0 2px 2px rgba(254, 0, 91, 0.1);
			p {
				font-size: 1.3 * $font;
				line-height: 100px;
        color: $navcolor;
			}
		}
	}
  @keyframes shake {
    0 {transform: scale(1.2); opacity: 1;}
    100% {transform: scale(0.6); opacity: 0;}
  }
</style>

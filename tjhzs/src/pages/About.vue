<template>
  <div class="tjhzs_about">
  	<section class="about_list future">
      <div class="head">
        <div class="title">我们的愿景</div>
      </div>
      <div class="content">
        <p>未来的我们将融合大数据</p>
        <p>会展的优势将会体现的更加优越</p>
        <p>助力企业更快更好的发展</p>
      </div>
    </section>
    <section class="about_list about_us">
      <div class="head">
        <div class="title">关于我们</div>
      </div>
      <div class="content">
        <p>成都和邦会议展览服务有限公司</p>
        <p>我们全心全意服务于全国糖酒会</p>
        <p>设计、销售、推广为一体的会展服务公司</p>
      </div>
    </section>

  </div>  
</template>

<script>
export default {
  name: 'tjhzs_product',
  data () {
    return {}
  }
}
</script>

<style lang="scss">
@import '../sass/about.scss';
.tjhzs_about{
	@extend %middlewidth
}

</style>

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
    <section class="about_list about_weal">
      <div class="head">
        <div class="title">我们的福利</div>
      </div>
      <div class="content">
        <div class="conrow">
          <div class="item">
            <span class="icon-house icons"></span>
            <span>提供工作住房</span>
          </div>
          <div class="item">
            <span class="icon-travel icons"></span>
            <span>一周团队旅行</span>
          </div>
          <div class="item">
            <span class="icon-film icons"></span>
            <span>工作娱乐两不误</span>
          </div>
        </div>
        <div class="conrow">
          <div class="item">
            <span class="icon-learn icons"></span>
            <span>学习+加薪</span>
          </div>
          <div class="item">
            <span class="icon-money icons"></span>
            <span>工龄福利丰厚</span>
          </div>
          <div class="item">
            <span class="icon-heart icons"></span>
            <span>超越年假的探亲假</span>
          </div>
      </div>
    </section>
    <job-head/>
    <Works/>
  </div>  
</template>

<script>
import JobHead from '../components/job/Jobheader'
import Works from '../components/job/works'
export default {
  name: 'tjhzs_about',
  data () {
    return {}
  },
  components: {JobHead, Works}
}
</script>

<style lang="scss">
@import '../sass/about.scss';
.tjhzs_about{
	@extend %middlewidth
}

</style>

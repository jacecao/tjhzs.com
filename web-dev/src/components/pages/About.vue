<template>
  <div class="tjhzs_about tjhzs-main-content">
    <div class="weixin">
      <img src="/static/img/weixin.02fbb77.png" alt="weixin">
      <p>我们的公众号</p>
    </div>

  	<section v-for='item in info' class="about_list">
      <div class="head">
        <div class="title">{{item.title}}</div>
      </div>
      <div class="content">
        <p v-for="text in item.content">{{text}}</p>
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
      </div>
    </section>
    <job-head :contact="contact"/>
    <Works :Jobs="jobs"/>
  </div>
</template>

<script>
import JobHead from 'components/job/Jobheader'
import Works from 'components/job/works'
import Path from '@js/path.js'
import Json from '@js/json_data.js'
export default {
  name: 'tjhzs_about',
  data () {
    return {
      info: [],
      // 这里的数据将传给工作子组件
      jobs: [],
      contact: {
        email: 'hrxbvip@163.com'
      }
    }
  },
  created () {
    let vm = this

    vm.$http.get(Path.dataURL + 'about.json').then((res) => {
      let data = Json(res.body)
      vm.info = data.tjhzs
    }, () => {
      console.log('获取数据出错，网络链接不成功')
    })

    vm.$http.get(Path.dataURL + 'jobs.json').then((res) => {
      let data = res.body
      vm.jobs = data.jobs
    }, () => {
      console.log('获取数据出错，网络链接不成功')
    })

    vm.$http.get(Path.dataURL + 'email.json').then((res) => {
      let data = res.body
      vm.contact = data
    }, () => {
      console.log('获取数据出错，网络链接不成功')
    })
  },
  components: {JobHead, Works}
}
</script>

<style lang="scss">
@import '../../sass/about.scss';
.tjhzs_about{
	@extend %middlewidth;
  padding-top: 30px;
}
.weixin {
  @extend %middlewidth;
  text-align: center;
  img {
    width: 100px;
    height: 100px;
    border: 2px solid #3eb812;
  }
}


</style>

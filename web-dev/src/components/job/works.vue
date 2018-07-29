<template>
  <div class="tjhzs_job_content">
    <template v-if="Jobs.length > 0">
      <div v-for="job in Jobs" class="job_item">
        <div class="title">
          <span class="name">{{job.name}}</span>
          <span class="note">({{job.note}})</span>
        </div>
        <div class="location">
          <span>位置：</span><span>{{job.loc}}</span>
        </div>
        <div class="requirement">
          <span>要求：</span><span>{{job.req}}</span>
        </div>
        <div class="job_des">岗位描述
          <p v-for="(text, index) in job.des">{{index+1}}、{{text}};</p>
        </div>
      </div>
    </template>

    <template v-else>
      <span class="no_job">目前我们还没有发布招聘公告, 当然您可以将您的简历发送到上面的邮箱里，若我们有意会第一时间联系您！</span>
    </template>

  </div>
</template>

<script>
export default {
  name: 'job_content',
  props: {
    Jobs: Array
  },
  data () {
    return {}
  }
}
</script>

<style lang="scss">
@import '../../sass/about.scss';
.tjhzs_job_content{
	padding: 20px 0 40px 0;
  margin-bottom: 100px;
  border-top: 2px solid #ccc;
  border-bottom: 2px solid #ccc;

  .job_item{
    width: 100%;
    position: relative;
    top: 0px;
    padding: 0 50px;
    margin-top: 30px;
    height: auto;
    line-height: 36px;

    .title{
      font-size: 24px;
      color: #3b3b3b;
      margin-bottom: 25px;
      font-weight: bold;
      .name{
        display: inline-block;
        line-height: 45px;
        height: 45px;
        border-bottom: 4px solid #18ccc0;
      }
    }
    .location span,.requirement span{
      margin-right: 10px;
    }
    .job_des{
      margin-top: 10px;
      p {
        @extend %h1;
        text-align: left;
      }
    }
  }
  .no_job {
    padding-left: 20px;
    color: #fe005b;
  }
}

</style>

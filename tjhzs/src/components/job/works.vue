<template>
  <div class="tjhzs_job_content">
    <div class="job_item">
      <div class="title">
        <span class="name">销售经理</span>
        <span class="note">(带团队、做全局销售规划)</span>
      </div>
      <div class="location">
        <span>位置：</span><span>成都</span>
      </div>
      <div class="requirement">
        <span>要求：</span><span>具备销售工作经验、能有工作担当、攻坚期能抗压力和加班、对销售前景有很好的预测和规划</span>
      </div>
      <div class="job_des">岗位描述
        <p>1、带领团队运作指定项目;</p>
        <p>2、对项目销售做前期规划;</p>
        <p>3、完成和严格执行公司高层的销售安排;</p>
      </div>
    </div>
  </div>  
</template>

<script>
export default {
  name: 'job_content',
  data () {
    return {}
  }
}
</script>

<style lang="scss">
@import '../../sass/about.scss';
.tjhzs_job_content{
	padding: 40px 0;
  margin-bottom: 100px;
  border-top: 2px solid #ccc;
  border-bottom: 2px solid #ccc;

  .job_item{
    width: 100%;
    position: relative;
    top: 0px;
    padding: 0 50px;
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
}

</style>

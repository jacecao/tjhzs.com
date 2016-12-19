<template>
  <div class="tjhzs_job_head">
    <div class="title">招聘岗位</div>
    <div class="email">
      <span>简历投递邮箱：</span>
      <span class="hrEmail">hrxbvip@163.com</span>
    </div>
  </div>  
</template>

<script>
export default {
  name: 'job_head',
  data () {
    return {}
  }
}
</script>

<style lang="scss">
@import '../../sass/about.scss';
.tjhzs_job_head{
	@extend %mainwidth;
  width: 100%;
  margin-top: 100px;
  margin-bottom: 40px;
  display: flex;
  .title{
    text-align: left;
    -webkit-box-flex: 1;
    flex: 1;
    font-size: 28px;
    padding-left: 20px;
  }
  .email{
    text-align: right;
    padding-right: 20px;
    font-size: 18px;
    -webkit-box-flex: 1;
    flex: 1;
    .hrEmail{
      color: #16cbbf;
      font-size: 24px;
    }
  }
}

</style>

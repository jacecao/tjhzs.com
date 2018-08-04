<template>
  <div class="tjhzs_job_head" v-if="contact.name">
    <div class="title title-n">招聘岗位</div>
    <div class="email email-n">
      <span>简历投递邮箱：</span>
      <span class="hrEmail hrEmail-n" >{{contact.email}}({{contact.name}})</span>
    </div>
  </div>
  <div class="tjhzs_job_head" v-else>
    <div class="title">招聘岗位</div>
    <div class="email">
      <span>简历投递邮箱：</span>
      <span class="hrEmail" >{{contact.email}}</span>
    </div>
  </div>
</template>

<script>
export default {
  name: 'job_head',
  props: {
    contact: Object
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
  .title-n{
    flex: 2;
  }
  .email{
    text-align: right;
    padding-right: 210px;
    font-size: 18px;
    -webkit-box-flex: 1;
    flex: 1;
    .hrEmail{
      color: #16cbbf;
      font-size: 24px;
    }
  }
  .email{
    flex: 3;
  }
}

</style>

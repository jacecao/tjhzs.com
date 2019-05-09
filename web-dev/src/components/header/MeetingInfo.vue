<template>
  <section class="meeting-content">
    <h3>全国糖酒商品交易会 — 展会信息</h3>
    <div class="meeting-info">
      <p class="small-title"><i class="icon-circle"></i>主办方</p>
      <p>{{headerinfo.zhuban}}</p>
      <p class="small-title"><i class="icon-circle"></i>承办方</p>
      <p>中糖新世纪国际会展（北京）有限公司</p>
      <p>天津市商务局</p>
      <p class="small-title"><i class="icon-circle"></i>协办方</p>
      <p>天津市全国商品交易会办公室</p>
      <p>天津食品集团</p>
    </div>
    <div class="header-info">
      <span>布展时间：{{headerinfo.readytime}}</span><i>/</i>
      <span>开展时间：{{headerinfo.starttime}}</span><i>/</i>
      <span>展会地址：{{headerinfo.addr}}</span>
    </div>
  </section>
</template>

<script>
export default {
  name: 'meetingInfo',
  props: {
    headerinfo: Object
  }
}
</script>

<style scoped lang="scss">
  @import '../../sass/_base.scss';
  .meeting-content{
    width: 1000px;
    margin: 20px auto 40px auto;
    h3 {
      display: block;
      padding: 14px 0;
      margin: 0;
      background-color: rgb(128, 193, 15);
      font-size: 1.4 * $font;
      font-weight: bold;
      letter-spacing: 6px;
      color: #fff;
      text-align: center;
    }
  }
  .header-info, .meeting-info{
    margin: 30px;
    color: #888;
    text-align: center;
  }
  .meeting-info {
    .small-title {font-size: 1.2 * $font; font-weight: bold;}
    .icon-circle {
      display: inline-block;
      height: 12px;
      width: 12px;
      border-radius: 50%;
      background-color: $hovercolor;
      margin-right: 10px;
    }
  }
  .header-info {
    i {
      margin:0 20px;
    }
    padding-bottom: 20px;
    border-bottom: 1px solid rgb(128, 193, 15);
  }
</style>

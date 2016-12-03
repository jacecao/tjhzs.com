<template>
  <div class="header-title">
    <h1><span>{{city}}</span> - <span>{{season}}</span></h1>
    <div>
      <p>主办方：<span>{{zhuban}}</p>
      <p>承办方：<span>{{chengban}}</span></p>
    </div>
    <img :src="smallimg" alt="展馆图片">
  </div>
</template>

<script>
export default {
  name: 'header-title',
  data () {
    return {
      city: '成都',
      season: '春季',
      zhuban: '中国糖业酒类集团公司',
      chengban: '中糖新世纪国际会展有限公司',
      smallimg: '../../../static/images/header/small.jpg',
      bigimg: '../../../static/images/header/big.jpg'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/_base.scss';
  .header-title
  {
    position: absolute;
    top:  64px;
    left: 72px;
    color: $header-title-color;
    h1{
      @extend %h1;
      letter-spacing: 0.15 * $font;
    }
    p{
      @extend %h1;
      margin-top: 10px;
      font-size: smaller;
    }
    img{
      margin-top: 16px;
      height: 98px;
      width: 186px;
      background-color: #6af2c4;
      transition: transform 300ms linear;
      border: 2px solid #00bcd4;
      cursor: pointer;
      @at-root img:hover {
        box-shadow: 0 0 13px rgba(106,142,130,.6);
      }
    }
  }
</style>

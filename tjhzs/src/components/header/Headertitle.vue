<template>
  <div class="header-title">
    <h1><span>{{city}}</span> - <span>{{season}}</span></h1>
    <div>
      <p>主办方：<span>{{zhuban}}</p>
      <p>承办方：<span>{{chengban}}</span></p>
    </div>
    <span class="img-box">
      <img :src="bigimg" alt="展馆图片">
    </span>
    <headerbar></headerbar>
  </div>
</template>

<script>
import Headerbar from './Headerbar'
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
  },
  components: {
    Headerbar
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/_base.scss';
$width: 186px;
$height: 98px;
  .header-title
  {
    position: absolute;
    top:  64px;
    left: 72px;
    color: $header-title-color;
    h1{
      @extend %h1;
      letter-spacing: 0.15 * $font;
      font-weight: lighter;
    }
    p{
      @extend %h1;
      margin-top: 10px;
      font-size: smaller;
    }

    .img-box{
      display: block;
      margin-top: 16px;
      height: $height;
      width: $width;
      background-color: #6af2c4;
      border: 2px solid #00bcd4;
      transition: box-shadow 400ms linear;
      overflow: hidden;
      cursor: pointer;
      img{
        height: $height;
        width: $width;
        transition: transform 400ms linear;
      }
      @at-root .img-box:hover {
        box-shadow: 0 0 13px rgba(106,142,130,.6);
        img{
          transform: scale(1.2);
        }
      }
    }
  }
</style>

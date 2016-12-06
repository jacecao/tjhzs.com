<template>
  <div class="header-title">
    <h1>{{city}} - {{season}}<span>{{city}} - {{season}}</span></h1>
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
$height: 242px;
  .header-title
  {
    position: absolute;
    height: $height;
    top:  ($headerheight - $height) / 2;
    left: 72px;
    color: $header-title-color;
    z-index: 2;
    $color: #00ab88;
    h1{
      @extend %h1;
      position: relative;
      letter-spacing: 0.15 * $font;
      color: $color;
      /* 实现艺术字体 */
      background-image: -webkit-gradient(linear, 0 0, 0 100%, from(rgba(31,255,231,1)), to(rgba(0,171,136,1)));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: bold;
      font-size: 4 * $font;
      span{
        position: absolute;
        left: 0;
        color: transparent;
        text-shadow: 0 0 10px #000;
        z-index: -1;
      }
    }
    p{
      @extend %h1;
      margin-top: 10px;
      font-size: smaller;
    }
    $imgwidth: 186px;
    $imgheight: 98px;
    .img-box{
      display: block;
      margin-top: 16px;
      height: $imgheight;
      width: $imgwidth;
      background-color: #6af2c4;
      border: 2px solid #00bcd4;
      transition: box-shadow 400ms linear;
      overflow: hidden;
      cursor: pointer;
      img{
        height: $imgheight;
        width: $imgwidth;
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

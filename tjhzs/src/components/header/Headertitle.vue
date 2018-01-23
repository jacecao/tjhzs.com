<template>
  <div class="header-title">
    <h1>{{headerinfo.city}} - {{headerinfo.season}}<span>{{headerinfo.city}} - {{headerinfo.season}}</span></h1>
    <div class="metting-info">
      <p>主办方：{{headerinfo.zhuban}}</p>
      <p>承办方：{{headerinfo.chenban}}</p>
    </div>
    <headerbar :headertime='headerinfo'></headerbar>
  </div>
</template>

<script>
import Headerbar from './Headerbar'
export default {
  name: 'header-title',
  props: {
    headerinfo: Object
  },
  mounted: function () {
    // console.log(this.headerinfo)
  },
  components: {
    Headerbar
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
@import '../../sass/_base.scss';
$height: 300px;
  .header-title
  {
    position: relative;
    @extend %mainwidth;
    height: $height;
    width: 1280px;
    top:  ($headerheight - $height) / 2;
    // left: 50%;
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
      font-size: 6 * $font;
      span{
        position: absolute;
        left: 0;
        color: transparent;
        text-shadow: 0 0 10px #000;
        z-index: -1;
      }
    }
    .metting-info{
      p{
        @extend %h1;
        margin-top: 10px;
        padding-left: 20px;
        font-size: 1.5 * $font;
        color: #e2e2e2;
      }

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

<template>
  <nav class="nav-bar" :style="style">
    <div class="logo">
      <a href="/"><img src="../assets/logo.png" alt="HBHZ"></a>
      <span>{{title}}</span>
    </div>
    <ul>
      <li><router-link to="/beta/" active-class="active" exact>首页</router-link></li>
      <li><router-link to="/beta/product" active-class="active">产品案例展示</router-link></li>
      <li><router-link to="/beta/about" active-class="active">关于我们</router-link></li>
    </ul>
  </nav>
</template>

<script>
import navdata from '../data/navbar.js'
export default {
  name: 'nav-bar',
  data () {
    return {
      // 这里得数据需要从服务器获取
      title: navdata.title,
      style: {
        'background-color': navdata.backgroundColor,
        'background-image': navdata.backgroundImage,
        'position': navdata.fixed ? 'fixed' : 'relative'
      }
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../sass/_base.scss';
a{
  transition: color 700ms;
  @include a_css($navcolor);
}
a:hover, .active{
  color: $hovercolor;
}

.nav-bar{
  top: 0;
  height: $navheight;
  z-index: 1000;
  @extend %width;
  border-bottom: 1px solid #e2e2e2;
}
.logo{
  position: absolute;
  width: auto;
  left: 240px;
  span {
    display: inline-block;
    color: $navcolor;
    height: 50px;
    line-height: 50px;
  }
  img {
    float: left;
    margin-right: 16px;
    height: 50px;
    width: 50px;
  }
}

ul{
  position: absolute;
  right: 200px;
  width: 300px;
  margin: 0;
  li{
    display: inline-block;
    margin-right: 46px;
    a{
      display: block;
      height: 50px;
      line-height: 50px;
      font-size: $font;
    }
  }
  li:last-child{
    margin-right: 0;
  }
}
</style>

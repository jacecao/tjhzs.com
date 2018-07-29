<template>
  <nav class="nav-bar" :style="style">
    <div class="logo">
      <span><a href="/" class="logo-link"><img src="../../assets/logo.png" alt="HBHZ"></a>{{title}}</span>
    </div>
    <ul>
      <li  @click="scrollToTop"><router-link
        to="/" active-class="active" exact
        >首页</router-link>
      </li>
      <li  @click="scrollToTop"><router-link
        to="/product" active-class="active"
        >产品案例展示</router-link>
      </li>
      <li  @click="scrollToTop"><router-link
        to="/about" active-class="active"
        >关于我们</router-link>
      </li>
    </ul>
  </nav>
</template>

<script>
import Path from '@js/path.js'
import Json from '@js/json_data.js'
export default {
  name: 'nav-bar',
  data () {
    return {
      // 这里得数据需要从服务器获取
      title: ' ',
      style: {
        'background-color': ' ',
        'background-image': ' ',
        'position': 'relative'
      }
    }
  },
  created () {
    let vm = this
    vm.$http.get(Path.dataURL + 'navbar.json').then(function (res) {
      // tjhzs服务端需要JSON.parse()使用此步骤
      let data = Json(res.body)
      vm.title = data.title
      vm.style = {
        'background-color': data.backgroundColor,
        'background-image': data.backgroundImage ? 'url(' + Path.navbarimgURL + data.backgroundImage + ')' : '',
        'position': data.fixed ? 'fixed' : 'relative'
      }
      vm.$nextTick(() => {
        vm.$emit('position', vm.style.position)
      })
      // window.sessionStorage.setItem('_navbarinfo', window.JSON.stringify(res.body))
    }, function () {
      console.error('获取导航条数据出现错误：请检查配置信息是否正确或者网络故障')
    })
  },
  methods: {
    // 滚动条返回到顶部
    scrollToTop () {
      let _height = document.body.scrollTop
      while (_height >= 0) {
        _height -= 10
        if (_height < 0) {
          window.scrollTo(0, 0)
          return
        }
        window.scrollTo(0, _height)
      }
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/_base.scss';
a{
  transition: color 700ms;
  @include a_css($navcolor);
}
a:hover, .active{
  color: $hovercolor;
}

.nav-bar{
  top: 0;
  left: 0;
  right: 0;
  height: $navheight;
  z-index: $z-super;
  width: 100%;
  min-width: 1000px;
  box-shadow: 0 1px 1px rgba(100, 100, 100, 0.2);
  overflow: hidden;
}
.logo{
  margin-left: 200px;
  float: left;
  span {
    display: inline-block;
    color: $navcolor;
    height: 80px;
    line-height: 80px;
    cursor: default;
  }
  img {
    float: left;
    margin: 10px 16px 0 0;
    height: 50px;
    width: 50px;
  }
}

ul{
  float: right;
  margin: 0 200px 0 0;
  width: 300px;
  li{
    display: inline-block;
    margin-right: 46px;
    a{
      display: block;
      height: 80px;
      line-height: 80px;
      font-size: $font;
    }
  }
  li:last-child{
    margin-right: 0;
  }
}
</style>

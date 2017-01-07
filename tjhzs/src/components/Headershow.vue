<template>
  <transition name="main-fade" mode="out-in">
    <header v-if="ready" v-bind:style="{backgroundImage: 'url(' + path + headerinfo.bgimg +')'}" class="header-show" key="show">
      <div class="mask"></div>
      <!-- 绑定data数据到组件的props -->
      <headertitle :headerinfo='headerinfo' />
    </header>
    <!-- 在相同标签中使用过去时需要添加key属性来予以区别 -->
    <div v-else class="header-show" key="loading">
      <loading/>
    </div>
  </transition>
</template>

<script>
import Headertitle from './header/Headertitle'
import Loading from './loading/Loading'
import Path from '../js/path.js'
export default {
  name: 'header-show',
  data () {
    return {
      headerinfo: {
        startime: '2016-12-31',
        showtime: '2016-12-31',
        addr: 'addr',
        city: 'City',
        season: 'Season',
        zhuban: 'chengdu-china',
        chengban: 'chengdu-china',
        bgimg: 'header_1.jpg'
      },
      ready: false,
      path: Path.headerimgURL
    }
  },
  mounted: function () {
    this.getinfo()
  },
  methods: {
    getinfo () {
      let vm = this
      if (window.localStorage.getItem('_headerinfo') === null) {
        vm.$http.get(Path.dataURL + 'headerinfo.json').then(function (res) {
          // 这里一定要注意如果data中headerinfo:{},那么这里的数据是没办法得到响应的
          // 类似mongodb中的schema一样需要预先定义headerinfo，然后再通过这里获取变更传到子组件
          vm.headerinfo = res.body
          // 将数据录入浏览器缓存
          // 缓存object需要转换为字符串储存才行
          window.localStorage.setItem('_headerinfo', window.JSON.stringify(res.body))
          // 在头部图片加载完成后关闭掉loding画面
          let img = new window.Image()
          img.src = vm.path + vm.headerinfo.bgimg
          img.onload = () => { vm.ready = true }
        }, function () {
          console.error('获取头部信息出现错误：请检查配置信息是否正确或者网络故障')
        })
      } else {
        // 需要将字符串转换为object才行
        let objStr = window.localStorage.getItem('_headerinfo')
        vm.headerinfo = window.JSON.parse(objStr)
        vm.ready = true
      }
    }
  },
  components: {
    Headertitle, Loading
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../sass/_base.scss';
.header-show{
  position: relative;
  @extend %width;
  height: $headerheight;
  background-color: #32b16c;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: 0 0;
  border-bottom: 2px solid #b8b8b8;
  box-shadow: 0 2px 4px #b8b8b8;
  &:hover{
    .mask{
      opacity: 0.6;
    }
  }
}
.mask{
  // content: '';
  // display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: $headerheight;
  background: rgba(20,20,20,0.5);
  background: -webkit-linear-gradient(top, rgba(20,20,20,0.5) 100%,rgba(20,20,20,0.5) 100%);
  transition: all 500ms;
  opacity: 1;
  // cursor: pointer;
}
</style>

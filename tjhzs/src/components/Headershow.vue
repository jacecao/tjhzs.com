<template>
  <transition name="main-fade" mode="out-in">
    <header v-bind:style="{backgroundImage: 'url(' + headerinfo.bgimg.img_url +')'}" class="header-show" key="show">
      <div class="mask"></div>
      <loading v-if="ready" :havemask="false" :style="loadingStyle"/>
      <!-- 绑定data数据到组件的props -->
      <headertitle :headerinfo='headerinfo' />
    </header>
    <!-- 在相同标签中使用过去时需要添加key属性来予以区别 -->
<!--     <div v-else class="header-show" key="loading">
      <loading/>
    </div> -->
  </transition>
</template>

<script>
import Headertitle from './header/Headertitle'
import Loading from './loading/Loading'
import Path from '../js/path.js'
import ResetData from '../data/headerinfo.js'
import Json from '../js/json_data.js'
export default {
  name: 'header-show',
  data () {
    return {
      headerinfo: ResetData,
      loadingStyle: {
        position: 'absolute',
        width: '100%'
      },
      ready: true
    }
  },
  mounted: function () {
    this.getinfo()
  },
  methods: {
    getinfo () {
      let vm = this
      vm.$http.get(Path.dataURL + 'headerinfo.json').then(function (res) {
        // 这里一定要注意如果data中headerinfo:{},那么这里的数据是没办法得到响应的
        // 类似mongodb中的schema一样需要预先定义headerinfo，然后再通过这里获取变更传到子组件
        // tjhzs服务端需要JSON.parse()使用此步骤
        let data = Json(res.body)
        vm.headerinfo = data
        // 在头部图片加载完成后关闭掉loding画面
        let img = new window.Image()
        img.src = vm.headerinfo.bgimg.img_url
        img.onload = () => { vm.ready = false }
      }, function () {
        console.error('获取头部信息出现错误：请检查配置信息是否正确或者网络故障')
      })
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

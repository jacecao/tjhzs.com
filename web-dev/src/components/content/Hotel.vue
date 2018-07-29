<template>
  <section class="hotel-content">
    <div class="hot-logo">
      <h3><span class="red">HOT</span><span>EL</span></h3>
      <span class="title">热点商务洽谈酒店介绍</span>
    </div>
    <ul class="hotel-list">
      <li v-for="item in items">
        <router-link class="hot_img_box" :to="path + item.id">
          <app-img :src="item.poster.url" size="small"/>
          <span class="img_info">{{item.name}}</span>
        </router-link>
      </li>
    </ul>
  </section>
</template>

<script>
import AppImg from 'components/img/AppImg'
import Path from '@js/path.js'
import Json from '@js/json_data.js'
export default {
  name: 'hotels',
  data () {
    return {
      items: [],
      path: Path.hotelPAGE
    }
  },
  methods: {
    getdata () {
      let vm = this
      vm.$http.get(Path.dataURL + 'hotel.json').then(function (res) {
        // tjhzs服务器返回的json字符串
        let data = Json(res.body)
        data.forEach(function (_data) {
          let images = _data.images
          images.forEach(function (image) {
            let _url = image.url
            image.imgurl = _url
          })
        })
        vm.items = data
      }, function (err) {
        console.error(err + '\n' + '获取酒店信息出现错误：请检查配置信息是否正确或者网络故障')
      })
    }
  },
  mounted: function () {
    this.getdata()
  },
  components: {AppImg}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<!-- 注意当复合组件例如这里的app-img组件需要用到这里content.css时那么这里就需要style变为全局样式才能生效 -->
<!-- 这里可以尝试加与不加scoped属性对样式到底有什么影响 -->
<style lang="scss">
@import '../../sass/content.scss';
.hotel-content{
  @extend %mainwidth;
  position: relative;
  margin: 40px auto;
  padding-top: 20px;
  //box-shadow:  $shadow;
}
</style>

<template>
  <section class="hotel-content">
    <div class="hot-logo">
      <h3><span class="red">HOT</span><span>EL</span></h3>
      <span class="title">热点商务洽谈酒店介绍</span>
    </div>
    <ul class="hotel-list">
      <li v-for="item in items">
        <router-link class="hot_img_box" :to="'/beta/hotels/' + item.id">
          <app-img :src="item.images[0].imgurl" size="small"/>
          <span class="img_info">{{item.name}}</span>
        </router-link>
      </li>
    </ul>
  </section>
</template>

<script>
// 加载热门酒店数据
import Hotels from '../../data/hotelData.js'
import AppImg from '../img/AppImg'
export default {
  name: 'hotels',
  data () {
    return {
      items: Hotels
    }
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
  background: #eee;
  height: 150px;
  margin: 40px auto;
  background-color: $bgcolor;
  box-shadow:  $shadow;
}
</style>

<template>
  <section class="hotel-content">
    <div class="hot-logo">
      <h3><span class="red">HOT</span><span>EL</span></h3>
      <span class="title">热点商务洽谈酒店介绍</span>
    </div>
    <ul class="hotel-list">
      <li v-for="item in items">
        <router-link class="img-box" :to="'/hotels/' + item.id">
          <img :src="item.images[0].imgurl" alt="">
          <span>{{item.name}}</span>
        </router-link>
      </li>
    </ul>
  </section>
</template>

<script>
// 加载热门酒店数据
import Hotels from '../../data/hotelData.js'

export default {
  name: 'hotels',
  data () {
    return {
      items: Hotels
    }
  },
  components: {}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/content.scss';
.hotel-content{
  @extend %mainwidth;
  position: relative;
  background: #eee;
  height: 150px;
  margin-top: 80px;
  background-color: $bgcolor;
}
</style>

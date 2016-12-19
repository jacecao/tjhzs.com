<template>
  <section class="hotel-content">
    <div class="hot-logo">
      <h3><span class="red">HOT</span><span>EL</span></h3>
      <span class="title">{{title}}</span>
    </div>
    <ul class="hotel-list">
      <li v-for="item in items">
        <router-link class="img-box" :to="item.url">
          <img :src="item.imgsrc" alt="">
          <span>{{item.title}}</span>
        </router-link>
      </li>
    </ul>
  </section>
</template>

<script>
export default {
  name: 'hotels',
  data () {
    return {
      title: '热点商务洽谈酒店介绍',
      items: [
        {
          url: '/hotels/1',
          title: '成都市锦江宾馆',
          imgsrc: '../../../static/images/hotel/one.jpg'
        },
        {
          url: '/hotels/2',
          title: '这是正在测试中',
          imgsrc: '../../../static/images/hotel/one.jpg'
        },
        {
          url: '/hotels/3',
          title: '成都市锦江宾馆',
          imgsrc: '../../../static/images/hotel/one.jpg'
        },
        {
          url: '/hotels/3',
          title: '成都市锦江宾馆',
          imgsrc: '../../../static/images/hotel/one.jpg'
        }
      ]
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

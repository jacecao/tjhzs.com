<template>
  <section class="hotel-content">
    <div class="hot-logo">
      <h3><span class="red">HOT</span><span>EL</span></h3>
      <span class="title">{{title}}</span>
    </div>
    <ul class="hotel-list">
      <li v-for="item in items">
        <a class="img-box" v-bind:href="item.url">
          <img :src="item.imgsrc" alt="">
          <span>{{item.title}}</span>
        </a>
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
          url: '/',
          title: '成都市锦江宾馆',
          imgsrc: '../../../static/images/hotel/one.jpg'
        },
        {
          url: '/',
          title: '这是正在测试中',
          imgsrc: '../../../static/images/hotel/one.jpg'
        },
        {
          url: '/',
          title: '成都市锦江宾馆',
          imgsrc: '../../../static/images/hotel/one.jpg'
        },
        {
          url: '/',
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
  margin-top: 30px;
  background-color: $bgcolor;
}
</style>

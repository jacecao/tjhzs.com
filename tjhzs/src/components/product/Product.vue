<template>
  <div class="product_box">
    <section v-for="item in items" class="clearfix">
      <div class="img_box">
        <img :src="item.img" :alt="item.title">
      </div>
      <div class="product_info">
        <div>
          <h3>{{item.title}}</h3>
          <p>会期时间：{{item.time}}</p>
          <p>洽谈酒店：{{item.hotel}}</p>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'product_box',
  data () {
    return {
      items: [
        {
          title: '作品名字合作企业',
          time: '成都春季第22届',
          hotel: '锦江宾馆',
          img: '../../../static/images/product/park_01.jpg'
        },
        {
          title: '作品名字合作企业',
          time: '成都春季第22届',
          hotel: '锦江宾馆',
          img: '../../../static/images/product/park_02.jpg'
        },
        {
          title: '作品名字合作企业',
          time: '成都春季第22届',
          hotel: '锦江宾馆',
          img: '../../../static/images/product/park_03.jpg'
        },
        {
          title: '作品名字合作企业',
          time: '成都春季第22届',
          hotel: '锦江宾馆',
          img: '../../../static/images/product/park_04.jpg'
        },
        {
          title: '作品名字合作企业',
          time: '成都春季第22届',
          hotel: '锦江宾馆',
          img: '../../../static/images/product/park_05.jpg'
        }
      ]
    }
  },
  components: {}
}
</script>

<style scoped lang="scss">
@import '../../sass/product.scss';
.product_box{
  @extend %width;
}
</style>

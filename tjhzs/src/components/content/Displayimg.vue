<template>
  <div class="display-img">
    <ul id="show_img" class="clearfix img_box">
      <li v-if='isLink' v-for="item in items">
        <a :href="item.url">
          <img :src="item.imgurl">
          <span>{{item.desc}}</span>
        </a>
      </li>
      <li v-else v-for="item in items">
        <img :src="item.imgurl">
        <span>{{item.desc}}</span>
      </li>
    </ul>
    <span class="control" id="control_left">&lt;</span>
    <span class="control" id="control_right">&gt;</span>
  </div>
</template>

<script>
import play from '../../js/PlayImg.js'
export default {
  name: 'main-content',
  props: {
    isLink: {
      type: Boolean,
      default: true
    }
  },
  data () {
    return {
      items: [
        {
          url: '/',
          imgurl: '../../../static/images/content/1.jpg',
          desc: '说明文件来介绍图片的故事'
        },
        {
          url: '/',
          imgurl: '../../../static/images/content/2.jpg',
          desc: '说明文件来介绍图片的故事'
        },
        {
          url: '/',
          imgurl: '../../../static/images/content/3.jpg',
          desc: '说明文件来介绍图片的故事'
        },
        {
          url: '/',
          imgurl: '../../../static/images/content/4.jpg',
          desc: '说明文件来介绍图片的故事'
        }
      ]
    }
  },
  methods: {
    greet: function () {
      window.alert('hello')
    }
  },
  mounted: function () {
    // 轮播图控制
    play({
      step: 740, // 每次移动的总步长(也就是每张图片的宽度)
      time: 4000, // 每张图片展示时长
      fatherbox: '.display-img', // 父容器名字
      imgbox: '.img_box',
      prev: '#control_left',
      next: '#control_right'
    })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/content.scss';
  .display-img{
    position: relative;
    float: left;
    // background-color: #32b16c;
  }
</style>

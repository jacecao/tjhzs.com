<template>
  <div class="display-img" :style="_style_">
    <ul v-if='isLink' id="show_img" class="clearfix img_box" key="link">
      <li v-for="item in images" :style='size'>
        <router-link :to="item.url">
          <!-- 由于在appimg组件中没有父级标签包裹且其中子元素已有绑定了style的情况,那么这里如果通过style传导样式就会出现无法识别的问题，所以这里绑定css属性来传递样式 -->
          <app-img :src="item.imgurl" :css='size'/>
          <span class="img_desc">{{item.desc}}</span>
        </router-link>
      </li>
    </ul>
    <ul v-else id="show_img" class="clearfix img_box" key="img">
      <li v-for="item in images" :style='size'>
        <app-img :src="item.imgurl" :css="size"/>
        <span class="img_desc">{{item.desc}}</span>
      </li>
    </ul>
    <span class="control" id="control_left">&lt;</span>
    <span class="control" id="control_right">&gt;</span>
  </div>
</template>

<script>
import play from '../../js/PlayImg.js'
import AppImg from '../img/AppImg'
export default {
  name: 'main-content',
  props: {
    // 是否含有链接
    isLink: {
      type: Boolean,
      default: true
    },
    // 轮播图尺寸
    size: {
      type: Object,
      default () {
        return {
          height: '300px',
          width: '740px'
        }
      }
    },
    // 轮播图CSS
    style: Object,
    // 轮播图图片
    images: Array
  },
  computed: {
    _style_: function () {
      // 将尺寸和元素定位反应给父元素
      // 这里使用了ES6中赋值对象功能
      return Object.assign(this.size, this.style)
    }
  },
  mounted: function () {
    let _step = parseInt(this.size.width)
    // 轮播图控制
    play({
      step: _step, // 每次移动的总步长(也就是每张图片的宽度)
      time: 5000, // 每张图片展示时长
      fatherbox: '.display-img', // 父容器名字
      imgbox: '.img_box',
      prev: '#control_left',
      next: '#control_right'
    })
  },
  components: {AppImg}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/content.scss';
  .display-img{
    position: relative;
    margin: 0 auto;
    // height: 300px;
    // width: 740px;
    // float: left;
    background-color: #32b16c;
    box-shadow: $shadow;
  }
</style>

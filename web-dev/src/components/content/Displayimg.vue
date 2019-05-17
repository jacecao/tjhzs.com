<template>
  <!-- 首页新闻图片浏览组件 -->
  <div class="display-img" :style="_style_">
    <ul v-if='isLink' id="show_img" class="clearfix img_box" key="link">
      <li v-for="item in images" :style='size'>
        <router-link :to="item.url">
          <!-- 由于在appimg组件中没有父级标签包裹且其中子元素已有绑定了style的情况,那么这里如果通过style传导样式就会出现无法识别的问题，所以这里绑定css属性来传递样式 -->
          <auto-img :src="item.imgurl" :css='size'/>
          <span class="img_desc">{{filter_desc(item.desc)}}</span>
        </router-link>
      </li>
    </ul>
    <ul v-else id="show_img" class="clearfix img_box" key="img">
      <li v-for="item in images" :style='size'>
        <auto-img :src="item.imgurl" :css="size"/>
        <span class="img_desc">{{filter_desc(item.desc)}}</span>
      </li>
    </ul>
    <span
      v-show="_show_ctl"
      class="control" id="control_left"
    >&lt;</span>
    <span
      v-show="_show_ctl"
      class="control" id="control_right"
    >&gt;</span>
  </div>
</template>

<script>
import play from '@js/PlayImg.js'
// import AppImg from 'components/img/AppImg'
import ResponsImg from 'components/img/ResponseImg'
export default {
  name: 'play-img',
  props: {
    // 是否含有链接
    isLink: {
      type: Boolean,
      default: true
    },
    // 轮播图片容器尺寸
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
    setcss: {
      type: Object
    },
    // 轮播图图片
    images: {
      type: Array
    }
  },
  computed: {
    _style_ () {
      // 将尺寸和元素定位反应给父元素
      // 这里使用了ES6中赋值对象功能
      return Object.assign(this.size, this.setcss)
    },

    _show_ctl () {
      if (this.images.length === 1) {
        return false
      } else {
        return true
      }
    }
  },
  methods: {
    play () {
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

    // 过滤描述文件
    filter_desc (string) {
      if (string !== 'no message' && string) {
        return string
      }
      return ''
    }

  },
  mounted: function () {
    // 在挂载组件后必须将组件高度值传给子组件（也就是图片组件）
    let selfCss = window.getComputedStyle(this.$el)
    this.size.height = selfCss.getPropertyValue('height')

    this.play()
    // 这里需要监听数据变化时，需要再次调动play函数
    this.$watch('images', function (now, old) {
      if (now !== old) {
        this.play()
      }
    }, {deep: true})
  },
  components: {
    'auto-img': ResponsImg
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/content.scss';
  .display-img{
    position: relative;
    box-sizing: border-box;
    border: 5px solid #fff;
    margin: 0 auto;
    /* 加入背景模糊后 舍弃背景颜色 */
    /*background-color: #009688;*/
    box-shadow: $shadow;
  }
</style>

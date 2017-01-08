<template>
  <div class="tjhzs-main-content">
  	<div class="product-header clearfix">
  		<Card :cardStyle="cardFirst"
        :background="path + 'park_01.jpg'"
        :item="products[0]"
        v-on:click.native="get_f"
      />
  	  <Card :cardStyle="cardStyle"
        :background="path + 'park_02.jpg'"
        :item="products[1]"
        v-on:click.native="get_s"
      />
      <!--通过给组件绑定原始事件，来实现对当前key值的更新 -->
      <!-- .navtive 在组件的根元素中监听原始事件 -->
  	  <Card :cardStyle="cardStyle"
        :background="path + 'park_03.jpg'"
        :item="products[2]"
        v-on:click.native="get_t"
      />
  	</div>
    <!-- 通过key来实现多个相同组件过渡动画, 请查看这里的List组件中的Key属性 -->
    <!-- 可查看官方文档中《过渡效果》中的《多个组件过渡》 -->
    <transition name="fade-in" mode="out-in">
      <!-- key值的更新使得过渡动画生效，并将指定数据传入组件渲染 -->
      <list :index="index" :item="products[index].show"/>
    </transition>
  	<span class="bottom-text">全心/全意/服务糖酒</span>
  </div>
</template>

<script>
import Card from '../components/product/Card'
import List from '../components/product/List'
import Path from '../js/path.js'
// 渲染时使用模板数据渲染 这里引入模板数据
import testdata from '../data/productData.js'
let cardStyle = {
  float: 'left',
  marginLeft: '30px',
  cursor: 'pointer'
}
let cardFirst = {
  float: 'left',
  marginLeft: 0,
  cursor: 'pointer'
}
export default {
  name: 'tjhzs_product',
  data () {
    return {
      cardStyle,
      cardFirst,
      products: testdata,
      index: 0,
      path: Path.productimgURL
    }
  },
  methods: {
    get_f () {
      this.index = 0
    },
    get_s () {
      this.index = 1
    },
    get_t () {
      this.index = 2
    },
    getdata () {
      let vm = this
      vm.$http.get(Path.dataURL + 'product.json').then(function (res) {
        let data = res.body
        for (let product of data) {
          product.logo = Path.productimgURL + product.logo
          let _images = product.show.images
          for (let img of _images) {
            img.imgurl = Path.productimgURL + img.imgurl
          }
          product.show.images = _images
        }
        vm.products = data
      }, function (err) {
        console.log(err)
        console.error('\n' + '数据连接错误啦')
      })
    }
  },
  mounted: function () {
    this.getdata()
  },
  components: { Card, List }
}
</script>

<style lang="scss">
@import '../sass/_base.scss';
// 过渡动画
.fade-in-enter-active {
  transition: all .8s ease;
}
.fade-in-leave-active {
  transition: all .7s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.fade-in-leave-active {
  transform: translateX(20px);
  opacity: 0;
}
.fade-in-enter {
  transform: translateX(-20px);
  opacity: 0;
}
.product-header{
	width: 960px;
	margin: 50px auto;
  padding-top: 60px;
}
.bottom-text {
	display: block;
	width: 100%;
	margin: 30px auto;
	text-align: center;
	font-size: 2 * $font;
	letter-spacing: 5px;
	color: #d7d7d7;
}
</style>

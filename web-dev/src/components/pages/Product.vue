<template>
  <div class="tjhzs-main-content">
  	<div class="product-header clearfix">
  		<Card :cardStyle="cardFirst"
        :background="path + 'park_01.jpg'"
        :item="productShow"
        v-on:click.native="get_f"
      />
  	  <Card :cardStyle="cardStyle"
        :background="path + 'park_02.jpg'"
        :item="productAd"
        v-on:click.native="get_s"
      />
      <!--通过给组件绑定原始事件，来实现对当前key值的更新 -->
      <!-- .navtive 在组件的根元素中监听原始事件 -->
  	  <Card :cardStyle="cardStyle"
        :background="path + 'park_03.jpg'"
        :item="productAc"
        v-on:click.native="get_t"
      />
  	</div>
    <!-- 通过key来实现多个相同组件过渡动画, 请查看这里的List组件中的Key属性 -->
    <!-- 可查看官方文档中《过渡效果》中的《多个组件过渡》 -->
    <transition name="fade-in" mode="out-in">
      <!-- key值的更新使得过渡动画生效，并将指定数据传入组件渲染 -->
      <list :index="index" :item="product"/>
    </transition>
  	<span class="bottom-text">全心/全意/服务糖酒</span>
  </div>
</template>

<script>
import Card from 'components/product/Card'
import List from 'components/product/List'
import Path from '@js/path.js'
import Json from '@js/json_data.js'
// 渲染时使用模板数据渲染 这里引入模板数据
import testdata from '../../data/productData.js'
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
      productShow: testdata[0],
      productAd: testdata[1],
      productAc: testdata[2],
      index: 'Show',
      product: testdata[0].show,
      path: Path.productimgURL
    }
  },
  methods: {
    get_f () {
      this.index = 'Show'
      this.product = this.productShow.show
    },
    get_s () {
      this.index = 'Ad'
      this.product = this.productAd.show
    },
    get_t () {
      this.index = 'Ac'
      this.product = this.productAc.show
    },
    getdata () {
      let vm = this
      let fun = function (dataname) {
        vm.$http.get(Path.dataURL + dataname + '.json').then(function (res) {
          // tjhzs服务端需要JSON.parse()使用此步骤
          // let data = window.JSON.parse(res.body)
          let data = Json(res.body)
          let _images = []
          for (let img of data.show.images) {
            _images.push({
              imgurl: img.img_url,
              desc: img.img_desc
            })
          }
          data.show.images = _images
          data.logo = data.logo.img_url
          vm[dataname] = data
          if (dataname === 'productShow') {
            vm.get_f()
          }
        }, function (err) {
          console.error(err + '\n' + '数据连接错误啦')
        })
      }
      fun('productShow')
      fun('productAd')
      fun('productAc')
    }
  },
  mounted: function () {
    this.getdata()
  },
  components: { Card, List }
}
</script>

<style lang="scss">
@import '../../sass/_base.scss';
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

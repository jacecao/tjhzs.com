<template>
  <div class="tjhzs-main-content">
  	<div class="product-header clearfix">
  		<Card :cardStyle="cardFirst" 
        background="/beta/static/images/product/park_01.jpg"
        :item="ProductData[0]"
        v-on:click.native="get_f"
      />
  		<Card :cardStyle="cardStyle" 
        background="/beta/static/images/product/park_02.jpg"
        :item="ProductData[1]"
        v-on:click.native="get_s"
      />
      <!-- 通过给组件绑定原始事件，来实现对当前key值的更新 -->
  		<Card :cardStyle="cardStyle" 
        background="/beta/static/images/product/park_03.jpg"
        :item="ProductData[2]"
        v-on:click.native="get_t"
      />
  	</div>
    <!-- 通过key来实现多个相同组件过渡动画 -->
    <transition name="fade-in" mode="out-in">
      <!-- key值的更新使得过渡动画生效，并将指定数据传入组件渲染 -->
      <list :index="Index" :item="ProductData[Index].show"/>
    </transition>
  	<span class="bottom-text">全心/全意/服务糖酒</span>
  </div>  
</template>

<script>
import Card from '../components/product/Card'
import List from '../components/product/List'
// 加载产品数据
import ProductData from '../data/productData.js'
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
      ProductData,
      Index: 0
    }
  },
  methods: {
    get_f () {
      this.Index = 0
    },
    get_s () {
      this.Index = 1
    },
    get_t () {
      this.Index = 2
    }
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

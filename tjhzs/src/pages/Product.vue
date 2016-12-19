<template>
  <div>
  	<div class="product-header clearfix">
  		<Card :cardStyle="cardFirst"/>
  		<Card :cardStyle="cardStyle"/>
  		<Card :cardStyle="cardStyle"/>
  	</div>
  	<list />
  	<span class="bottom-text">全心/全意/服务糖酒</span>
  </div>  
</template>

<script>
import Card from '../components/product/Card'
import List from '../components/product/List'
let cardstyle = {
  float: 'left',
  marginLeft: '30px',
  cursor: 'pointer'
}
let cardfirst = {
  float: 'left',
  marginLeft: 0,
  cursor: 'pointer'
}
export default {
  name: 'tjhzs_product',
  data () {
    return {
      cardStyle: cardstyle,
      cardFirst: cardfirst
    }
  },
  components: { Card, List }
}
</script>

<style lang="scss">
@import '../sass/_base.scss';
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

<template>
	<dl>
		<dt>{{item}}</dt>
		<dd>
			<img :src="img" alt="">
			<p>{{desc}}</p>
		</dd>
	</dl>
</template>

<script>
export default {
  name: 'card',
  data () {
    return {
      item: '展示设计',
      img: '../../static/images/product/park_01.jpg',
      desc: '关于本项目的一段描述'
    }
  }
}
</script>
<template>
  <div class="news">
    <h3>我们新动态</h3>
    <ul>
      <li v-for="item in items">
        <router-link v-bind:to="item.url" v-bind:title="item.title">
          <h4>{{item.title}}</h4><span>{{item.time}}</span>
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'news',
  data () {
    return {
      items: [
        {
          url: '/news/1',
          title: '这是一测试信息显示条，正在测试中',
          time: '2016-12-05'
        },
        {
          url: '/news/2',
          title: '这是一测试信息显示条，正在测试中',
          time: '2016-12-05'
        },
        {
          url: '/news/3',
          title: '这是一测试信息显示条，正在测试中',
          time: '2016-12-05'
        },
        {
          url: '/news/4',
          title: '这是一测试信息显示条，正在测试中',
          time: '2016-12-05'
        },
        {
          url: '/news/5',
          title: '这是一测试信息显示条，正在测试中',
          time: '2016-12-05'
        },
        {
          url: '/news/6',
          title: '这是一测试信息显示条，正在测试中',
          time: '2016-12-05'
        },
        {
          url: '/news/7',
          title: '7这是一测试信息显示条，正在测试中7',
          time: '2016-12-05'
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
$height: 300px;
$width: 400px;
  .news{
    float: right;
    height: $height;
    width: $width;
    // background-color: #32b16c;
    overflow: hidden;
  }
</style>

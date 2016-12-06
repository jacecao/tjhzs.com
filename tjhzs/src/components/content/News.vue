<template>
  <div class="news">
    <h3>我们新动态</h3>
    <ul>
      <li v-for="item in items">
        <a v-bind:href="item.url" v-bind:title="item.title">
          <h4>{{item.title}}</h4><span>{{item.time}}</span>
        </a>
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
          url: '/',
          title: '这是一测试信息显示条，正在测试中',
          time: '2016-12-05'
        },
        {
          url: '/',
          title: '这是一测试信息显示条，正在测试中',
          time: '2016-12-05'
        },
        {
          url: '/',
          title: '这是一测试信息显示条，正在测试中',
          time: '2016-12-05'
        },
        {
          url: '/',
          title: '这是一测试信息显示条，正在测试中',
          time: '2016-12-05'
        },
        {
          url: '/',
          title: '这是一测试信息显示条，正在测试中',
          time: '2016-12-05'
        },
        {
          url: '/',
          title: '这是一测试信息显示条，正在测试中',
          time: '2016-12-05'
        },
        {
          url: '/',
          title: '这是一测试信息显示条，正在测试中',
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

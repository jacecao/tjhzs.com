<template>
  <section class="main-content">
    <displayimg></displayimg>
    <news></news>
  </section>
</template>

<script>
import Displayimg from './content/Displayimg'
import News from './content/News'
export default {
  name: 'main-content',
  data () {
    return {}
  },
  components: {
    Displayimg, News
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../sass/_base.scss';
  .main-content{
    @extend %mainwidth;
    position: relative;
    // background: #eee;
    height: 300px;
    margin-top: 30px;
  }
</style>

<template>
  <div class="app-content">
    <section class="main-content">
      <displayimg></displayimg>
      <news></news>
    </section>
    <Hotel></Hotel> 
  </div>
</template>

<script>
import Displayimg from './content/Displayimg'
import News from './content/News'
import Hotel from './content/Hotel'

export default {
  name: 'main-content',
  data () {
    return {}
  },
  components: {
    Displayimg, News, Hotel
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../sass/_base.scss';
  .app-content{
    margin: 30px 0;
  }
  .main-content{
    @extend %mainwidth;
    position: relative;
    // background: #eee;
    height: 300px;
  }
</style>

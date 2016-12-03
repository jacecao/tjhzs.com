<template>
  <div v-bind:style="" class="header">
    <div v-on:mousemove='hoverMover' class="mask"></div>
    <headertitle></headertitle>
    <headerbar></headerbar>
  </div>
</template>

<script>
import Headertitle from './header/Headertitle'
import Headerbar from './header/Headerbar'
export default {
  name: 'header-show',
  data () {
    return {
      bgimg: {backgroundImage: '-webkit-linear-gradient(top, rgba(20,20,20,0.5) 100%,rgba(20,20,20,0.5) 100%),url(../../static/images/header/headerbg.jpg)'}
    }
  },
  methods: {
    hoverMover () {

    }
  },
  components: {
    Headertitle, Headerbar
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../sass/_base.scss';
.header{
  position: relative;
  width: 100%;
  height: $headerheight;
  background-color: #32b16c;
  background-image: url(../../static/images/header/headerbg.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: 0 0;
}
.mask{
  // content: '';
  // display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: $headerheight;
  background: -webkit-linear-gradient(top, rgba(20,20,20,0.5) 100%,rgba(20,20,20,0.5) 100%);
  // cursor: pointer;
}
</style>

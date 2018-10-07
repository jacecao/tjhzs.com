<template>
  <router-link
    v-if="info.pointer"
    :to="info.url ? info.url : '/'"
    class="footer-block"
    v-bind:style=" info.pointer ? style : ''"
  >
    <p class="title">{{info.title}}</p>
    <p class="smalltitle">{{info.smalltitle}}</p>
  </router-link>
  <div
    v-else
    class="footer-block"
    v-bind:style=" info.pointer ? style : ''"
  >
    <p class="title">{{info.title}}</p>
    <p class="smalltitle">{{info.smalltitle}}</p>
  </div>
</template>

<script>
export default {
  name: 'block',
  props: {
    info: Object
  },
  data () {
    return {
      style: {cursor: 'pointer'}
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/footer.scss';
  .footer-block{
    // position: absolute;
  }
</style>

<template>
  <a v-if="info.pointer" :href="info.url ? info.url : '/'" class="footer-block" v-bind:style=" info.pointer ? style : ''">
    <p class="title">{{info.title}}</p>
    <p class="samlltitle">{{info.samlltitle}}</p>
  </a>
  <div v-else class="footer-block" v-bind:style=" info.pointer ? style : ''">
    <p class="title">{{info.title}}</p>
    <p class="samlltitle">{{info.samlltitle}}</p>
  </div>
</template>

<script>
export default {
  name: 'block',
  props: ['info'],
  data () {
    return {
      style: {cursor: 'pointer'}
    }
  },
  components: {}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import '../../sass/footer.scss';
  .footer-block{
    // position: absolute;
  }
</style>

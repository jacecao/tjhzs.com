<template>
  <section class="meeting-content">
    <h3>全国糖酒商品交易会 — 展会信息</h3>
    <div class="meeting-info">
      <p class="small-title"><i class="icon-circle"></i>主办方</p>
      <p>{{headerinfo.zhuban}}</p>
      <div v-if="chenbanArr">
        <p class="small-title"><i class="icon-circle"></i>承办方</p>
        <p v-for="name in chenbanArr" :key="chenbanArr.id">{{delSpace(name)}}</p>
      </div>
      <div v-if="xiebanArr">
        <p class="small-title"><i class="icon-circle"></i>协办方</p>
        <p v-for="name in xiebanArr" :key="xiebanArr.id">{{delSpace(name)}}</p>
      </div>
    </div>
    <div class="header-info">
      <span>布展时间：{{headerinfo.readytime}}</span><i>/</i>
      <span>开展时间：{{headerinfo.starttime}}</span><i>/</i>
      <span>展会地址：{{headerinfo.addr}}</span>
    </div>
  </section>
</template>

<script>
export default {
  name: 'meetingInfo',

  props: {
    headerinfo: Object
  },
  computed: {
    chenbanArr () {
      let chenban = this.headerinfo['chenban']
      if (typeof chenban === 'string' && chenban.trim()) {
        return chenban.split('+')
      } else {
        return false
      }
    },
    xiebanArr () {
      let xieban = this.headerinfo['xieban']
      if (typeof xieban === 'string' && xieban.trim()) {
        return xieban.split('+')
      } else {
        return false
      }
    }
  },
  methods: {
    delSpace (str) {
      return str.trim()
    }
  }
}
</script>

<style scoped lang="scss">
  @import '../../sass/_base.scss';
  .meeting-content{
    width: 1000px;
    margin: 20px auto 40px auto;
    h3 {
      display: block;
      padding: 14px 0;
      margin: 0;
      background-color: rgb(128, 193, 15);
      font-size: 1.4 * $font;
      font-weight: bold;
      letter-spacing: 6px;
      color: #fff;
      text-align: center;
    }
  }
  .header-info, .meeting-info{
    margin: 30px;
    color: #888;
    text-align: center;
  }
  .meeting-info {
    .small-title {font-size: 1.2 * $font; font-weight: bold;}
    .icon-circle {
      display: inline-block;
      height: 12px;
      width: 12px;
      border-radius: 50%;
      background-color: $hovercolor;
      margin-right: 10px;
    }
  }
  .header-info {
    i {
      margin:0 20px;
    }
    padding-bottom: 20px;
    border-bottom: 1px solid rgb(128, 193, 15);
  }
</style>

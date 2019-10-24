<template>
  <section class="news-list">
    <display-img :images='imageItems' :size='size'/>
    <h4>新闻列表</h4>
    <ul class="news-list">
      <li v-for="item in news">
        <a class="news-href" :href="newsLink+item.id" :title="item.title">{{item.title}}</a><span class="news-time">{{dateFilter(item.date)}}</span>
      </li>
    </ul>
    <div v-if="pageCount > 1" class="list-navgation">
      <a v-if="showPreventPage"
        href="javascript:;"
        v-on:click="preventPageClick"
        data-type="pre">上一页</a>
      <a v-for="index in pageNumber"
        :class="{active: currentPage==index}"
        v-on:click="pageClick"
        :data-page="index">{{index}}</a>
    </div>
  </section>
</template>

<script>
import DisplayImg from 'components/content/Displayimg'
import Path from '@js/path.js'
import Json from '@js/json_data.js'
import {getSession} from '@js/tool.js'
export default {
  name: 'news_list',
  data () {
    return {
      style: {
      },
      size: {
        height: '460px',
        width: '760px'
      },
      newsLink: Path.newsPAGE,
      pageCount: 1,
      pageSumNumber: 0, // 新闻总页码数
      currentPage: 1, // 当前新闻列表页码
      showPreventPage: false, // 是否显示前一页按钮
      pageNumber: [], // 当前显示的页码数组
      imageItems: [],
      news: []
    }
  },
  created () {
    const vm = this
    // 检查是否有临时储存新闻数据信息
    let _tempNewsData = getSession('newsData')
    let _tempNewsImageItems = getSession('newsImageItems')
    if (_tempNewsData && _tempNewsImageItems) {
      // 获取临时数据后传递值到页面
      this.imageItems = _tempNewsImageItems
      this.news = _tempNewsData
    } else {
      // 如果没有检查到临时储存数据重新请求JSON数据
      const _url = Path.newsPAGE
      let _images = []
      vm.$http.get(Path.dataURL + 'news.json').then((res) => {
        let data = Json(res.body)
        for (let n of data) {
          _images.push({
            url: _url + n.id,
            imgurl: n.poster.url,
            desc: n.poster.desc
          })
        }
        vm.imageItems = _images
        vm.news = data
      }, () => {
        console.error('获取新闻数据出现错误：请检查配置信息是否正确或者网络故障')
      })
    }
    // 获取服务端新闻总页码数
    const _newsInfo = `${Path.webControl}getNewsPages`
    vm.$http.get(_newsInfo).then((res) => {
      vm.pageCount = parseInt(res.body)
      if (vm.pageCount > 6) {
        // 初始需要显示的页码
        vm.pageNumber = [1, 2, 3, 4, 5, vm.pageCount]
      } else {
        let _pageNumber = []
        for (let i = 1; i <= vm.pageCount; i++) {
          _pageNumber.push(i)
        }
        vm.pageNumber = _pageNumber
      }
    }, () => {
      console.error('获取新闻总页数失败')
    })
  },
  mounted () {
    window.scrollTo(0, 0)
  },
  methods: {
    pageClick (event) {
      if (event) {
        // 获取当前点击的页码
        let _clickPage = parseInt(event.target.dataset['page'])
        if (_clickPage !== this.currentPage) {
          this.currentPage = _clickPage
          // 获取当页码数据
          const _getNewsPage = `${Path.webControl}newsPageList&pageNum=${this.currentPage - 1}`
          let vm = this
          vm.$http.get(_getNewsPage).then((res) => {
            let resultData = Json(res.body)
            vm.news = resultData.data
          }, () => {
            console.error('获取新闻数据出现错误')
          })
        }
        // 如果点击的页码为跳转码(即倒数第二个页码),则需要重新计算需要显示的页码数
        if (_clickPage === this.pageNumber[4] && this.pageSumNumber > 6) {
          // 判断是否显示“前一页”按钮
          if (!this.showPreventPage) {
            this.showPreventPage = true
          }
          let _pageNumber = []
          for (let i = _clickPage; i <= this.pageSumNumber; i++) {
            _pageNumber.push(i)
          }
          if (_pageNumber.length > 6) {
            _pageNumber = _pageNumber.slice(0, 5)
            _pageNumber.push(this.pageSumNumber)
          }
          this.pageNumber = _pageNumber
        }
      }
    },
    // 当上一页被点击时
    preventPageClick (event) {
      let _pageNumber = [] // 临时页面显示页码
      if (this.currentPage === this.pageNumber[0] && this.currentPage !== 1) {
        for (let i = this.currentPage; i >= this.currentPage - 4; i--) {
          _pageNumber.unshift(i)
        }
        _pageNumber.push(this.pageSumNumber)
        this.pageNumber = _pageNumber
      }
      if (this.currentPage !== 1) {
        this.currentPage = this.currentPage - 1
        // 获取当页码数据
        const _getNewsPage = `${Path.webControl}newsPageList&pageNum=${this.currentPage - 1}`
        let vm = this
        vm.$http.get(_getNewsPage).then((res) => {
          let resultData = Json(res.body)
          vm.news = resultData.data
        }, () => {
          console.error('获取新闻数据出现错误')
        })
        if (this.currentPage === 1) {
          this.showPreventPage = false
        }
      }
    },
    // 时间修正
    dateFilter (date) {
      return date.split(' ')[0]
    }
  },
  components: { 'display-img': DisplayImg }
}
</script>

<style scoped lang="scss">
@import '../../sass/_base.scss';
.news-list {
  @extend %middlewidth;
  h4 {
    display: block;
    width: 112px;
    height: 40px;
    line-height: 40px;
    margin: 20px auto 0 auto;
    font-size: 24px;
    letter-spacing: 4px;
    color: rgb(72,221,197);
    border-bottom: 1px solid rgb(72,221,197);
  }
  ul {
    height:400px;
    width: 100%;
    box-sizing: border-box;
    overflow: hidden;
    padding: 20px 40px 0 40px;
    position: relative;
    li {
      list-style: none;
      width: 100%;
      height: 61px;
      line-height: 60px;
      border-bottom: 1px solid #eff1f1;
      .news-href {
        display: inline-block;
        width: 520px;
        height: 60px;
        vertical-align: middle;
        overflow: hidden;
        font-size: 16px;
        letter-spacing: 1px;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-decoration: none;
        color: #424242;
        text-align: left;
      }
      .news-href:hover {color: $hovercolor}
      .news-time {
        display: inline-block;
        width: 200px;
        height: 60px;
        font-size: 16px;
        letter-spacing: 1px;
        color: #9d9d9d;
        vertical-align: middle;
        text-align: right;
      }
    }
  }
  .list-navgation {
    width: 800px;
    height: 32px;
    text-align: center;
    font-size: 0;
    line-height: 32px;
    padding: 30px 0;
    a {
      display: inline-block;
      vertical-align: middle;
      background-color: rgb(72,221,197);
      width: auto;
      min-width: 32px;
      height: 32px;
      box-sizing: border-box;
      padding: 0 8px;
      font-size: 12px;
      color: #fff;
      border-radius: 3px;
      margin: 0 6px;
      transition: all .15s;
      text-decoration: none;
      cursor: pointer;
    }
    a.active {background: #fe005b;}
  }
}

</style>

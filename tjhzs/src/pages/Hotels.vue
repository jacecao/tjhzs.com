<template>
	<div class="tjhzs-new">
		<header>
			<h3>2016新春韩国行</h3>
		</header>
		<section class="img-group" :style='size'>
			<display-img :isLink="false" :images='images' :size='size'/>
		</section>
		<section class="new-content">
			<p>介于队员在SOLO赛部分取得的优异成绩，冰队在整个全明星赛程结束前就以大积分优势提前锁定全明星冠军，而这个结果与LPL选手的出色发挥也着实有着分不开的联系。(得益于冰队队员的出色发挥，LPL、NA.LCS以及LMS赛区的召唤师们将在2017赛季开启时获得金币加成buff奖励。)
    团队项目的部分则是由火队获得领先，或许他们多是为了报SOLO赛的一箭之仇，火队在团队赛的部分展开了他们猛如烈火一般的反攻，一路高歌猛进，以2：1的比分取得了团队赛的胜利。faker最后一把掏出的火影劫也把整场比赛带入最后的高潮，而且大魔王也想借此机会亲身告诉你，想知道使用劫的时候如何避免被秀吗，你只需要出一个沙漏就可以了。</p>
		</section>
    <span class="bottom-text">全心/全意/服务糖酒</span>
	</div>
</template>

<script>
import DisplayImg from '../components/content/Displayimg'
export default {
  data () {
    return {
      size: {
        height: '500px',
        width: '1000px'
      },
      images: [
        {
          url: '/',
          imgurl: '../../../static/images/content/2.jpg',
          desc: '说明文件来介绍图片的故事'
        },
        {
          url: '/',
          imgurl: '../../../static/images/content/3.jpg',
          desc: '说明文件来介绍图片的故事'
        },
        {
          url: '/',
          imgurl: '../../../static/images/content/4.jpg',
          desc: '说明文件来介绍图片的故事'
        }
      ]
    }
  },
  components: { DisplayImg }
}
</script>

<style scoped lang="scss">
@import '../sass/news.scss';
.tjhzs-new{
	@extend %middlewidth;
	margin: 50px auto;
}
</style>
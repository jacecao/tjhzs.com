// 产品展示数据
// 这里设定一个更目录
// 将所有的新闻图片都储存在news文件夹内
const root = '/beta/static/images/product/'
export default [
  // 顶部显示内容设置
  {
    title: '展示设计',
    logo: root + 'logo_1.png',
    // 备注两行展示
    // 所以这里采用数组
    note: [
      '顶尖设计、创意无敌',
      '彰显品牌气质'
    ],
    show: {
      title: '展台制作案例展示',
      note: [
        '顶尖设计、创意无敌',
        '彰显品牌气质'
      ],
      ad: '贴心设计 —— 匠心制作',
      images: [
        {
          imgurl: root + 'sheji/park_01.jpg',
          desc: '设计效果图和实际制作对比'
        },
        {
          imgurl: root + 'sheji/park_02.jpg',
          desc: '设计效果图和实际制作对比'
        },
        {
          imgurl: root + 'sheji/park_03.jpg',
          desc: '设计效果图和实际制作对比'
        }
      ]
    }
  },
  {
    title: '广告制作',
    logo: root + 'logo_3.png',
    // 备注两行展示
    // 所以这里采用数组
    note: [
      '工匠精神、力求完美',
      '给你卓越的品质'
    ],
    show: {
      title: '广告制作案例展示',
      note: [
        '工匠精神、力求完美',
        '给你卓越的品质'
      ],
      ad: '贴心设计 —— 匠心制作',
      images: [
        {
          imgurl: root + 'ad/park_01.jpg',
          desc: '超大型LED广告'
        },
        {
          imgurl: root + 'ad/park_02.jpg',
          desc: '超大型门楼广告'
        },
        {
          imgurl: root + 'ad/park_03.jpg',
          desc: '超大幅平面广告'
        }
      ]
    }
  },
  {
    title: '活动推广',
    logo: root + 'logo_2.png',
    // 备注两行展示
    // 所以这里采用数组
    note: [
      '聚焦热点、精准推广',
      '只有在线才有关注'
    ],
    show: {
      title: '活动推广案例展示',
      note: [
        '聚焦热点、精准推广',
        '只有在线才有关注'
      ],
      ad: '产品好 —— 更要推广有道',
      images: [
        {
          imgurl: root + 'huodong/park_01.jpg',
          desc: '直接面向销售代理，切入市场更加直接'
        },
        {
          imgurl: root + 'huodong/park_02.jpg',
          desc: '直接面向销售代理，切入市场更加直接'
        },
        {
          imgurl: root + 'huodong/park_03.jpg',
          desc: '直接面向销售代理，切入市场更加直接'
        }
      ]
    }
  }
]

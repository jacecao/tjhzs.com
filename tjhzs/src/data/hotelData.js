// 酒店数据
// 存储所有的酒店数据

// 这里设定一个更目录
// 将所有的新闻图片都储存在hotel文件夹内
const root = '../../../static/images/hotel/'
export default [
  {
    // 识别加载路径,应该来自数据库的id
    id: 'h_4',
    name: '锦江宾馆',
    images: [
      {
        imgurl: root + 'jinjiang/image_01.jpg',
        desc: '酒店全貌、大气高端！'
      },
      {
        imgurl: root + 'jinjiang/image_02.jpg',
        desc: '内部装饰有内涵！'
      },
      {
        imgurl: root + 'jinjiang/image_03.jpg',
        desc: '招商效果好多没朋友！'
      }
    ],
    content: '锦江宾馆酒水商务洽谈制高点，1995年，锦江宾馆荣膺五星，成为中国西南地区首家五星级酒店。1999年被美国优质服务业协会颁授全球服务业至高荣誉“五星钻石奖”。2010年，锦江宾馆荣获被称为我国饭店业最高荣誉奖——金星奖。2012年，蝉联此项殊荣。'
  },
  {
    // 识别加载路径,应该来自数据库的id
    id: 'h_3',
    name: '岷山饭店',
    images: [
      {
        imgurl: root + 'liyuanxiang/image_01.jpg',
        desc: '酒店全貌、大气高端！'
      },
      {
        imgurl: root + 'liyuanxiang/image_02.jpg',
        desc: '内部装饰有内涵！'
      },
      {
        imgurl: root + 'liyuanxiang/image_03.jpg',
        desc: '招商效果好多没朋友！'
      }
    ],
    content: '岷山饭店酒水商务洽谈制高点，1995年岷山饭店荣膺五星，成为中国西南地区首家五星级酒店。1999年被美国优质服务业协会颁授全球服务业至高荣誉“五星钻石奖”。2010年荣获被称为我国饭店业最高荣誉奖——金星奖。2012年，蝉联此项殊荣'
  },
  {
    // 识别加载路径,应该来自数据库的id
    id: 'h_2',
    name: '梨园祥酒店',
    images: [
      {
        imgurl: root + 'minshan/image_01.jpg',
        desc: '酒店全貌、大气高端！'
      },
      {
        imgurl: root + 'minshan/image_02.jpg',
        desc: '内部装饰有内涵！'
      },
      {
        imgurl: root + 'minshan/image_03.jpg',
        desc: '招商效果好多没朋友！'
      }
    ],
    content: '成都梨园祥丽雅阁酒店饮料、食品商务洽谈制高点，成都梨园祥丽雅阁酒店隶属于攀枝花市鑫利商贸有限责任公司，继成功推出“梨园祥·丽雅阁”海鲜中餐品牌之后又推出的精品商务酒店品牌。现已打造成一家融合现代都市时尚与中国民俗特色的精品商务酒店。'
  },
  {
    // 识别加载路径,应该来自数据库的id
    id: 'h_1',
    name: '西藏饭店',
    images: [
      {
        imgurl: root + 'jinjiang/image_01.jpg',
        desc: '酒店全貌、大气高端！'
      },
      {
        imgurl: root + 'jinjiang/image_02.jpg',
        desc: '内部装饰有内涵！'
      },
      {
        imgurl: root + 'jinjiang/image_03.jpg',
        desc: '招商效果好多没朋友！'
      }
    ],
    content: '商业浅谈中的CBD，西藏饭店位于成都北一环路内，步行2分钟即可到达地铁站，交通便利。客房完美地融合了藏式特色与现代艺术，标准间宽敞舒适，采光极好，商务单间设计独具匠心。'
  }
]

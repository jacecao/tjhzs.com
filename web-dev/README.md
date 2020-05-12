### tjhzs-web-v1

#### use scss in style
step 1
```
npm install node-sass --save-dev
npm install sass-loader --save-dev

```

step2，open webpack.base.config.js add next code in loaders

```
    {
      test: /\.scss$/,
      loaders: ["style", "css", "sass"]
    }
```

step3，use scss in styls like this

```

<style lang="scss" scoped>
</style>

```

#### 导航栏触发放回顶部的机制
在顶部导航栏直接在NAVBAR组件中实现返回顶部。
网页内部的网页链接返回顶部触发，直接在指向的网页组件中执行。


#### build
需要改变js文件中 path.js中dataPath的参数需要修改

#### images文件夹使用说明
1. 图片全部添加再images文件夹内
2. header文件夹中添加首页大图背景图片，尺寸参考header_2这张图
3. hotel是所有酒店图片，需要根据不同酒店建立文件夹
4. news是所有新闻图片，需要根据不同新闻建立文件夹
5. navbar是储存导航条背景图


#### 2018-2019主要修复记录

2018-11-8
修复图片显示过程中，图片组缺失时导致视图出现显示故障，本次主要针对酒店组件进行了修复，加入数据类型判断和异常处理。

2018-11-14
对首页酒店列表样式重新设定，更好的支持多行布局

2019-2-3
修复底部版权时间显示，自动获取当前年份

2019-6-18
* 首页展会信息单独制作成模块，方便多行信息展示
* 网页中图片显示比例修改自动适配和模糊背景处理
* 支持图片说明信息多行显示
* 修复UC浏览器中对请求头部信息的处理
* 修复因JSON文件名导致浏览器广告拦截插件拦截产品信息展示数据的行为
* 修正产品页面中类名的命名，防止触发浏览器广告拦截插件

#### 需要下一个版本中解决的问题


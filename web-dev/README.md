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

#### 需要下一个版本中解决的问题

1. 文件名规范

该版本中由于文件名包含一些比较敏感的词，productAd这样的文件命名会导致广告屏蔽插件误伤，这在开发者会误认为文件请求失败，为了避免这样的问题发生，需要对所有的数据传递文件指定规范的命名方式

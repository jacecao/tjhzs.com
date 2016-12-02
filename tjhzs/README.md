# tjhzs

> A Vue.js project

## Build Setup

``` bash
# install dependencies
npm install

# serve with hot reload at localhost:8080
npm run dev

# build for production with minification
npm run build

# run unit tests
npm run unit

# run e2e tests
npm run e2e

# run all tests
npm test
```

For detailed explanation on how things work, checkout the [guide](http://vuejs-templates.github.io/webpack/) and [docs for vue-loader](http://vuejs.github.io/vue-loader).

# use scss in style
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

import Vue from 'vue'
// 引入路由插件和路由配置文件
import VueRouter from 'vue-router'
import routes from './routes.js'
// 引入ajax模块文件
import VueResource from 'vue-resource'
// 引入主模板
import App from './App.vue'
// 将中间件引入到实例中
Vue.use(VueRouter)
Vue.use(VueResource)

const router = new VueRouter({
  base: __dirname,
  mode: 'history',
  routes: routes
})

new Vue({
  router: router,
  // 加入主视图模块
  // 其他模块根据路径按需加载
  render: (h) => h(App)
}).$mount('#app')


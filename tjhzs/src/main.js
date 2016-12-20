import Vue from 'vue'
import VueRouter from 'vue-router'
import routes from './routes.js'
import Main from './layouts/Main'

Vue.use(VueRouter)

const router = new VueRouter({
  base: __dirname,
  mode: 'history',
  routes: routes
})

new Vue({
  router: router,
  // 加入主视图模块
  // 其他模块根据路径按需加载
  render: (h) => h(Main)
}).$mount('#app')


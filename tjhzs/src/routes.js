// 定路由组件
import Home from './pages/Home'
import Product from './pages/product'
import news from './pages/news'
import Hotels from './pages/Hotels'
import About from './pages/About'
import Undefined from './pages/404'

export default [
  {path: '/', component: Home},
  {path: '/product', component: Product},
  {path: '/news/:id', component: news},
  {path: '/hotels/:id', component: Hotels},
  {path: '/about', component: About},
  {path: '*', component: Undefined}
]

// 定路由组件
import Home from './pages/Home'
import Product from './pages/product'
import news from './pages/news'
import Hotels from './pages/Hotels'
import About from './pages/About'
import Undefined from './pages/404'
import test from './pages/test'

export default [
  {path: '/beta/', component: Home},
  {path: '/beta/product', component: Product},
  {path: '/beta/news/:id', component: news},
  {path: '/beta/hotels/:id', component: Hotels},
  {path: '/beta/about', component: About},
  {path: '/beta/test', component: test},
  {path: '/beta/*', component: Undefined}
]

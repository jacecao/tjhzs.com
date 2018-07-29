// 定路由组件
import Home from 'components/pages/Home'
import Product from 'components/pages/product'
import news from 'components/pages/news'
import Hotels from 'components/pages/Hotels'
import About from 'components/pages/About'
import Undefined from 'components/pages/404'

export default [
  {path: '/', component: Home},
  {path: '/product', component: Product},
  {path: '/news/:id', component: news},
  {path: '/hotels/:id', component: Hotels},
  {path: '/about', component: About},
  {path: '/*', component: Undefined}
]

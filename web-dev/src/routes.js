// 定路由组件
import Home from 'components/pages/Home'
import Product from 'components/pages/product'
import News from 'components/pages/news'
import Hotel from 'components/pages/Hotel'
import AutumnHotel from 'components/pages/AutumnHotel'
import About from 'components/pages/About'
import NewsList from 'components/pages/NewsList'
import Undefined from 'components/pages/404'

export default [
  {path: '/', component: Home},
  {path: '/product', component: Product},
  {path: '/news/:id', component: News},
  {path: '/news_list', component: NewsList},
  {path: '/hotel/:id', component: Hotel},
  {path: '/autumn_hotel/:id', component: AutumnHotel},
  {path: '/about', component: About},
  {path: '/*', component: Undefined}
]

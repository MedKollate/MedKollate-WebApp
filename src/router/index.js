import { createRouter, createWebHistory } from 'vue-router'
import DocHome from '../DocHome/DocHome.vue'
import Profilepage from '../Profilepage/Profilepage.vue'
import EditProfile from '../Profilepage/Profilepage1col/EditProfile.vue'
import Settings from '../settings/Settings.vue'
import Logout from '../logout/Logout.vue'
const routes = [
  {
    name: 'DocHome',
    path: '/',
    component: DocHome
  }, 
  {
    name:'Profilepage',
    path:'/Profilepage',
    component: Profilepage
  },
  {
    name:'EditProfile',
    path:'/EditProfile',
    component: EditProfile
  },
  {
    name:'Settings',
    path: '/Settings',
    component: Settings
  },
  {
    name: 'Logout',
    path: '/Logout',
    component: Logout
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router

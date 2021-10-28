import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'

import "@/assets/css/app.css";
import "@/assets/css/_responsive.css"

require('bootstrap');

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router

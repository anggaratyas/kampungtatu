//Import Section 
import Vue from 'vue'
import Router from 'vue-router'
import Home from './pages/Home.vue'
import Login from './pages/Login.vue'
import Store from './store.js'

Vue.use(Router)

// Define ROute 
const router = new Router({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
            meta: {requiresAuth: true }
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        }
    ]
});

// Navigate Guards 
router.beforeEach((to, from, next) => {
    if(to.matched.some(record => record.meta.requiresAuth)) {
        let auth = store.gatters.isAuth
        if(!auth){
            next({name: 'login'})
        } else {
            next()
        }
    } else {
        next()
    }
})


export default router
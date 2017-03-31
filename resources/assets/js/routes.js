import VueRouter from 'vue-router';

import Admin from './components/Admin.vue';
import Login from './components/Login.vue';

import Users from './components/Users.vue';
import Pages from './components/Pages.vue';
import Posts from './components/Posts.vue';
import Products from './components/Products.vue';

import Register from './components/Register.vue';

const routes = [
    {
        path: '/', 
        component: Admin,
        meta: {
            forAuth: true
        }
    },
     {
        path: '/users', 
        component: Users,
        meta: {
            forAuth: true
        }
    },
     {
        path: '/pages', 
        component: Pages,
        meta: {
            forAuth: true
        }
    },
     {
        path: '/posts', 
        component: Posts,
        meta: {
            forAuth: true
        }
    },
    {
        path: '/products', 
        component: Products,
        meta: {
            forAuth: true
        }
    },
    {
        path: '/login', 
        component: Login, 
        meta: {
            forVisitors: true
        }
    },
    {
        path: '/register', 
        component: Register, 
        meta: {
            forVisitors: true
        }
    }
];

const router = new VueRouter({
    // mode: 'history',
    routes
});

router.beforeEach((to, from, next) => {
    console.log('From: ', from, ' to: ', to);
    if (to.matched.some(record => record.meta.forVisitors)) {
        if (Vue.auth.isAuthenticated()) {
            next({
                path: '/'
            })
        } else {
            next()
        }
    } else 
    if (to.matched.some(record => record.meta.forAuth)) {
        if (!Vue.auth.isAuthenticated()) {
            next({
                path: '/login'
            })
        } else {
            next()
        }
    } else {
        next()
    }
    
});

export default router;
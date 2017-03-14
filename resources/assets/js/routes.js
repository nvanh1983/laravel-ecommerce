import VueRouter from 'vue-router';

let routes = [
    { path: '/', name: 'dashboard', component: require('./components/Dashboard.vue') },
    { path: '/users', name: 'users', component: require('./components/Users.vue') },
    { path: '/pages', name: 'pages', component: require('./components/Pages.vue') },
    { path: '/posts', name: 'posts', component: require('./components/Posts.vue') },
    { path: '/products', name: 'products', component: require('./components/Products.vue') }
]

export default new VueRouter({
    mode: 'history',
    routes 
});
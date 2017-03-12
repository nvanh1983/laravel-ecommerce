import VueRouter from 'vue-router';

let routes = [
    { path: '/', name: 'home', component: require('./components/Example.vue') },
    { path: '/users', name: 'users', component: require('./components/Users.vue') }
]

export default new VueRouter({
    mode: 'history',
    routes 
});
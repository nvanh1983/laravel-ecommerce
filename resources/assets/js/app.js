import router from './routes.js';

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.http.options.root = 'https://laravel54-ravuthz.c9users.io';
Vue.http.headers.common['Authorization'] = 'Bearer ' + Vue.auth.getToken();

Vue.component('navbar', require('./components/Navbar.vue'));
Vue.component('page-header', require('./components/PageHeader'));
Vue.component('page-footer', require('./components/PageFooter'));

Vue.component('login', require('./components/Login.vue'));
Vue.component('register', require('./components/Register.vue'));

const app = new Vue({
    el: '#app',
    ready: function() {
        console.log('Init App');
    },
    router
});

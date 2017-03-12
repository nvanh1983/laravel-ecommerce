const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
 
// /ecommerce/node_modules/vue-router/dist/vue-router.js
// ecommerce/node_modules/vue-resource/dist/vue-resource.js

// mix.js('resources/assets/js/app.js', 'public/js')
mix.js([
        // 'public/assets/js/jquery-1.10.2.js',
        // 'public/assets/js/bootstrap.min.js',
        // 'public/assets/js/bootstrap-checkbox-radio.js',
        // 'public/assets/js/chartist.min.js',
        // 'public/assets/js/bootstrap-notify.js',
        // 'public/assets/js/paper-dashboard.js',
        // 'public/assets/js/demo.js',
    
        // 'node_modules/vue-router/dist/vue-router.js',
        // 'node_modules/vue-resource/dist/vue-resource.js',
        'resources/assets/js/app.js'
    ], 'public/js')
    
   .sass('resources/assets/sass/app.scss', 'public/css');






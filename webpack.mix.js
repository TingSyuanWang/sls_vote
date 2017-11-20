let mix = require('laravel-mix');

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

mix.js(['resources/assets/js/app.js',
    'node_modules/slick-carousel/slick/slick.js',
    'node_modules/sweetalert/dist/sweetalert.min.js',
    'node_modules/jquery.marquee/jQuery.Marquee/jquery.marquee.js'], 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .styles(['resources/assets/sass/custom.css', 'node_modules/material-icons/css/material-icons.css'], 'public/css/libs.css');
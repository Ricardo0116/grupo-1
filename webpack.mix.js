const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

mix.styles([
    'resources/sicv/css/normalize.min.css',
    'resources/sicv/css/bootstrap.min.css',
    'resources/sicv/css/font-awesome.min.css',
    'resources/sicv/css/themify-icons.css',
    'resources/sicv/css/pe-icon-7-stroke.min.css',
    'resources/sicv/css/flag-icon.min.css',
    'resources/sicv/css/cs-skin-elastic.css',
    'resources/sicv/css/style.css',

    ], 'public/css/app.css' ).scripts([
    'resources/sicv/js/jquery.min.js',
    'resources/sicv/js/popper.min.js',
    'resources/sicv/js/bootstrap.min.js',
    'resources/sicv/js/jquery.matchHeight.min.js',
    'resources/sicv/js/main.js',
    ], 'public/js/app.js');

mix.styles([
    'resources/sicv/principal/css/bootstrap.min.css',
    'resources/sicv/principal/css/themify-icons.css',
    'resources/sicv/principal/css/slick.css',
    'resources/sicv/principal/css/slick-theme.css',
    'resources/sicv/principal/css/jquery.fancybox.min.css',
    'resources/sicv/principal/css/aos.css',
    'resources/sicv/principal/css/style.css',

    ], 'public/css/index.css' ).scripts([
    'resources/sicv/principal/js/jquery.min.js',
    'resources/sicv/principal/js/bootstrap.min.js',
    'resources/sicv/principal/js/slick.min.js',
    'resources/sicv/principal/js/jquery.fancybox.min.js',
    'resources/sicv/principal/js/jquery.syotimer.min.js',
    'resources/sicv/principal/js/aos.js',
    'resources/sicv/principal/js/gmap.js',
    'resources/sicv/principal/js/script.js',
    'resources/sicv/principal/js/valid.js',
    ], 'public/js/index.js');

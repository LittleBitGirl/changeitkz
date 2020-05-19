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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles(['resources/assets/css/app.css', './node_modules/bulma/bulma.sass'], 'public/custom/css/cstm-app.css');

mix.styles(['resources/assets/css/rating.css'], 'public/custom/css/rating.css');


mix.js('resources/assets/js/custom.js', 'public/custom/js/cstm-app.js').extract(['vue']);

mix.js('resources/assets/js/offer.js',
    'public/custom/js/offer.js');

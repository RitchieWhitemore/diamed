const mix = require('laravel-mix');

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

mix.options({processCssUrls: false})
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/scripts.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/fonts.scss', 'public/css')
    //.sass('resources/sass/bootstrap.scss', 'public/css')
    .version()
    .sourceMaps();

mix.options({processCssUrls: false})
    .js('resources/admin/js/admin.js', 'public/js/admin')
    .sass('resources/admin/sass/admin.scss', 'public/css/admin')
    .version();

mix.browserSync('diamed.loc');

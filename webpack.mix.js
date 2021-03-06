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
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/fonts.scss', 'public/css')
    //.sass('resources/sass/bootstrap.scss', 'public/css')
    .version()
    .sourceMaps();

mix.copy('resources/js/scripts.js', 'public/js')
    .copy('node_modules/simplelightbox/dist/simple-lightbox.jquery.min.js', 'public/js')
    .copy('node_modules/lightslider/dist/js/lightslider.min.js', 'public/js')
    .copy('node_modules/lightslider/dist/css/lightslider.min.css', 'public/css')
    .copy('node_modules/jquery-lazy/jquery.lazy.min.js', 'public/js')
    .copy('node_modules/jquery-lazy/jquery.lazy.plugins.min.js', 'public/js')
    .copyDirectory('node_modules/lightslider/dist/img', 'public/img');

mix.options({processCssUrls: false})
    .js('resources/admin/js/admin.js', 'public/assets/admin/js')
    .sass('resources/admin/sass/admin.scss', 'public/assets/admin/css')
    .copy('node_modules/jquery/dist/jquery.min.js', 'public/assets/admin/js')
    .copy('resources/admin/js/jquery-ui.min.js', 'public/assets/admin/js')
    .copy('resources/admin/css/jquery-ui.min.css', 'public/assets/admin/css')
    .version();

mix.copy('node_modules/tinymce/skins', 'public/css/skins');

mix.copy('node_modules/blueimp-file-upload/img/loading.gif', 'public/assets/admin/css/img')
    .copy('node_modules/blueimp-file-upload/img/progressbar.gif', 'public/assets/admin/css/img')
    .copy('node_modules/blueimp-file-upload/css/jquery.fileupload.css', 'public/assets/admin/css/blueimp')
    .copy('node_modules/blueimp-file-upload/css/jquery.fileupload-ui.css', 'public/assets/admin/css/blueimp')
    .copy('node_modules/blueimp-file-upload/css/jquery.fileupload-noscript.css', 'public/assets/admin/css/blueimp')
    .copy('node_modules/blueimp-file-upload/css/jquery.fileupload-ui-noscript.css', 'public/assets/admin/css/blueimp')
    .copy('node_modules/blueimp-file-upload/js/vendor/jquery.ui.widget.js', 'public/assets/admin/js/blueimp/vendor')
    .copy('node_modules/blueimp-tmpl/js/tmpl.js', 'public/assets/admin/js/blueimp')
    .copy('node_modules/blueimp-load-image/js/load-image.all.min.js', 'public/assets/admin/js/blueimp')
    .copy('node_modules/blueimp-canvas-to-blob/js/canvas-to-blob.min.js', 'public/assets/admin/js/blueimp')
    .copy('node_modules/blueimp-file-upload/js/jquery.iframe-transport.js', 'public/assets/admin/js/blueimp')
    .copy('node_modules/blueimp-file-upload/js/jquery.fileupload.js', 'public/assets/admin/js/blueimp')
    .copy('node_modules/blueimp-file-upload/js/jquery.fileupload-process.js', 'public/assets/admin/js/blueimp')
    .copy('node_modules/blueimp-file-upload/js/jquery.fileupload-image.js', 'public/assets/admin/js/blueimp')
    .copy('node_modules/blueimp-file-upload/js/jquery.fileupload-audio.js', 'public/assets/admin/js/blueimp')
    .copy('node_modules/blueimp-file-upload/js/jquery.fileupload-video.js', 'public/assets/admin/js/blueimp')
    .copy('node_modules/blueimp-file-upload/js/jquery.fileupload-validate.js', 'public/assets/admin/js/blueimp')
    .copy('node_modules/blueimp-file-upload/js/jquery.fileupload-ui.js', 'public/assets/admin/js/blueimp')
    .copy('node_modules/blueimp-file-upload/js/cors/jquery.xdr-transport.js', 'public/assets/admin/js/blueimp/cors');

mix.browserSync('diamed.loc');

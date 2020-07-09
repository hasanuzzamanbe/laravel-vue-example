const mix = require('laravel-mix');

mix.js('resources/js/boot.js', 'public/js/boot.js')
    .js('resources/js/main.js', 'public/js/main.js')
    .sass('resources/scss/public/public.scss', 'public/css/public.css')
    .sass('resources/scss/admin/app.scss', 'public/css/app.css')
    .copy('resources/images', 'public/images');

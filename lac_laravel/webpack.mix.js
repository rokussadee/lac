// webpack.mix.js

let mix = require('laravel-mix');

mix.sass('resources/assets/sass/app.scss', 'public/css')
    .js('resources/js/app.js', 'public/js');

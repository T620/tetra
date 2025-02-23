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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);

mix.js('resources/js/dashboard.js', 'public/js/dashboard.js');
mix.sass('resources/scss/main.scss', 'public/css/main.css');
mix.sass('resources/scss/dashboard.scss', 'public/css/dashboard.css');
mix.sass('resources/scss/welcome.scss', 'public/css/welcome.css');
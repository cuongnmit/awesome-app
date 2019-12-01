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

mix.js('resources/js/app.js', 'public/js')
  .copy('resources/bower_components/jquery/dist/jquery.js', 'public/js')
  .copy('resources/semantic', 'public/semantic')
  .sass('resources/sass/main.scss', 'public/css');

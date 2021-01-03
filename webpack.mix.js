import { js, sass } from 'laravel-mix';

/*
 |--------------------------------------------------------------------------
 | Mix Asset Managementfffff
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

js('resources/js/app.js', 'public/assets/js');



sass('resources/css/home.scss','public/css');

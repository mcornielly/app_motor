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

mix.styles([
	'resources/layout/css/simple-line-icons.min.css',
	'resources/layout/css/style.css',
	// 'resources/datatables/css/datatables.bootstrap4.min.css'
	'resources/datatables/css/bootstrap4.css'
], 'public/css/app.css')
.sass('resources/sass/app.scss', 'public/css/datatables.css')
.scripts([
	'resources/layout/js/jquery.min.js',	
	'resources/layout/js/popper.min.js',	
	'resources/layout/js/bootstrap.min.js',	
	'resources/layout/js/Chart.min.js',
	'resources/layout/js/pace.min.js',	
	'resources/layout/js/template.js',	
	'resources/datatables/js/jquery.dataTables.min.js',
	'resources/datatables/js/dataTables.bootstrap3.min.js'
], 'public/js/template.js')
.js('resources/js/app.js','public/js/app.js');




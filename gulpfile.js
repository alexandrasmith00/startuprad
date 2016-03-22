var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('all.less')
       .scripts([
         "jquery.min.js",
         "bootstrap.min.js",
         "modernizr.min.js",
         "classie.js",
         "sidebar.js"
       ]);

});
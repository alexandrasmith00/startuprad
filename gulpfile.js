var elixir = require('laravel-elixir');

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
      .sass(['admin.scss'], 'public/css/admin.css')
      .sass(['app.scss'], 'public/css/app.css')
      .sass(['landing.scss'], 'public/css/landing.css')
      .scripts([
         "jquery.min.js",
         "bootstrap.min.js",
         "modernizr.min.js",
         "classie.js",
         "sidebar.js"
      ]);
});

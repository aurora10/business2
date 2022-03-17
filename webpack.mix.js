const mix = require('laravel-mix');


    //css bundle
mix.styles([
    './public/web/assets/css/font-awesome.min.css',
    './public/web/assets/css/fonts3860.css',
    './public/web/assets/css/bootstrap.min.css',
    './public/web/assets/js/slick/slick.css',
    './public/web/assets/css/theme3860.css',
    './public/web/assets/css/responsive3860.css',
    './public/web/assets/css/my.css'

    ], 'public/bundle/app.css');
    
    
    //js bundle
    mix.scripts([
      './public/web/assets/js/jquery.min.js',

      './public/web/assets/js/slick/slick.min.js',
      './public/web/assets/js/utils3860.js',
      './public/web/assets/js/main3860.js'
    ], './public/bundle/app.js');
<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'HtmlMinifier'], function(){ 
  
    Route::get('/', function () {
        return view('home');
    });
    
    Route::get('/frontend-development', function () {
        return view('pages/frontend-development');
    });
    Route::get('/backend-development', function () {
        return view('pages/backend-development');
    });
    Route::get('/mobile', function () {
        return view('pages/mobile');
    });
    
    Route::get('/seo', function () {
        return view('pages/seo');
    });
    
    Route::get('/ppc', function () {
        return view('pages/ppc');
    });
    
    Route::get('/facebook-google-ads', function () {
        return view('pages/facebook-google-ads');
    });
    
    Route::get('/social-media-marketing', function () {
        return view('pages/social-media-marketing');
    });
    
    Route::get('/content-marketing', function () {
        return view('pages/content-marketing');
    });
    
    Route::get('/website-design', function () {
        return view('pages/website-design');
    });
    
    Route::get('/portfolio', function () {
        return view('pages/portfolio');
    });
    
    Route::get('/about-us', function () {
        return view('pages/about-us');
    });
    
    Route::get('/case-studies', function () {
        return view('pages/case-studies');
    });
    
    Route::get('/privacy-policies', function () {
        return view('pages/policies');
    });
    
    Route::get('/landing-pages', function () {
        return view('pages/landing-pages');
    });
    
    Route::get('/business-websites', function () {
        return view('pages/business-websites');
    });
    
    Route::get('/e-commerce', function () {
        return view('pages/e-commerce');
    });
    
    Route::get('/custom-cms', function () {
        return view('pages/custom-cms');
    });
    
    
    
    Route::get('/machine-learning', function () {
        return view('pages/work/machine-learning');
    });
    
    Route::get('/life-lines-a-news-aggregation-app', function () {
        return view('pages/work/life-lines-a-news-aggregation-app');
    });
    
    Route::get('/mobile-banking-app', function () {
        return view('pages/work/mobile-banking-app');
    });
    
    
    
    // Route::get('/machine-learning', function () {
    //     return view('pages/work/machine-learning');
    // });
    
    Route::get('/contact', 'ContactController@contact');
    Route::post('/contact', 'ContactController@contactPost');

    


  });

//   Route::get('/blog', function () {
//     return view('pages.blog.blog');
// });



Route::get('/posts', 'PostController@index');
Route::get('/{slug}', 'PostController@show');

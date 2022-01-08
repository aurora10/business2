<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

// Route::get('/portfolio', function () {
//     return view('pages/portfolio');
// });

Route::get('/about-us', function () {
    return view('pages/about-us');
});

Route::get('/case-studies', function () {
    return view('pages/case-studies');
});

Route::get('/privacy-policies', function () {
    return view('pages/policies');
});

Route::get('/machine-learning', function () {
    return view('pages/work/machine-learning');
});

Route::get('/life-lines-a-news-aggregation-app', function () {
    return view('pages/work/life-lines-a-news-aggregation-app');
});


Route::get('/contact', 'ContactController@contact');
Route::post('/contact', 'ContactController@contactPost');

Route::get('/', 'ContactController2@contact');
Route::post('/', 'ContactController2@contactPost');

Route::get('/frontend-development', 'ContactController3@contact');
Route::post('/frontend-development', 'ContactController3@contactPost'); 

Route::get('/backend-development', 'ContactController4@contact');
Route::post('/backend-development', 'ContactController4@contactPost'); 

Route::get('/mobile', 'ContactController5@contact');
Route::post('/mobile', 'ContactController5@contactPost'); 

Route::get('/seo', 'ContactController6@contact');
Route::post('/seo', 'ContactController6@contactPost'); 

Route::get('/ppc', 'ContactController7@contact');
Route::post('/ppc', 'ContactController7@contactPost'); 

Route::get('/gfa', 'ContactController8@contact');
Route::post('/gfa', 'ContactController8@contactPost'); 

Route::get('/smm', 'ContactController9@contact');
Route::post('/smm', 'ContactController9@contactPost'); 

Route::get('/cm', 'ContactController10@contact');
Route::post('/cm', 'ContactController10@contactPost'); 

Route::get('/wd', 'ContactController11@contact');
Route::post('/wd', 'ContactController11@contactPost'); 

Route::get('/portfolio', 'ContactController12@contact');
Route::post('/portfolio', 'ContactController12@contactPost'); 

Route::get('/about', 'ContactController13@contact');
Route::post('/about', 'ContactController13@contactPost');

Route::get('/case', 'ContactController14@contact');
Route::post('/case', 'ContactController14@contactPost');
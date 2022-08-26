<?php

use Illuminate\Support\Facades\Route;

/// M@A routes
Route::get('/sell-your-digital-marketing-agency', function () {
        return view('aquisitions/digital_agency');
    });

Route::get('/sell-your-seo-ppc-agency', function () {
        return view('aquisitions/seo-ppc-agency');
    });

Route::get('/sell-your-it-company-technology-business', function () {
        return view('aquisitions/it-company-technology-business');
    });

Route::get('/sell-your-it-support-company', function () {
        return view('aquisitions/it-support-company');
    });

Route::get('/sell-your-it-security-company', function () {
        return view('aquisitions/it-security-company');
    });

Route::get('/sell-your-web-hosting-company', function () {
        return view('aquisitions/web-hosting-company');
    });

Route::get('/sell-your-tier-3-data-centre-company', function () {
        return view('aquisitions/tier-3-data-centre-company');
    });

Route::get('/sell-your-real-estate-agency', function () {
        return view('aquisitions/real_estate');
    });
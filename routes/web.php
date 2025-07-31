<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ServiceController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'Home')->name('Home');
});

//Services
Route::prefix('Service')->group(function () {
    Route::controller(ServiceController::class)->group(function () {
        Route::get('/mobile-app', 'serviceMobileApp')->name('serviceMobileApp');
        Route::get('/MT5', 'serviceMT5')->name('serviceMT5');
        Route::get('/MT4', 'serviceMT4')->name('serviceMT4');
        Route::get('/Forex', 'serviceForex')->name('serviceForex');
        Route::get('/Indices', 'serviceIndices')->name('serviceIndices');
        Route::get('/PreciousMetal', 'serviceMetal')->name('serviceMetal');
        Route::get('/Stock', 'serviceStock')->name('serviceStock');
        Route::get('/CryptoCurrency', 'serviceCrypto')->name('serviceCrypto');
        Route::get('/PAMM', 'servicePAMM')->name('servicePAMM');
    });
});


//Pages
Route::prefix('Pages')->group(function () {
    Route::controller(pagesController::class)->group(function () {
        Route::get('/about', 'aboutus02')->name('about');
        Route::get('/contact', 'contact')->name('contact');
    });
});

Route::prefix('Account')->group(function () {
    Route::controller(pagesController::class)->group(function () {
        Route::get('/stpStandard', 'stpStandard')->name('stpStandard');
        Route::get('/ecnStandard', 'ecnStandard')->name('ecnStandard');
    });
});

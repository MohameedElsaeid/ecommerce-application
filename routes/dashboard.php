<?php

use Illuminate\Support\Facades\Route;

Route::namespace('DashboardController')->group(function () {
    Route::get('dashboard/', 'HomeController@index');

    Route::prefix('brands')->group(function () {
        Route::get('/', 'BrandController@index')->name('brand.index');

        Route::get('/create', 'BrandController@create')->name('brand.create');
        Route::post('/store', 'BrandController@store')->name('brand.store');

        Route::get('/edit/{brand}', 'BrandController@edit')->name('brand.edit');
        Route::put('/update', 'BrandController@update')->name('brand.update');

    });
});

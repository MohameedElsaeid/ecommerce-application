<?php

use Illuminate\Support\Facades\Route;

Route::namespace('DashboardController')->group(function () {
    Route::get('//', 'HomeController@index');

    Route::prefix('brands')->group(function () {
        Route::get('/', 'BrandController@index')->name('brand.index');

        Route::get('/create', 'BrandController@create')->name('brand.create');
        Route::post('/store', 'BrandController@store')->name('brand.store');

        Route::get('/edit/{brand_id}', 'BrandController@edit')->name('brand.edit');
        Route::put('/update', 'BrandController@update')->name('brand.update');

    });

    Route::prefix('categories')->group(function (){
        Route::get('/', 'CategoryController@index')->name('category.index');
        Route::get('/create', 'CategoryController@create')->name('category.create');

    });
});

<?php

use Illuminate\Support\Facades\Route;

Route::namespace('DashboardController')->group(function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/home', 'HomeController@index');

        Route::prefix('brands')->group(function () {
            Route::get('/', 'BrandController@index')->name('brand.index');
            Route::get('/create', 'BrandController@create')->name('brand.create');
            Route::post('/store', 'BrandController@store')->name('brand.store');
            Route::get('/edit/{brand}', 'BrandController@edit')->name('brand.edit');
            Route::put('/update', 'BrandController@update')->name('brand.update');
        });

        Route::group(['prefix' => 'categories'], function () {
            Route::get('/', 'CategoryController@index')->name('category.index');
            Route::get('/create', 'CategoryController@create')->name('category.create');
            Route::post('/store', 'CategoryController@store')->name('category.store');
        });


    });

    Route::prefix('categories')->group(function (){
        Route::get('/', 'CategoryController@index')->name('category.index');
        Route::get('/create', 'CategoryController@create')->name('category.create');
        Route::post('/store', 'CategoryController@store')->name('category.store');

    });

   

    Route::prefix('products')->group(function (){
        Route::get('/', 'ProductController@index')->name('product.index');
    
    });

    Route::prefix('users')->group(function (){
        Route::get('/', 'UserController@index')->name('user.index');
    
    });
});

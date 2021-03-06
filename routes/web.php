<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Mail\SubscribeEmail;
use Illuminate\Support\Facades\Mail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web-users" middleware group. Now create something great!
|
*/
Route::namespace('WebsiteController')->group(function () {
//    Route::middleware('auth:web')->group(function () {
    Route::get('/', 'HomePageController@index');
    Route::get('/product/{id}', 'HomePageController@show')->name('product.byId');
    Route::get('send/email/{email}', 'SendEmailController@send')->name('sendEmail');
//    });
});
Auth::routes();

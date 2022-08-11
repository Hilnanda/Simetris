<?php

use App\User;
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

// User
Route::namespace('User')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about', 'AboutUsController@index')->name('about');
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::get('/faq', 'FaqController@index')->name('faq');
    Route::get('/pricing', 'PricingController@index')->name('pricing');
    Route::get('/products', 'ProductsController@index')->name('products');
    Route::get('/portofolio', 'WorkController@index')->name('portofolio');
});

Auth::routes();

Route::namespace('admin')
->middleware('auth')->group(function () {
    // home
    // carousel
    Route::get('/home-admin', 'AdminHomeController@indexCarousel')->name('home-carousel');
    Route::get('/edit-carousel/{id}', 'AdminHomeController@editCarousel')->name('edit-carousel');
    Route::post('/add-carousel', 'AdminHomeController@storeCarousel')->name('add-carousel');
    Route::get('/delete-carousel/{id}', 'AdminHomeController@destroyCarousel');
    Route::post('/update-carousel', 'AdminHomeController@updateCarousel');

    // feature
    Route::get('/home-feature', 'AdminHomeController@indexFeature')->name('home-feature');
    Route::get('/edit-feature', 'AdminHomeController@editFeature')->name('edit-feature');
});

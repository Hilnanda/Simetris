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
    Route::get('/service', 'ServiceController@index')->name('service');
    Route::get('/detail/{id}', 'DetailController@index');
});

Route::post('/add-message', 'admin\MessageController@store')->name('add-message');

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
    Route::get('/edit-feature/{id}', 'AdminHomeController@editFeature')->name('edit-feature');
    Route::post('/add-feature', 'AdminHomeController@storeFeature')->name('add-feature');
    Route::get('/delete-feature/{id}', 'AdminHomeController@destroyFeature');
    Route::post('/update-feature', 'AdminHomeController@updateFeature');

    // article
    Route::get('/home-article', 'ArticleController@index')->name('home-article');
    Route::get('/edit-article/{id}', 'ArticleController@edit')->name('edit-article');
    Route::post('/add-article', 'ArticleController@store')->name('add-article');
    Route::get('/delete-article/{id}', 'ArticleController@destroy');
    Route::post('/update-article', 'ArticleController@update');

    // Category
    Route::get('/home-category', 'CategoryController@index')->name('home-category');
    Route::get('/edit-category/{id}', 'CategoryController@edit')->name('edit-category');
    Route::post('/add-category', 'CategoryController@store')->name('add-category');
    Route::get('/delete-category/{id}', 'CategoryController@destroy');
    Route::post('/update-category', 'CategoryController@update')->name('update-category');
    
    // Category Portofolio
    Route::get('/home-category-portofolio', 'CategoryPortofolioController@index')->name('home-category-portofolio');
    Route::get('/edit-category-portofolio/{id}', 'CategoryPortofolioController@edit')->name('edit-category-portofolio');
    Route::post('/add-category-portofolio', 'CategoryPortofolioController@store')->name('add-category-portofolio');
    Route::get('/delete-category-portofolio/{id}', 'CategoryPortofolioController@destroy');
    Route::post('/update-category-portofolio', 'CategoryPortofolioController@update')->name('update-category-portofolio');

    // Sosmed
    Route::get('/home-sosmed', 'SosmedController@index')->name('home-sosmed');
    Route::get('/edit-sosmed/{id}', 'SosmedController@edit')->name('edit-sosmed');
    Route::post('/add-sosmed', 'SosmedController@store')->name('add-sosmed');
    Route::get('/delete-sosmed/{id}', 'SosmedController@destroy');
    Route::post('/update-sosmed', 'SosmedController@update')->name('update-sosmed');

    // Portofolio
    Route::get('/home-portofolio', 'PortofolioController@index')->name('home-portofolio');
    Route::get('/edit-portofolio/{id}', 'PortofolioController@edit')->name('edit-portofolio');
    Route::post('/add-portofolio', 'PortofolioController@store')->name('add-portofolio');
    Route::get('/delete-portofolio/{id}', 'PortofolioController@destroy');
    Route::post('/update-portofolio', 'PortofolioController@update')->name('update-portofolio');

    // Team
    Route::get('/home-team', 'TeamController@index')->name('home-team');
    Route::get('/edit-team/{id}', 'TeamController@edit')->name('edit-team');
    Route::post('/add-team', 'TeamController@store')->name('add-team');
    Route::get('/delete-team/{id}', 'TeamController@destroy');
    Route::post('/update-team', 'TeamController@update')->name('update-team');

    // About Us
    Route::get('/home-about_us', 'AboutUsController@index')->name('home-about_us');
    Route::get('/edit-about_us/{id}', 'AboutUsController@edit')->name('edit-about_us');
    Route::post('/add-about_us', 'AboutUsController@store')->name('add-about_us');
    Route::get('/delete-about_us/{id}', 'AboutUsController@destroy');
    Route::post('/update-about_us', 'AboutUsController@update')->name('update-about_us');

    // Contact Us
    Route::get('/home-contact_us', 'ContactUsController@index')->name('home-contact_us');
    Route::get('/edit-contact_us/{id}', 'ContactUsController@edit')->name('edit-contact_us');
    Route::post('/add-contact_us', 'ContactUsController@store')->name('add-contact_us');
    Route::get('/delete-contact_us/{id}', 'ContactUsController@destroy');
    Route::post('/update-contact_us', 'ContactUsController@update')->name('update-contact_us');

    // Message
    Route::get('/home-message', 'MessageController@index')->name('home-message');
    Route::get('/delete-message/{id}', 'MessageController@destroy');
    Route::get('/markAsRead', function() {
        auth()->user()->unreadNotifications->markAsRead();
    });
});

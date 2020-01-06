<?php

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

Route::get('/', 'HomeController@index')->name('main');

Route::get('/stock', 'HomeController@stock')->name('stock');

Route::get('/info', 'HomeController@info')->name('info');

Route::get('/team', 'HomeController@team')->name('team');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/licenses', 'HomeController@license')->name('license');

Route::get('/reviews', 'HomeController@review')->name('review');

Route::get('/articles', 'HomeController@article')->name('article');

Route::get('/sterilization', 'HomeController@sterilization')->name('sterilization');

Route::get('/services', 'HomeController@services')->name('services');

Route::get('/service', 'HomeController@service')->name('service');

Route::get('/price', 'HomeController@price')->name('price');

Route::get('/vacancies', 'HomeController@vacancy')->name('vacancy');

Route::get('/faq', 'HomeController@faq')->name('faq');

Auth::routes();

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        'namespace' => 'Admin',
        'middleware' => 'auth'
    ],
    function () {
        Route::get('/', 'HomeController@index')->name('home');

        Route::resource('categories', 'CategoryController');
    }
);

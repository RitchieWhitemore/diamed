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

Route::get('/promotions', 'HomeController@promotion')->name('promotion');

Route::get('/info', 'HomeController@info')->name('info');

Route::get('/team', 'HomeController@team')->name('team');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/licenses', 'HomeController@license')->name('license');

Route::get('/reviews', 'HomeController@review')->name('review');

Route::post('/reviews', 'HomeController@sendReview')->name('sendReview');

Route::get('/sterilization', 'HomeController@sterilization')->name('sterilization');

Route::group(['prefix' => 'services', 'as' => 'services.'], function () {
    Route::get('/', 'ServiceController@index')->name('index');
    Route::get('/{slug}', 'ServiceController@view')->name('view');
    Route::get('/{slug}/prices', 'ServiceController@prices')->name('price');
});

Route::group(['prefix' => 'articles', 'as' => 'articles.'], function () {
    Route::get('/', 'ArticleController@index')->name('index');
    Route::get('/{slug}', 'ArticleController@view')->name('view');
});

Route::get('/vacancies', 'HomeController@vacancy')->name('vacancy');

Route::get('/faq', 'QuestionController@index')->name('faq');
Route::post('/faq', 'QuestionController@store');

Route::post('/signup', 'HomeController@signup')->name('signup');

Auth::routes([
    'register' => false,
    'reset' => false,
]);

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
        Route::resource('pages', 'PageController');

        Route::pattern('shortPriceType', 'pages|services');

        Route::group(['prefix' => '{shortPriceType}/{owner}', 'as' => 'short_prices.'], function () {
            Route::post('short_prices/{price}/up', 'ShortPriceController@up')->name('short_prices.up');
            Route::post('short_prices/{price}/down', 'ShortPriceController@down')->name('short_prices.down');
            Route::resource('short_prices', 'ShortPriceController');
        });

        Route::resource('services', 'ServiceController');

        Route::group(['prefix' => 'services/{service}', 'as' => 'services.'], function () {
            Route::post('prices/{price}/up', 'PriceController@up')->name('prices.up');
            Route::post('prices/{price}/down', 'PriceController@down')->name('prices.down');
            Route::resource('prices', 'PriceController');
        });

        Route::post('sliders/{slider}/up', 'SliderController@up')->name('sliders.up');
        Route::post('sliders/{slider}/down', 'SliderController@down')->name('sliders.down');
        Route::resource('sliders', 'SliderController');

        Route::post('specialists/{specialist}/up', 'SpecialistController@up')->name('specialists.up');
        Route::post('specialists/{specialist}/down', 'SpecialistController@down')->name('specialists.down');
        Route::post('specialist/media', 'SpecialistController@storeMedia')->name('specialists.storeMedia');
        Route::resource('specialists', 'SpecialistController');

        Route::get('specialists/{specialist}/upload', 'SpecialistController@getFiles')->name('specialist.files');
        Route::put('specialists/{specialist}/upload', 'SpecialistController@upload')->name('specialist.upload');
        Route::delete('specialists/upload/{file}', 'SpecialistController@deleteFile')->name('specialist.deleteFile');

        Route::post('questions/{question}/up', 'QuestionController@up')->name('questions.up');
        Route::post('questions/{question}/down', 'QuestionController@down')->name('questions.down');
        Route::resource('questions', 'QuestionController');

        Route::resource('reviews', 'ReviewController');
    }
);

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

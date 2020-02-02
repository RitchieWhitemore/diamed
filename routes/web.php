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

use UniSharp\LaravelFilemanager\Middlewares\CreateDefaultFolder;
use UniSharp\LaravelFilemanager\Middlewares\MultiUser;

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


        Route::post('sliders/{slider}/up', 'SliderController@up')->name('sliders.up');
        Route::post('sliders/{slider}/down', 'SliderController@down')->name('sliders.down');
        Route::resource('sliders', 'SliderController');

        Route::post('specialists/{specialist}/up', 'SpecialistController@up')->name('specialists.up');
        Route::post('specialists/{specialist}/down', 'SpecialistController@down')->name('specialists.down');
        Route::post('specialist/media', 'SpecialistController@storeMedia')->name('specialists.storeMedia');
        Route::resource('specialists', 'SpecialistController');

        Route::post('questions/{question}/up', 'QuestionController@up')->name('questions.up');
        Route::post('questions/{question}/down', 'QuestionController@down')->name('questions.down');
        Route::resource('questions', 'QuestionController');
    }
);

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    $middleware = [CreateDefaultFolder::class, MultiUser::class];
    $as = 'unisharp.lfm.';
    $namespace = '\\UniSharp\\LaravelFilemanager\\Controllers\\';

    Route::group(compact('middleware', 'as', 'namespace'), function () {

        // display main layout
        Route::get('/', [
            'uses' => 'LfmController@show',
            'as' => 'show',
        ]);

        // display integration error messages
        Route::get('/errors', [
            'uses' => 'LfmController@getErrors',
            'as' => 'getErrors',
        ]);

        // upload
        Route::any('/upload', [
            'uses' => 'UploadController@upload',
            'as' => 'upload',
        ]);

        // list images & files
        Route::get('/jsonitems', [
            'uses' => 'ItemsController@getItems',
            'as' => 'getItems',
        ]);

        Route::get('/move', [
            'uses' => 'ItemsController@move',
            'as' => 'move',
        ]);

        Route::get('/domove', [
            'uses' => 'ItemsController@domove',
            'as' => 'domove'
        ]);

        // folders
        Route::get('/newfolder', [
            'uses' => 'FolderController@getAddfolder',
            'as' => 'getAddfolder',
        ]);

        // list folders
        Route::get('/folders', [
            'uses' => 'FolderController@getFolders',
            'as' => 'getFolders',
        ]);

        // crop
        Route::get('/crop', [
            'uses' => 'CropController@getCrop',
            'as' => 'getCrop',
        ]);
        Route::get('/cropimage', [
            'uses' => 'CropController@getCropimage',
            'as' => 'getCropimage',
        ]);
        Route::get('/cropnewimage', [
            'uses' => 'CropController@getNewCropimage',
            'as' => 'getCropimage',
        ]);

        // rename
        Route::get('/rename', [
            'uses' => 'RenameController@getRename',
            'as' => 'getRename',
        ]);

        // scale/resize
        Route::get('/resize', [
            'uses' => 'ResizeController@getResize',
            'as' => 'getResize',
        ]);
        Route::get('/doresize', [
            'uses' => 'ResizeController@performResize',
            'as' => 'performResize',
        ]);

        // download
        Route::get('/download', [
            'uses' => 'DownloadController@getDownload',
            'as' => 'getDownload',
        ]);

        // delete
        Route::get('/delete', [
            'uses' => 'DeleteController@getDelete',
            'as' => 'getDelete',
        ]);

        Route::get('/demo', 'DemoController@index');
    });
});

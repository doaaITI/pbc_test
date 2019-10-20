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
//Clear Cache facade value:

Route::get('admin/notify', function () {
    return view('admin.options.create');
});

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Re optimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Re optimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});


Auth::routes();
Route::get('/', function () {
return redirect('/admin');
});





Route::get('/home', 'HomeController@index')->name('home');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageLocalizationController@switchLang']);

Route::get('users/logout', 'Auth\LoginController@userLogout')->name('users.logout');


Route::prefix('admin')->group(function () {


        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

        Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

        Route::get('/', 'AdminController@index')->name('admin.dashboard');

    });

Route::get('dashboard', 'AdminController@index');

Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => ['auth']], function () {

    Route::group(['as' => 'services.', 'prefix' => 'services'] , function () {

        Route::get('all', 'UserServiceController@index')->name('all');
        Route::get('/add', 'UserServiceController@addService')->name('add');
        Route::post('/store', 'UserServiceController@storeService')->name('store');

       });
    });

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth:admin']], function () {
    //admin routes

Route::group(['as' => 'user.', 'prefix' => 'user'] , function () {
    Route::get('all', 'UserController@index')->name('all');
    Route::get('/create', 'UserController@create')->name('create');

    Route::post('/store', 'UserController@store')->name('store');

    Route::get('/edit/{id}', 'UserController@edit')->name('edit');

    Route::patch('/update/{id}', 'UserController@update')->name('update');
    Route::get('/show/{id}', 'UserController@showOrder')->name('show');
    Route::delete('/destroy/{id}', 'UserController@destroy')->name('destroy');
});


Route::group(['as' => 'category.', 'prefix' => 'category'] , function () {
    Route::get('all', 'CategoryController@index')->name('all');
    Route::get('/create', 'CategoryController@create')->name('create');

    Route::post('/store', 'CategoryController@store')->name('store');

    Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');

    Route::post('/update/{id}', 'CategoryController@update')->name('update');

    Route::delete('/destroy/{id}', 'CategoryController@destroy')->name('destroy');
});



Route::group(['as' => 'services.', 'prefix' => 'services'] , function () {
    Route::get('all', 'ServiceController@index')->name('all');

    Route::get('/edit/{id}', 'ServiceController@edit')->name('edit');

    Route::post('/update/{id}', 'ServiceController@update')->name('update');

    Route::delete('/destroy/{id}', 'ServiceController@destroy')->name('destroy');
});


});


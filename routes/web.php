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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::prefix('home')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::prefix('top-up')->group(function () {
        Route::get('/', 'HomeController@index_topup')->name('top-up');
        Route::get('/isi', 'HomeController@isi_topup')->name('isi_top-up');
    });
    Route::prefix('voucher')->group(function () {
        Route::get('/', 'HomeController@index_voucher')->name('voucher');
        Route::get('/isi', 'HomeController@isi_voucher')->name('isi_voucher');
    });
});


Route::group(['prefix' => 'apps', 'middleware' => 'desktop', 'as' => 'apps.'], function()
{
    Route::get('/', 'AppsController@index')->name('index');
    //Auth
    Route::post('/login','Apps\LoginController@login')->name('login');
    Route::post('/register','Apps\LoginController@login')->name('register');
    Route::post('/logout', 'Apps\LoginController@logout')->name('logout');
    Route::post('/password/reset', 'Apps\LoginController@reset')->name('reset');
    Route::post('/password/email', 'Apps\LoginController@reset')->name('email');

    Route::get('/login',function(){
        return view('apps.auth.login');
    });
    Route::get('/register',function(){
        return view('apps.auth.register');
    });
    Route::get('password/reset',function(){
        return view('apps.auth.reset');
    })->name('password.request');
});
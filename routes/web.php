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
<<<<<<< HEAD
Route::group(['prefix' => 'apps',  'middleware' => 'apps'], function()
{
=======

Route::middleware('desktop')->prefix('apps')->group(function () {
>>>>>>> dc66eba75a566a53404b6b3e2c46b083115ea367
    Route::get('/', 'AppsController@index')->name('index');
    Route::get('/login',function(){
        return view('apps.auth.login');
    });
    Route::get('/register',function(){
        return view('apps.auth.register');
    });
    Route::get('/reset',function(){
        return view('apps.auth.reset');
    });
});
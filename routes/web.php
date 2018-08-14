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

Route::get('/top-up', function () {
    return view('top-up');
});
Route::get('/reset', function () {
    return view('auth.passwords.reset');
});
Route::get('/reset2', function () {
    return view('auth.passwords.reset2');
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

//Route::get('/home', 'HomeController@index')->name('home');

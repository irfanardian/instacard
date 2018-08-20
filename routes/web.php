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


Route::group(['prefix' => 'apps', 'as' => 'apps.'], function()
{
    Route::get('/', 'AppsController@index')->name('index');
    Route::get('/menu/{id}',function($id){
        return view('apps.menu',compact('id'));
    })->name('name');
    Route::prefix('voucher')->group(function(){
        Route::get('/room/{id}','AppsController@room')->name('room');
        Route::get('/konfimasi/{id}','AppsController@konfirmasi')->name('konfirmasi')->middleware('guest');
    });
    

    //Auth
    Route::post('/login','Apps\LoginController@login')->name('login');
    Route::post('/register','Apps\RegisterController@register')->name('register');
    Route::post('/logout', 'Apps\LoginController@logout')->name('logout');
<<<<<<< HEAD
    Route::post('/password/reset', 'Apps\LoginController@reset')->name('reset');
    Route::post('/password/email', 'Apps\LoginController@reset')->name('email');
=======
    Route::post('/password/reset', 'Apps\ResetPasswordController@reset')->name('password.reset');
    Route::post('/password/email', 'Apps\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

>>>>>>> 06ecb7d22f2f57d0e96fb9e56a9ac9986702ec5e
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
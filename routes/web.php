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
})->name('index');


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
        Route::get('/konfimasi/{id}','AppsController@konfirmasi')->name('konfirmasi');
    });
    Route::get('/user','AppsController@user')->name('user');

    //Auth
    Route::post('/login','Apps\LoginController@login');
    Route::post('/register','Apps\RegisterController@register');
    Route::post('/logout', 'Apps\LoginController@logout')->name('logout');
    Route::post('/password/reset', 'Apps\ResetPasswordController@reset')->name('password.reset');
    Route::post('/password/email', 'Apps\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/login', 'Apps\LoginController@showLoginForm')->name('login');
    Route::get('/register', 'Apps\RegisterController@showRegistrationForm')->name('register');
    Route::get('password/reset', 'Apps\ForgotPasswordController@showLinkRequestForm')->name('password.request');
});
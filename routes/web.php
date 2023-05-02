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

Route::GET('/', function () {
    return view('index');
});
Route::GET('/wallets', 'WalletController@index')->name('wallets');
Route::POST('/wallets/form', 'WalletController@form')->name('submitform');
Route::GET('/wallets/submission/failed', 'WalletController@qrcode');

Auth::routes();

// Route::GET('/home', 'HomeController@index')->name('home');

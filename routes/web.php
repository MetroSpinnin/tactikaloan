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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/loan', 'PageController@loanPage');
Route::get('/investors', 'PageController@investorsPage');

Route::resource('loanapplication', 'LoansApplicationController');

//paystack pay route
Route::post('/pay', 'PaystackController@redirectToGateway')->name('pay');
//paystack callback route
Route::get('/paystack/callback', 'PaystackController@handleGatewayCallback');

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::group(['prefix' => 'admin'], function(){
//    Route::resource('cls', '\App\Http\Controllers\Admin\ClientController');
//});

//Route::resource('client', '\App\Http\Controllers\Admin\ClientController');
//
//
//Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
//    Route::resource('cars', '\App\Http\Controllers\Admin\ClientController');
//});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);


Route::resource('clients', '\App\Http\Controllers\Admin\ClientController');
Route::resource('credits', '\App\Http\Controllers\Admin\CreditController');

Route::get('/', 'WelcomeController@index');



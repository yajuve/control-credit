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

Route::resource('clients', '\App\Http\Controllers\Admin\ClientController');

Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
//
//
//Route::get('/test', 'HomeController@test');

Route::get('/list', [
    'as' => 'listLink',
    'uses' => 'LinkController@listLink'
]);

Route::get('/show/{id}', [
    'as' => 'showLink',
    'uses' => 'LinkController@showLink'
]);

Route::get('/add', [
    'as' => 'addLink',
    'uses' => 'LinkController@addLink'
]);

Route::post('/valid', [
    'as' => 'validLink',
    'uses' => 'LinkController@validLink'
]);

Route::get('/json', [
    'as' => 'json',
    'uses' => 'LinkController@allJson'
]);

Route::get('/jsonp', [
    'as' => 'jsonp',
    'uses' => 'LinkController@allJsonP'
]);


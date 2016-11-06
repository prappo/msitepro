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

Route::get('/', function () {
    return view('site.index');
});


Route::get('/prappo','Prappo@index');
Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/profile','UserController@profile');
Route::get('/verification','VerificationController@index');
Route::get('/account/verify','VerificationController@code');
Route::post('/account/verify','VerificationController@active');
Route::post('/profile/update/account','UserController@profileUpdate');
Route::post('/profile/update/password','UserController@passwordUpdate');
Route::post('/profile/update/image','UserController@updateImage');
Route::post('/image/upload','UserController@imageUpdate');

Route::resource('contact','ContactController');

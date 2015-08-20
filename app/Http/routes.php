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

/*
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

//homepage
Route::get('/', 'HomeController@index');

//News page
Route::get('news', 'NewsController@index');
Route::get('news/{id}', 'NewsController@show');

//Products page
Route::get('series', 'SeriesController@index');
Route::get('series/{series_id}', 'SeriesController@show');
Route::get('products/{id}', 'ProductController@show');
Route::get('functionalities', 'FunctionalityController@index');
Route::get('functionalities/{functionality_id}', 'FunctionalityController@show');

//Brand page
Route::get('brand', 'BrandController@index');
Route::get('brand/doctor', 'BrandController@doctor');
Route::get('brand/skincare', 'BrandController@skincare');
Route::get('brand/award', 'BrandController@award');
Route::get('brand/agent', 'BrandController@agent');

Route::get('ask', function() {
	return view('brand');
});
/*
Route::get('contacts/create', 'ContactController@create');
Route::post('contacts', 'ContactController@store');
*/
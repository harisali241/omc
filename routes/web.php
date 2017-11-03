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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/customize', 'HomeController@custom');

Route::get('/logout', function(){

	Auth::logout();
	return redirect('/');

});

Route::middleware(['auth'])->group(function(){

	Route::resource('carousel','carouselController'); //For Carousel
	Route::get('/home/text' , 'HomeController@text');
	Route::post('/home/text-store' , 'HomeController@store');

});
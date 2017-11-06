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
use App\Models\carousel;
use App\Models\aboutus;
use App\Models\contact;


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/aboutUs', function(){

	$carousel = carousel::where('active' , 1)
				->OrderBy('sort_order', 'asc')
				->get();
	$about = aboutus::all()[0];
	return view('pages.aboutus.aboutUs', compact('carousel' ,'about'));

});

Route::resource('enquiryForm','enquiryFormController');

Route::get('/products', function(){

	$carousel = carousel::where('active' , 1)
				->OrderBy('sort_order', 'asc')
				->get();
	return view('pages.', compact('carousel'));

});
Route::get('/ourClients', function(){

	$carousel = carousel::where('active' , 1)
				->OrderBy('sort_order', 'asc')
				->get();
	return view('pages.', compact('carousel'));

});
Route::get('/contactUs', function(){

	$carousel = carousel::where('active' , 1)
				->OrderBy('sort_order', 'asc')
				->get();
	$contact = contact::all()[0];
	return view('pages.contactus.contactus', compact('carousel' ,'contact'));

});



Route::get('/logout', function(){

	Auth::logout();
	return redirect('/');

});

Route::middleware(['auth'])->group(function(){

	Route::get('/customize', 'HomeController@custom');
	Route::get('/home/text' , 'HomeController@text');
	Route::post('/home/text-store' , 'HomeController@store');
	Route::get('/home/images' , 'HomeController@images');
	Route::post('/home/image_create' , 'HomeController@addImage');
	Route::get('/home/viewImages' , 'HomeController@viewImages');
	Route::post('/home/image_update_{id}' , 'HomeController@updateImages');
	Route::post('/home/image_delete_{id}' , 'HomeController@deleteImages');


	Route::resource('carousel','carouselController'); //For Carousel
	Route::resource('about','aboutusController'); //For About US
	Route::resource('contact','contactController'); //For About US

});
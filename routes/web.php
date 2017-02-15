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

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/',"PagesController@getHomePage")->name('homePage');
Route::get('/contactus',"PagesController@getContactus")->name('contactUs');
Route::get('/aboutus',"PagesController@getAboutus")->name('aboutUs');
Route::get('/companyoverview',"PagesController@getCompanyOverview")->name('companyOverview');
Route::get('/missionandvision',"PagesController@getMissionAndVision")->name('missionAndVision');
Route::get('/management',"PagesController@getManagement")->name('management');
Route::get('/events',"PagesController@getEvents")->name('events');

Route::post('/lang',"PagesController@setSession");


// ----------------admin routes--------------------//

Route::group(['prefix' => 'admin'], function () 
{
	Route::resource("sliders","SliderController");
	Route::resource("contacts","ContactController");
	Route::resource("abouts","AboutController");
	Route::resource("managements","ManagementController");
	Route::resource("events","EventController");
	//Route::resource("eventimages","EventImageController");
	Route::get('/eventimages/{id}',"EventImageController@showImages")->name("eventimages");
	Route::post('/eventimages', "EventImageController@store")->name("eventimagesstore");
});
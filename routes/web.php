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
Route::post('/lang',"PagesController@setSession");



// ----------------admin routes--------------------//


Route::resource("sliders","SliderController");
Route::resource("contacts","ContactController");
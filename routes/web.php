<?php
use App\Event;
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

// Route::get('/event/{id}', function($id) {
//     //
//      $event=Event::find($id);        

//      return view('pages.events',compact('event'));
// });

Route::get('/events',"PagesController@getEvents")->name('events');
Route::get('/events/{id}',"PagesController@getEventSingle")->name('eventsingle');
//Route::post('/events',"PagesController@getEvents")->name('events');

Route::get('/howtotender',"PagesController@getHowtoTender")->name('howToTender');
Route::get('/tendertermsandconditions',"PagesController@getTenderTermsAndConditions")->name('tenderTermsAndConditions');
Route::get('latesttenders',"PagesController@getLatestTenders")->name('latestTenders');


Route::post('latesttenders', "PagesController@getFileDownload")->name('filedownload');

Route::post('/lang',"PagesController@setSession");

// Route::get('storage/tender_docs/{filename}',function($filename){

// 		$filepath= storage_path('tender_docs/').$filename;
// 		return Response::download($filepath,$filename,['Content-Length : '.filesize($filepath)]);
// 	})->name('adminTenderDownload');



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

	Route::get('/eventimages/delete/{imageid}', "EventImageController@delete")->name("eventimagesdelete");  //for delete one image from a particular event.

	Route::resource("tender_requirements","TenderRequirementController");

	Route::resource("tenders","TenderController");
	Route::resource("tender_receipts","TenderReceiptController");

	Route::get('storage/tender_docs/{filename}',function($filename){
		$filepath= storage_path('tender_docs/').$filename;
		return Response::download($filepath,$filename,['Content-Length : '.filesize($filepath)]);
	})->name('adminTenderDownload');

});
<?php
use App\Event;
use App\Property;
use App\Category;
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
Route::get('/events/{id}',"PagesController@getEventSingle")->name('eventsingle');


Route::get('/properties',"PagesController@getPropertiesAll")->name('properties');
Route::post('/properties',"PagesController@getProperties")->name('propertysearch');
Route::get('/propertysingle/{id}',"PagesController@getPropertySingle")->name('propertysingle');



Route::get('/howtotender',"PagesController@getHowtoTender")->name('howToTender');
Route::get('/tendertermsandconditions',"PagesController@getTenderTermsAndConditions")->name('tenderTermsAndConditions');
Route::get('latesttenders',"PagesController@getLatestTenders")->name('latestTenders');


Route::post('latesttenders', "PagesController@getFileDownload")->name('filedownload');

Route::post('/lang',"PagesController@setSession");

//using location id to retrive category id and name by joining property and category tables.
Route::get('/loc_cat/{id}', function($id) {

	$category = Property::groupBy('category_id')->select('category_id','name_en','name_ar',DB::raw('count(*) as total'))->where('location_id','=',$id)->join('categories','properties.category_id','=','categories.id')->get();
	
    //$property = Property::groupBy('category_id')->select('category_id',DB::raw('count(*) as total'))->where('location_id','=',$id)->get();
    return $category;
});

Route::get('/loc_cat_type/{location_id}/{category_id}', function($location_id,$category_id) {

	$type = Property::groupBy('category_id','type_id')->select('type_id','name_en','name_ar',DB::raw('count(*) as total'))->where('location_id','=',$location_id)->where('category_id','=',$category_id)->join('types','properties.type_id','=','types.id')->get();
	
    //$property = Property::groupBy('category_id')->select('category_id',DB::raw('count(*) as total'))->where('location_id','=',$id)->get();
    return $type;
});


Route::resource("/msrs","MsrController");
Route::resource("/vendorregistrations","VendorregistrationController");

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

	Route::resource("categories","CategoryController");
	Route::resource("locations","LocationController");
	Route::resource("types","TypeController");

	Route::resource("properties","PropertyController");

	//Route::resource("property_images","PropertyImageController");

	Route::get('/property_images/{id}',"PropertyImageController@showImages")->name("propertyimages");
	Route::post('/property_images', "PropertyImageController@store")->name("propertyimagesstore");

	Route::get('/property_images/delete/{imageid}', "PropertyImageController@delete")->name("propertyimagesdelete");  //for delete one image from a particular property.

});
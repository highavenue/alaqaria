<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Event;
use Session;

class PagesController extends Controller
{
	
	public function setSession(Request $request)
	{

		 
		$lang=$request->input('action'); // it returns values:'ar' or 'en'
		if($lang=='ar')
		{
			Session::put('lang','ar');
		}
		else
		{
			Session::put('lang','en');
		}

		return redirect()->back();

	}


	public function getHomePage(Request $request)
    {
    	// $contact=Contact::find(1);
    	return view('index');//->withContact($contact);
    }

    public function getContactus(Request $request)
    {
    	// $contact=Contact::find('1');
    	return view('pages.contactus');//->with('contact',$contact);
    }

    public function getAboutus(Request $request)
    {
    	return view('pages.aboutus');//->with('contact',$contact);
    }

    public function getCompanyOverview(Request $request)
    {

    	return view('pages.companyoverview');//->with('contact',$contact);
    }
    public function getMissionAndVision(Request $request)
    {

    	return view('pages.missionandvision');//->with('contact',$contact);
    }
    public function getManagement(Request $request)
    {

        return view('pages.management');//->with('contact',$contact);
    }

     public function getEvents(Request $request)
    {
        $events=Event::orderBy('id', 'desc')->paginate(1);
        return view('pages.events',compact('events'));//->with('contact',$contact);
    }
    
}

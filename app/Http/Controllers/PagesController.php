<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
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
}

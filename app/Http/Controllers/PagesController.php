<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Event;
use App\EventImage;
use App\TenderRequirement;
use App\Tender;
use App\TenderReceipt;
use Session;
use Route;
use Storage;
use Response;

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

    // public function getEvents(Request $request)
    // {
    //     $events=Event::orderBy('id', 'desc')->paginate(1);
    //     return view('pages.events',compact('events'));//->with('contact',$contact);
    // }

    public function getHowtoTender(Request $request)
    {
        $tenderRequirement=TenderRequirement::find(1);
        return view('pages.howtotender',compact('tenderRequirement'));//->with('contact',$contact);
    }

    public function getTenderTermsAndConditions(Request $request)
    {
        $termsandconditions=TenderRequirement::find(2);
        return view('pages.tendertermsandconditions',compact('termsandconditions'));//->with('contact',$contact);
    }

    public function getLatestTenders(Request $request)
    {
        //$tenders=Tender::all();
        $tenders=Tender::orderby('id','desc')->paginate(10);
        return view('pages.latesttenders',compact('tenders'));//->with('contact',$contact);
    }
    

    public function getEvents(Request $request)
    {
         $events=Event::paginate(8);
        return view('pages.events',compact('events'));//->with('contact',$contact);
    }

     public function getEventSingle($id)
    {
        $event=Event::find($id);
        $images = EventImage::where('event_id','=',$id)->get();
           
        if(count($images)==0)
        {
            $image=new EventImage();
            $image->image='no_img.png';
            $images[]=$image;
        }
        
     return view('pages.eventsingle',compact('event','images'));
           // return Redirect()->back()->withEvent($event)->withEvents($events);
     
    }

    public function getFileDownload(Request $request)
    {
        
        // if($request->category==null)
        // {
            $tender_receipt=TenderReceipt::where('tender_id','=',$request->tender_id)->where('password','=',$request->password)->first();
            if(count($tender_receipt)!=0)
            {
                $tender=Tender::where('id','=',$tender_receipt->tender_id)->first();
                $filename=$tender->attachment;
                $filepath= storage_path('tender_docs/').$filename;
                Session::flash('success_msg',"Your download begins now...");
                return Response::download($filepath,$filename,['Content-Length : '.filesize($filepath)]);       
            }
            else
            {
                Session::flash('warning_msg',"Password Missmatch!!");
                return back();
            }

       // }

       // else
       // {
       //      $tenders=Tender::paginate(2);
       //      return view('pages.latesttenders',compact('tenders'));
       // }
        //  $events=Event::paginate(8);
        // return view('pages.events',compact('events'));//->with('contact',$contact);
    }

}

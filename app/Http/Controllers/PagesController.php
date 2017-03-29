<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Event;
use App\EventImage;
use App\TenderRequirement;
use App\Tender;
use App\TenderReceipt;
use App\Property;
use App\Msr;
use App\Msrconstant;
use App\VendorConstant;
use App\Vendorregistration;
use Session;
use Route;
use Storage;
use Response;
use Validator;
use Input;
use Mail;

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
    }


    public function getPropertiesAll(Request $request)
    {
     $properties=Property::orderBy('id','desc')->paginate(6);
         return view('pages.properties',compact('properties'));//->with('contact',$contact);
     }

     public function getPropertySingle($id)
     {
         $property=Property::find($id);
         return view('pages.propertysingle',compact('property'));//->with('contact',$contact);
     }

     public function getProperties(Request $request)
     {
        $location_id=$request->location;
        $category_id=$request->category;
        $type_id=$request->type;
        $action=$request->action;

        if($location_id==null && $category_id==null && $type_id==null)
        {
            if($action=='all')
                $properties=Property::orderBy('id','desc')->paginate(6);
            else
                $properties=Property::where('for','=',$action)->orderBy('id','desc')->paginate(6);
        }
        else if($category_id==null && $type_id==null)
        {
            if($action=='all')
                $properties=Property::where('location_id','=',$location_id)->where('status','=',1)->orderBy('id','desc')->paginate(6);
            else
                $properties=Property::where('location_id','=',$location_id)->where('for','=',$action)->where('status','=',1)->orderBy('id','desc')->paginate(6);
        }
        else if($type_id==null)
        {
            if($action=='all')
                $properties=Property::where('location_id','=',$location_id)->where('category_id','=',$category_id)->where('status','=',1)->orderBy('id','desc')->paginate(6);
            else
                $properties=Property::where('location_id','=',$location_id)->where('category_id','=',$category_id)->where('for','=',$action)->where('status','=',1)->orderBy('id','desc')->paginate(6);
        }
        else
        {
            if($action=='all')
                $properties=Property::where('location_id','=',$location_id)->where('category_id','=',$category_id)->where('type_id','=',$type_id)->where('status','=',1)->orderBy('id','desc')->paginate(6);
            else 
                $properties=Property::where('location_id','=',$location_id)->where('category_id','=',$category_id)->where('type_id','=',$type_id)->where('for','=',$action)->where('status','=',1)->orderBy('id','desc')->paginate(6);
        }
        return view('pages.properties',compact('properties'));
    }


    
    public function getMsrForm()
    {
     return view('pages.msrform');
 }
 public function storeMsrForm(Request $request)
 {
    $msrconstant = Msrconstant::select('id')->orderBy('created_at', 'desc')->first();
    $msr = new Msr();

    $this->validate($request,[
        'category' => 'required',
        'requestedby' => 'required',
        'location' => 'required',
        'locationcenter' => 'required_unless:location,others',
        'otherlocationcenter' => 'required_if:location,others',
        'requestedfor' => 'required',
        'contactno' => 'required',
        'desc'=>'required | max:255'
        ]);

    $center = "";
    if ($request->location != "others")
        $center = $request->locationcenter;
    else
        $center = $request->otherlocationcenter;

    $msr->msr_refno = $request->input("msr_refno");
    $msr->requestedby = $request->input("requestedby");
    $msr->category = $request->input("category");
    $msr->location = $request->input("location");
    $msr->center = $center;
    $msr->requestedfor = $request->input("requestedfor");
    $msr->contactno = $request->input("contactno");
    $msr->desc = $request->input("desc");
    $msr->msrconstant_id=$msrconstant->id;
    $msr->save();

    Session::flash('create_msg','Item created successfully.');
}

public function getVendorRegForm()
{
   return view('pages.vendorregform');
}
public function storeVendorRegForm(Request $request)
{
    $vendorconstant = VendorConstant::select('id')->orderBy('created_at', 'desc')->first();
    $vendorregistration = new Vendorregistration();

    $this->validate($request,[
        'companyregisteredname' => 'required',
        'companyparentname' => 'required',
        'establishment' => 'required',
        'classification'=> 'required',
        'boxno' => 'required',
        'telephoneno' => 'required',
        'email' => 'required',
        'faxno' => 'required',
        'natureofbusiness' => 'required',
        'fieldoftrade' => 'required',
        'fieldoftradetext'=> 'required',
        'personname' => 'required',
        'personjobtitle' => 'required',
        'personemail' => 'required',
        'personmobileno' => 'required',
        'crdoc' => 'required | file | mimes:jpeg,bmp,png,gif,svg,pdf,doc,docx',
        'tradelicencedoc' => 'required | file | mimes:jpeg,bmp,png,gif,svg,pdf,doc,docx',
        'companysignaturedoc' => 'required | file | mimes:jpeg,bmp,png,gif,svg,pdf,doc,docx',
        'otherdocument' => 'sometimes | file | mimes:jpeg,bmp,png,gif,svg,pdf,doc,docx',
        'poorexp' => 'required',
        'pleasespecify' => 'required_if:poorexp,yes',
        'bankname' => 'required',
        'accountname' => 'required',
        'accountno' => 'required',
        'currency' => 'required',
        'natureoflocation' => 'required',
        'locationofoffice' => 'required',
        'commregno'  => 'required',
        'qcmembership'  => 'required',
        'taxcardno'  => 'required',
        'membervalidity1' => 'required',
        'membervalidity2' => 'required',
        'declaration' => 'required'
        ]);   

        // $crdoc=$request->file('crdoc'); //crdoc used to upload
        // $filename1=time(). '.' . $crdoc->getClientOriginalExtension(); //rename crdoc using timestap
        // $path=Storage::disk('event_img')->getDriver()->getAdapter()->getPathPrefix();
        // $file=$path.$filename;
        // Image::make($crdoc->getRealPath())->save($file);

        // $tradelicencedoc=$request->file('tradelicencedoc'); //tradelicencedoc used to upload
        // $filename2=time(). '.' . $tradelicencedoc->getClientOriginalExtension(); //rename tradelicencedoc using time
        // $path=Storage::disk('event_img')->getDriver()->getAdapter()->getPathPrefix();
        // $file=$path.$filename;
        // Image::make($tradelicencedoc->getRealPath())->save($file);

        // $companysignaturedoc=$request->file('companysignaturedoc'); //companysignaturedoc used to upload
        // $filename3=time(). '.' . $companysignaturedoc->getClientOriginalExtension(); //rename companysignaturedoc 
        // $path=Storage::disk('event_img')->getDriver()->getAdapter()->getPathPrefix();
        // $file=$path.$filename;
        // Image::make($companysignaturedoc->getRealPath())->save($file);

        // $otherdocument=$request->file('otherdocument'); //otherdocument used to upload
        // $filename4=time(). '.' . $otherdocument->getClientOriginalExtension(); //rename otherdocument using timestap
        // $path=Storage::disk('event_img')->getDriver()->getAdapter()->getPathPrefix();
        // $file=$path.$filename;
        // Image::make($otherdocument->getRealPath())->save($file);
      $nob = "";
      $natureofbusiness  = implode('|', $request->natureofbusiness);

        $vendorregistration->registryno = $request->input("registryno");
        $vendorregistration->registrydate = $request->input("registrydate");
        $vendorregistration->companyregisteredname = $request->input("companyregisteredname");
        $vendorregistration->companyparentname = $request->input("companyparentname");
        $vendorregistration->establishment = $request->input("establishment");
        $vendorregistration->classification = $request->input("classification");
        $vendorregistration->buildingname = $request->input("buildingname");
        $vendorregistration->buildingno = $request->input("buildingno");
        $vendorregistration->floorno = $request->input("floorno");
        $vendorregistration->streetname = $request->input("streetname");
        $vendorregistration->streetno = $request->input("streetno");
        $vendorregistration->zoneno = $request->input("zoneno");
        $vendorregistration->city = $request->input("city");
        $vendorregistration->country = $request->input("country");
        $vendorregistration->postalcode = $request->input("postalcode");
        $vendorregistration->boxno = $request->input("boxno");
        $vendorregistration->telephoneno = $request->input("telephoneno");
        $vendorregistration->email = $request->input("email");
        $vendorregistration->faxno = $request->input("faxno");
        $vendorregistration->natureofbusiness = $natureofbusiness;
        $vendorregistration->natureofbusinessother = $request->input("natureofbusinessother");
        $vendorregistration->fieldoftrade = $request->input("fieldoftrade");
        $vendorregistration->fieldoftradetext = $request->input("fieldoftradetext");
        $vendorregistration->personname = $request->input("personname");
        $vendorregistration->personjobtitle = $request->input("personjobtitle");
        $vendorregistration->personemail = $request->input("personemail");
        $vendorregistration->personmobileno = $request->input("personmobileno");
        $vendorregistration->persontelephoneno = $request->input("persontelephoneno");
        $vendorregistration->personfaxno = $request->input("personfaxno");

        // $vendorregistration->crdoc = $filename1;
        // $vendorregistration->tradelicencedoc = $filename2;
        // $vendorregistration->companysignaturedoc = $filename3;
        // $vendorregistration->otherdocument = $filename4;

        $vendorregistration->noofyears = $request->input("noofyears");
        $vendorregistration->client1 = $request->input("client1");
        $vendorregistration->location1 = $request->input("location1");
        $vendorregistration->duration1 = $request->input("duration1");
        $vendorregistration->client2 = $request->input("client2");
        $vendorregistration->location2 = $request->input("location2");
        $vendorregistration->duration2 = $request->input("duration2");
        $vendorregistration->client3 = $request->input("client3");
        $vendorregistration->location3 = $request->input("location3");
        $vendorregistration->duration3 = $request->input("duration3");
        $vendorregistration->poorexp = $request->input("poorexp"); 
        $vendorregistration->pleasespecify = $request->input("pleasespecify");
        $vendorregistration->previousbusinessname = $request->input("previousbusinessname");
        $vendorregistration->reasonforchange = $request->input("reasonforchange");
        $vendorregistration->certifications = $request->input("certifications");
        $vendorregistration->certificationbody1 = $request->input("certificationbody1");
        $vendorregistration->validity1 = $request->input("validity1");
        $vendorregistration->certificationbody2 = $request->input("certificationbody2");
        $vendorregistration->validity2 = $request->input("validity2");
        $vendorregistration->bankname = $request->input("bankname");
        $vendorregistration->accountname = $request->input("accountname");
        $vendorregistration->accountno = $request->input("accountno");
        $vendorregistration->swiftcode = $request->input("swiftcode");
        $vendorregistration->currency = $request->input("currency");
        $vendorregistration->ibanno = $request->input("ibanno");
        $vendorregistration->bankbranch = $request->input("bankbranch");
        $vendorregistration->bankcity = $request->input("bankcity");
        $vendorregistration->bankpoboxno = $request->input("bankpoboxno");
        $vendorregistration->banktelephoneno1 = $request->input("banktelephoneno1");
        $vendorregistration->financecontactperson = $request->input("financecontactperson");
        $vendorregistration->banktelephoneno2 = $request->input("banktelephoneno2");
        $vendorregistration->bankemailaddress = $request->input("bankemailaddress");
        $vendorregistration->bankfaxno = $request->input("bankfaxno");
        $vendorregistration->natureoflocation = $request->input("natureoflocation");
        $vendorregistration->locationofoffice = $request->input("locationofoffice");
        $vendorregistration->commregno = $request->input("commregno");
        $vendorregistration->qcmembership = $request->input("qcmembership");
        $vendorregistration->taxcardno = $request->input("taxcardno");
        $vendorregistration->membervalidity1 = $request->input("membervalidity1");
        $vendorregistration->membervalidity2 = $request->input("membervalidity2");
        $vendorregistration->otherdetails = $request->input("otherdetails");
        $vendorregistration->vendorconstant_id=$vendorconstant->id;

        $vendorregistration->save();

        $data = array(
          
         'crdoc'=>$request->file('crdoc'),
         'tradelicencedoc'=>$request->file('tradelicencedoc'),
         'companysignaturedoc'=>$request->file('companysignaturedoc'),
         'otherdocument'=>$request->file('otherdocument'),  

        'registryno' => $request->input("registryno"),
        'registrydate' => $request->input("registrydate"),
        'companyregisteredname' => $request->input("companyregisteredname"),
        'companyparentname' => $request->input("companyparentname"),
        'establishment' => $request->input("establishment"),
        'classification' => $request->input("classification"),
        'buildingname' => $request->input("buildingname"),
        'buildingno' => $request->input("buildingno"),
        'floorno' => $request->input("floorno"),
        'streetname' => $request->input("streetname"),
        'streetno' => $request->input("streetno"),
        'zoneno' => $request->input("zoneno"),
        'city' => $request->input("city"),
        'country' => $request->input("country"),
        'postalcode' => $request->input("postalcode"),
        'boxno' => $request->input("boxno"),
        'telephoneno' => $request->input("telephoneno"),
        'email' => $request->input("email"),
        'faxno' => $request->input("faxno"),
        'natureofbusiness' => $natureofbusiness,
        'natureofbusinessother' => $request->input("natureofbusinessother"),
        'fieldoftrade' => $request->input("fieldoftrade"),
        'fieldoftradetext' => $request->input("fieldoftradetext"),
        'personname' => $request->input("personname"),
        'personjobtitle' => $request->input("personjobtitle"),
        'personemail' => $request->input("personemail"),
        'personmobileno' => $request->input("personmobileno"),
        'persontelephoneno' => $request->input("persontelephoneno"),
        'personfaxno' => $request->input("personfaxno"),
        'noofyears' => $request->input("noofyears"),
        'client1' => $request->input("client1"),
        'location1' => $request->input("location1"),
        'duration1' => $request->input("duration1"),
        'client2' => $request->input("client2"),
        'location2' => $request->input("location2"),
        'duration2' => $request->input("duration2"),
        'client3' => $request->input("client3"),
        'location3' => $request->input("location3"),
        'duration3' => $request->input("duration3"),
        'poorexp' => $request->input("poorexp"), 
        'pleasespecify' => $request->input("pleasespecify"),
        'previousbusinessname' => $request->input("previousbusinessname"),
        'reasonforchange' => $request->input("reasonforchange"),
        'certifications' => $request->input("certifications"),
        'certificationbody1' => $request->input("certificationbody1"),
        'validity1' => $request->input("validity1"),
        'certificationbody2' => $request->input("certificationbody2"),
        'validity2' => $request->input("validity2"),
        'bankname' => $request->input("bankname"),
        'accountname' => $request->input("accountname"),
        'accountno' => $request->input("accountno"),
        'swiftcode' => $request->input("swiftcode"),
        'currency' => $request->input("currency"),
        'ibanno' => $request->input("ibanno"),
        'bankbranch' => $request->input("bankbranch"),
        'bankcity' => $request->input("bankcity"),
        'bankpoboxno' => $request->input("bankpoboxno"),
        'banktelephoneno1' => $request->input("banktelephoneno1"),
        'financecontactperson' => $request->input("financecontactperson"),
        'banktelephoneno2' => $request->input("banktelephoneno2"),
        'bankemailaddress' => $request->input("bankemailaddress"),
        'bankfaxno' => $request->input("bankfaxno"),
        'natureoflocation' => $request->input("natureoflocation"),
        'locationofoffice' => $request->input("locationofoffice"),
        'commregno' => $request->input("commregno"),
        'qcmembership' => $request->input("qcmembership"),
        'taxcardno' => $request->input("taxcardno"),
        'membervalidity1' => $request->input("membervalidity1"),
        'membervalidity2' => $request->input("membervalidity2"),
        'otherdetails' => $request->input("otherdetails"),
        'vendorconstant_id' => $vendorconstant->id
      );

     Mail::send('vendoremail.vendormailview',$data,function($message) use ($data){
        $message->from('jubin1988@gmail.com', $data['email']);
        $message->to('jubinj1990@gmail.com');
        $message->subject('New Enquiry From '.$data['companyregisteredname']);
        $message->attach($data['crdoc'], ['as' => 'your-desired-name1.pdf', 
            'mime' => 'application/pdf']);
        $message->attach($data['tradelicencedoc'], ['as' => 'your-desired-name2.pdf', 
            'mime' => 'application/pdf']);
        $message->attach($data['companysignaturedoc'], ['as' => 'your-desired-name3.pdf', 
            'mime' => 'application/pdf']);
        $message->attach($data['otherdocument'], ['as' => 'your-desired-name4.pdf', 
            'mime' => 'application/pdf']);

      });

        return redirect()->route('vendorregistrations.index')->with('message', 'Vendor Registration successfully.');
}


}

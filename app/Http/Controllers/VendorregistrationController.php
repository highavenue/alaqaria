<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vendorregistration;
use Illuminate\Http\Request;

class VendorregistrationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vendorregistrations = Vendorregistration::orderBy('id', 'desc')->paginate(10);

		return view('vendorregistrations.index', compact('vendorregistrations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('vendorregistrations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$vendorregistration = new Vendorregistration();

		$vendorregistration->registryno = $request->input("registryno");
                $vendorregistration->registrydate = $request->input("registrydate");
        $vendorregistration->companyregisteredname = $request->input("companyregisteredname");
        $vendorregistration->companyparentname = $request->input("companyparentname");
        $vendorregistration->establishment = $request->input("establishment");
        $vendorregistration->classification = $request->input("classification");
        $vendorregistration->bldname = $request->input("bldname");
        $vendorregistration->bldno = $request->input("bldno");
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
        $vendorregistration->natureofbusiness = $request->input("natureofbusiness");
        $vendorregistration->fieldoftrade = $request->input("fieldoftrade");
        $vendorregistration->fieldoftradetext = $request->input("fieldoftradetext");
        $vendorregistration->personname = $request->input("personname");
        $vendorregistration->personjobtitle = $request->input("personjobtitle");
        $vendorregistration->personemail = $request->input("personemail");
        $vendorregistration->personmobileno = $request->input("personmobileno");
        $vendorregistration->persontelephoneno = $request->input("persontelephoneno");
        $vendorregistration->personfaxno = $request->input("personfaxno");
        $vendorregistration->submitteddocuments = $request->input("submitteddocuments");
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
        $vendorregistration->poorexp = $request->input("poorexp"); // Y/N
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
        $vendorregistration->bankbldgname = $request->input("bankbldgname");
        $vendorregistration->bankbldgno = $request->input("bankbldgno");
        $vendorregistration->bankfloorno = $request->input("bankfloorno");
        $vendorregistration->bankstreetname = $request->input("bankstreetname");
        $vendorregistration->bankstreetno = $request->input("bankstreetno");
        $vendorregistration->bankzoneno = $request->input("bankzoneno");
        $vendorregistration->bankcity = $request->input("bankcity");
        $vendorregistration->bankcountry = $request->input("bankcountry");
        $vendorregistration->bankpostalcode = $request->input("bankpostalcode");
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

		$vendorregistration->save();

		return redirect()->route('vendorregistrations.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$vendorregistration = Vendorregistration::findOrFail($id);

		return view('vendorregistrations.show', compact('vendorregistration'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vendorregistration = Vendorregistration::findOrFail($id);

		return view('vendorregistrations.edit', compact('vendorregistration'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$vendorregistration = Vendorregistration::findOrFail($id);

		$vendorregistration->registryno = $request->input("registryno");
                $vendorregistration->registrydate = $request->input("registrydate");
        $vendorregistration->companyregisteredname = $request->input("companyregisteredname");
        $vendorregistration->companyparentname = $request->input("companyparentname");
        $vendorregistration->establishment = $request->input("establishment");
        $vendorregistration->classification = $request->input("classification");
        $vendorregistration->bldname = $request->input("bldname");
        $vendorregistration->bldno = $request->input("bldno");
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
        $vendorregistration->natureofbusiness = $request->input("natureofbusiness");
        $vendorregistration->fieldoftrade = $request->input("fieldoftrade");
        $vendorregistration->fieldoftradetext = $request->input("fieldoftradetext");
        $vendorregistration->personname = $request->input("personname");
        $vendorregistration->personjobtitle = $request->input("personjobtitle");
        $vendorregistration->personemail = $request->input("personemail");
        $vendorregistration->personmobileno = $request->input("personmobileno");
        $vendorregistration->persontelephoneno = $request->input("persontelephoneno");
        $vendorregistration->personfaxno = $request->input("personfaxno");
        $vendorregistration->submitteddocuments = $request->input("submitteddocuments");
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
        $vendorregistration->bankbldgname = $request->input("bankbldgname");
        $vendorregistration->bankbldgno = $request->input("bankbldgno");
        $vendorregistration->bankfloorno = $request->input("bankfloorno");
        $vendorregistration->bankstreetname = $request->input("bankstreetname");
        $vendorregistration->bankstreetno = $request->input("bankstreetno");
        $vendorregistration->bankzoneno = $request->input("bankzoneno");
        $vendorregistration->bankcity = $request->input("bankcity");
        $vendorregistration->bankcountry = $request->input("bankcountry");
        $vendorregistration->bankpostalcode = $request->input("bankpostalcode");
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

		$vendorregistration->save();

		return redirect()->route('vendorregistrations.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$vendorregistration = Vendorregistration::findOrFail($id);
		$vendorregistration->delete();

		return redirect()->route('vendorregistrations.index')->with('message', 'Item deleted successfully.');
	}

}

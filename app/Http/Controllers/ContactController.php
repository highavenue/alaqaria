<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$contacts = Contact::orderBy('id', 'desc')->paginate(10);

		return view('contacts.index', compact('contacts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('contacts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request,[
			'area_en' => 'required|max:255',
	        'area_ar' => 'required|max:255',
	        'street_en' => 'required|max:255',
	        'street_ar' => 'required|max:255',
	        'pobox' => 'required|max:255',
	        'state_en' => 'required|max:255',
	        'state_ar' => 'required|max:255',
	        'country_en' => 'required|max:255',
	        'country_ar' => 'required|max:255',
	        'ph1' => 'required|max:255',
	        'ph2' => 'max:255',
	        'fax'=>'max:255',
	        'email' => 'required|email|max:255',
	        'map' => 'required',
	        'facebook' => 'max:255',
	        'twitter' => 'max:255',
	        'linkedin' => 'max:255',
	        'instagram' => 'max:255',
	        'youtube' => 'max:255',
	        'rss' => 'max:255'
    	]);

		$contact = new Contact();

		$contact->area_en = $request->input("area_en");
        $contact->area_ar = $request->input("area_ar");
        $contact->street_en = $request->input("street_en");
        $contact->street_ar = $request->input("street_ar");
        $contact->pobox = $request->input("pobox");
        $contact->state_en = $request->input("state_en");
        $contact->state_ar = $request->input("state_ar");
        $contact->country_en = $request->input("country_en");
        $contact->country_ar = $request->input("country_ar");
        $contact->ph1 = $request->input("ph1");
        $contact->ph2 = $request->input("ph2");
        $contact->fax = $request->input("fax");
        $contact->email = $request->input("email");
        $contact->map = $request->input("map");
        $contact->facebook = $request->input("facebook");
        $contact->twitter = $request->input("twitter");
        $contact->linkedin = $request->input("linkedin");
        $contact->instagram = $request->input("instagram");
        $contact->youtube = $request->input("youtube");
        $contact->rss = $request->input("rss");

		$contact->save();

		return redirect()->route('contacts.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$contact = Contact::findOrFail($id);

		return view('contacts.show', compact('contact'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$contact = Contact::findOrFail($id);

		return view('contacts.edit', compact('contact'));
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
		$contact = Contact::findOrFail($id);

		$contact->area_en = $request->input("area_en");
        $contact->area_ar = $request->input("area_ar");
        $contact->street_en = $request->input("street_en");
        $contact->street_ar = $request->input("street_ar");
        $contact->pobox = $request->input("pobox");
        $contact->state_en = $request->input("state_en");
        $contact->state_ar = $request->input("state_ar");
        $contact->country_en = $request->input("country_en");
        $contact->country_ar = $request->input("country_ar");
        $contact->ph1 = $request->input("ph1");
        $contact->ph2 = $request->input("ph2");
        $contact->fax = $request->input("fax");
        $contact->email = $request->input("email");
        $contact->map = $request->input("map");
        $contact->facebook = $request->input("facebook");
        $contact->twitter = $request->input("twitter");
        $contact->linkedin = $request->input("linkedin");
        $contact->instagram = $request->input("instagram");
        $contact->youtube = $request->input("youtube");
        $contact->rss = $request->input("rss");

		$contact->save();

		return redirect()->route('contacts.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$contact = Contact::findOrFail($id);
		$contact->delete();

		return redirect()->route('contacts.index')->with('message', 'Item deleted successfully.');
	}

}

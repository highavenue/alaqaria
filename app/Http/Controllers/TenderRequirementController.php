<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TenderRequirement;
use Illuminate\Http\Request;

class TenderRequirementController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tender_requirements = TenderRequirement::orderBy('id', 'desc')->paginate(10);

		return view('tender_requirements.index', compact('tender_requirements'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return '';//view('tender_requirements.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$tender_requirement = new TenderRequirement();

		$tender_requirement->subject_en = $request->input("subject_en");
        $tender_requirement->subject_ar = $request->input("subject_ar");
        $tender_requirement->desc_en = $request->input("desc_en");
        $tender_requirement->desc_ar = $request->input("desc_ar");

		$tender_requirement->save();

		return redirect()->route('tender_requirements.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tender_requirement = TenderRequirement::findOrFail($id);

		return view('tender_requirements.show', compact('tender_requirement'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tender_requirement = TenderRequirement::findOrFail($id);

		return view('tender_requirements.edit', compact('tender_requirement'));
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
		$tender_requirement = TenderRequirement::findOrFail($id);

		$tender_requirement->subject_en = $request->input("subject_en");
        $tender_requirement->subject_ar = $request->input("subject_ar");
        $tender_requirement->desc_en = $request->input("desc_en");
        $tender_requirement->desc_ar = $request->input("desc_ar");

		$tender_requirement->save();

		return redirect()->route('tender_requirements.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tender_requirement = TenderRequirement::findOrFail($id);
		$tender_requirement->delete();

		return redirect()->route('tender_requirements.index')->with('message', 'Item deleted successfully.');
	}

}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\VendorConstant;
use Illuminate\Http\Request;

class VendorConstantController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vendor_constants = VendorConstant::orderBy('id', 'desc')->paginate(10);

		return view('vendor_constants.index', compact('vendor_constants'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('vendor_constants.create');
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
			'documentno' => 'required | max:255',
			'revisionno' => 'required | max:255',
			'revisiondate' => 'required | date'
			]);

		$vendor_constant = new VendorConstant();

		$vendor_constant->documentno = $request->input("documentno");
        $vendor_constant->revisionno = $request->input("revisionno");
        $vendor_constant->revisiondate = $request->input("revisiondate");

		$vendor_constant->save();

		return redirect()->route('vendor_constants.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$vendor_constant = VendorConstant::findOrFail($id);

		return view('vendor_constants.show', compact('vendor_constant'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vendor_constant = VendorConstant::findOrFail($id);

		return view('vendor_constants.edit', compact('vendor_constant'));
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

		$this->validate($request,[
			'documentno' => 'required | max:255',
			'revisionno' => 'required | max:255',
			'revisiondate' => 'required | date'
			]);
		
		$vendor_constant = VendorConstant::findOrFail($id);

		$vendor_constant->documentno = $request->input("documentno");
        $vendor_constant->revisionno = $request->input("revisionno");
        $vendor_constant->revisiondate = $request->input("revisiondate");

		$vendor_constant->save();

		return redirect()->route('vendor_constants.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// $vendor_constant = VendorConstant::findOrFail($id);
		// $vendor_constant->delete();

		// return redirect()->route('vendor_constants.index')->with('message', 'Item deleted successfully.');
	}

}

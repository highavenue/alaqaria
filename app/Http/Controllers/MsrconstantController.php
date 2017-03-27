<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Msrconstant;
use Illuminate\Http\Request;

class MsrconstantController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$msrconstants = Msrconstant::orderBy('id', 'desc')->paginate(10);

		return view('msrconstants.index', compact('msrconstants'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('msrconstants.create');
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

		$msrconstant = new Msrconstant();

		$msrconstant->documentno = $request->input("documentno");
        $msrconstant->revisionno = $request->input("revisionno");
        $msrconstant->revisiondate = $request->input("revisiondate");

		$msrconstant->save();

		return redirect()->route('msrconstants.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$msrconstant = Msrconstant::findOrFail($id);

		return view('msrconstants.show', compact('msrconstant'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$msrconstant = Msrconstant::findOrFail($id);

		return view('msrconstants.edit', compact('msrconstant'));
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
		
		$msrconstant = Msrconstant::findOrFail($id);

		$msrconstant->documentno = $request->input("documentno");
        $msrconstant->revisionno = $request->input("revisionno");
        $msrconstant->revisiondate = $request->input("revisiondate");

		$msrconstant->save();

		return redirect()->route('msrconstants.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// $msrconstant = Msrconstant::findOrFail($id);
		// $msrconstant->delete();

		// return redirect()->route('msrconstants.index')->with('message', 'Item deleted successfully.');
	}

}

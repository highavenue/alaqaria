<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$locations = Location::orderBy('id', 'desc')->paginate(10);

		return view('locations.index', compact('locations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('locations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$location = new Location();

		$location->name_en = $request->input("name_en");
        $location->name_ar = $request->input("name_ar");

		$location->save();

		return redirect()->route('locations.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$location = Location::findOrFail($id);

		return view('locations.show', compact('location'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$location = Location::findOrFail($id);

		return view('locations.edit', compact('location'));
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
		$location = Location::findOrFail($id);

		$location->name_en = $request->input("name_en");
        $location->name_ar = $request->input("name_ar");

		$location->save();

		return redirect()->route('locations.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$location = Location::findOrFail($id);
		$location->delete();

		return redirect()->route('locations.index')->with('message', 'Item deleted successfully.');
	}

}

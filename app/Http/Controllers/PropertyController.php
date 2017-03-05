<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Property;
use App\PropertyImage;
use Illuminate\Http\Request;
use App\Location;
use App\Category;
use App\Type;
use Storage;


class PropertyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$properties = Property::orderBy('id', 'desc')->paginate(10);

		return view('properties.index', compact('properties'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$locations=Location::orderby('name_en','asc')->get();
		$categories=Category::orderby('name_en','asc')->get();
		$types=Type::orderby('name_en','asc')->get();
		return view('properties.create')->withLocations($locations)->withCategories($categories)->withTypes($types);
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
			'location_id' => 'required',
			'category_id' => 'required',
			'type_id' => 'required',
			'desc_en' => 'required | max:255',
			'desc_ar' => 'required | max:255',
			'for' => 'required',
			'status' => 'required'

			]);

		$property = new Property();

		$property->location_id = $request->input("location_id");
        $property->category_id = $request->input("category_id");
        $property->type_id = $request->input("type_id");
        $property->desc_en = $request->input("desc_en");
        $property->desc_ar = $request->input("desc_ar");
        $property->for = $request->input("for");
        $property->status = $request->input("status");

		$property->save();

		return redirect()->route('properties.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$property = Property::findOrFail($id);

		return view('properties.show', compact('property'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$locations=Location::orderby('name_en','asc')->get();
		$categories=Category::orderby('name_en','asc')->get();
		$types=Type::orderby('name_en','asc')->get();



		$property = Property::findOrFail($id);

		return view('properties.edit', compact('property','locations','categories','types'));
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
			'location_id' => 'required',
			'category_id' => 'required',
			'type_id' => 'required',
			'desc_en' => 'required | max:255',
			'desc_ar' => 'required | max:255',
			'for' => 'required',
			'status' => 'required'

		]);

		$property = Property::findOrFail($id);

		$property->location_id = $request->input("location_id");
        $property->category_id = $request->input("category_id");
        $property->type_id = $request->input("type_id");
        $property->desc_en = $request->input("desc_en");
        $property->desc_ar = $request->input("desc_ar");
        $property->for = $request->input("for");
        $property->status = $request->input("status");



		$property->save();

		return redirect()->route('properties.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		$images=PropertyImage::where('property_id','=',$id)->get();
		foreach($images as $image)
		{
			Storage::disk('property_img')->delete($image->image);
		}


		$property = Property::findOrFail($id);
		$property->delete();

		return redirect()->route('properties.index')->with('message', 'Item deleted successfully.');
	}

}

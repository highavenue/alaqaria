<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Management;
use Illuminate\Http\Request;
use Storage;
use Image;

class ManagementController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$managements = Management::orderBy('id', 'desc')->paginate(10);

		return view('managements.index', compact('managements'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('managements.create');
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
			'image' => 'required | file | image',
	        'name_en' => 'required | max:255',
	        'name_ar' => 'required | max:255',
	        'desig_en' => 'required | max:255',
	        'desig_ar' => 'required | max:255'
			]);
		$management = new Management();

		$image=$request->file('image'); //image used to upload
		$filename=time(). '.' . $image->getClientOriginalExtension(); //rename image using timestap

		$path=Storage::disk('management_img')->getDriver()->getAdapter()->getPathPrefix();
		$file=$path.$filename;

		Image::make($image->getRealPath())->save($file);



		$management->image = $filename;
        $management->name_en = $request->input("name_en");
        $management->name_ar = $request->input("name_ar");
        $management->desig_en = $request->input("desig_en");
        $management->desig_ar = $request->input("desig_ar");

		$management->save();

		return redirect()->route('managements.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$management = Management::findOrFail($id);

		return view('managements.show', compact('management'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$management = Management::findOrFail($id);

		return view('managements.edit', compact('management'));
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
			'image' => 'sometimes | file | image',
	        'name_en' => 'required | max:255',
	        'name_ar' => 'required | max:255',
	        'desig_en' => 'required | max:255',
	        'desig_ar' => 'required | max:255'
			]);

		$management = Management::findOrFail($id);

		$filename='';
		$oldfilename=$request->old_image;
		if($request->hasFile('image'))
		{
			$image=$request->file('image'); 
			$filename=time(). '.' . $image->getClientOriginalExtension();
			$path=Storage::disk('management_img')->getDriver()->getAdapter()->getPathPrefix();
			$file=$path.$filename;

			Image::make($image->getRealPath())->save($file);

			//File::delete($oldfile);
			Storage::disk('management_img')->delete($oldfilename);
		}
		else
		{
			$filename=$request->old_image;
		}

		

		$management->image = $filename;
        $management->name_en = $request->input("name_en");
        $management->name_ar = $request->input("name_ar");
        $management->desig_en = $request->input("desig_en");
        $management->desig_ar = $request->input("desig_ar");

		$management->save();

		return redirect()->route('managements.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$management = Management::findOrFail($id);
		Storage::disk('management_img')->delete($management->image);
		$management->delete();

		return redirect()->route('managements.index')->with('message', 'Item deleted successfully.');
	}

}

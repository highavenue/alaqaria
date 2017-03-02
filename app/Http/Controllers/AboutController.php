<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\About;
use Illuminate\Http\Request;
use Image;
use File;
use Storage;
use Session;

class AboutController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return back();

		// $abouts = About::orderBy('id', 'asc')->paginate(10);

		// return view('abouts.index', compact('abouts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return redirect()->route('abouts.index');
		
		//return view('abouts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		return redirect()->route('abouts.index');

		// $about = new About();

		// $about->subject_en = $request->input("subject_en");
  //       $about->subject_ar = $request->input("subject_ar");
  //       $about->desc_en = $request->input("desc_en");
  //       $about->desc_ar = $request->input("desc_ar");
  //       $about->image = $request->input("image");

		// $about->save();

		// return redirect()->route('abouts.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$about = About::findOrFail($id);

		return view('abouts.show', compact('about'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$about = About::findOrFail($id);

		return view('abouts.edit', compact('about'));
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
		'subject_en' => 'required | max:255',
        'subject_ar' => 'required | max:255',
        'desc_en' => 'required',
        'desc_ar' => 'required',
        'image' => 'sometimes | file | image'
       
			]);

		$about = About::findOrFail($id);

		$filename='';
		$oldfilename=$request->old_image;
		if($request->hasFile('image'))
		{
		$image=$request->file('image'); //image used to upload
		$filename=time(). '.' . $image->getClientOriginalExtension(); //rename image using timestap
		//File::exists(public_path('uploads/img/slider_img/')) or 
		//File::makeDirectory(public_path('uploads/img/slider_img/'),0775,true);
		
		//$location=public_path('uploads/img/slider_img/'.$filename);
		$path=Storage::disk('misc_img')->getDriver()->getAdapter()->getPathPrefix();
		$file=$path.$filename;

		Image::make($image->getRealPath())->save($file);
		Storage::disk('misc_img')->delete($oldfilename);
		}
		else
		{
			$filename=$request->old_image;
		}




		//$about = About::findOrFail($id);

		$about->subject_en = $request->input("subject_en");
        $about->subject_ar = $request->input("subject_ar");
        $about->desc_en = $request->input("desc_en");
        $about->desc_ar = $request->input("desc_ar");
        $about->image = $filename;

		$about->save();
		Session::flash('update_msg','Item updated successfully.');
		return redirect()->route('abouts.show',$id)->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return redirect()->route('abouts.index');
		
		// $about = About::findOrFail($id);
		// $about->delete();

		// return redirect()->route('abouts.index')->with('message', 'Item deleted successfully.');
	}

}

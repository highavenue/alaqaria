<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Slider;
use Illuminate\Http\Request;
use Image;
use File;
use Storage;

class SliderController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sliders = Slider::orderBy('id', 'desc')->paginate(10);

		return view('sliders.index', compact('sliders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('sliders.create');
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
        'title_en' => 'sometimes | max:255',
        'title_ar' => 'sometimes | max:255',
        'subject_en' => 'sometimes | max:255',
        'subject_ar' => 'sometimes | max:255',
        'linktext_en' => 'sometimes | max:255',
        'linktext_ar' => 'sometimes | max:255',
        'link'=> 'sometimes | url'
			]);
		$slider = new Slider();

		$image=$request->file('image'); //image used to upload
		$filename=time(). '.' . $image->getClientOriginalExtension(); //rename image using timestap
		//File::exists(public_path('uploads/img/slider_img/')) or 
		//File::makeDirectory(public_path('uploads/img/slider_img/'),0775,true);
		
		//$location=public_path('uploads/img/slider_img/'.$filename);
		$path=Storage::disk('slider_img')->getDriver()->getAdapter()->getPathPrefix();
		$file=$path.$filename;

		Image::make($image->getRealPath())->save($file);

		$slider->image = $filename;
        $slider->title_en = $request->input("title_en");
        $slider->title_ar = $request->input("title_ar");
        $slider->subject_en = $request->input("subject_en");
        $slider->subject_ar = $request->input("subject_ar");
        $slider->linktext_en = $request->input("linktext_en");
        $slider->linktext_ar = $request->input("linktext_ar");
        $slider->link = $request->input("link");

		$slider->save();

		return redirect()->route('sliders.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$slider = Slider::findOrFail($id);

		return view('sliders.show', compact('slider'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$slider = Slider::findOrFail($id);

		return view('sliders.edit', compact('slider'));
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
        'title_en' => 'sometimes | max:255',
        'title_ar' => 'sometimes | max:255',
        'subject_en' => 'sometimes | max:255',
        'subject_ar' => 'sometimes | max:255',
        'linktext_en' => 'sometimes | max:255',
        'linktext_ar' => 'sometimes | max:255',
        'link'=> 'sometimes | url'
			]);

		$slider = Slider::findOrFail($id);
		$filename='';
		$oldfilename=$request->old_image;
		if($request->hasFile('image'))
		{
			$image=$request->file('image'); 
			$filename=time(). '.' . $image->getClientOriginalExtension();
			$path=Storage::disk('slider_img')->getDriver()->getAdapter()->getPathPrefix();
			$file=$path.$filename;

			Image::make($image->getRealPath())->save($file);

			//File::delete($oldfile);
			Storage::disk('slider_img')->delete($oldfilename);
		}
		else
		{
			$filename=$request->old_image;
		}

		$slider->image = $filename;
        $slider->title_en = $request->input("title_en");
        $slider->title_ar = $request->input("title_ar");
        $slider->subject_en = $request->input("subject_en");
        $slider->subject_ar = $request->input("subject_ar");
        $slider->linktext_en = $request->input("linktext_en");
        $slider->linktext_ar = $request->input("linktext_ar");
        $slider->link = $request->input("link");

		$slider->save();

		return redirect()->route('sliders.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$slider = Slider::findOrFail($id);
		Storage::disk('slider_img')->delete($slider->image);
		$slider->delete();

		return redirect()->route('sliders.index')->with('message', 'Item deleted successfully.');
	}

}

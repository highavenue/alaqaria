<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Slider;
use Illuminate\Http\Request;

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
		'image' => 'required',
        'title_en' => 'required',
        'title_ar' => 'required',
        'subject_en' => 'required',
        'subject_ar' => 'required',
        'linktext_en' => 'required',
        'linktext_ar' => 'required',
        'link'=> 'required'
			]);
		$slider = new Slider();

		$slider->image = $request->input("image");
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
		$slider = Slider::findOrFail($id);

		$slider->image = $request->input("image");
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
		$slider->delete();

		return redirect()->route('sliders.index')->with('message', 'Item deleted successfully.');
	}

}

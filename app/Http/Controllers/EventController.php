<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Event;
use App\EventImage;
use Illuminate\Http\Request;
use Storage;

class EventController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = Event::orderBy('id', 'desc')->paginate(10);

		return view('events.index', compact('events'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('events.create');
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
			'name_en' => 'required | max:255',
			'name_ar' => 'required | max:255'

	        // 'description' => ''
			]);
		$event = new Event();

		$event->name_en = $request->input("name_en");
		$event->name_ar = $request->input("name_ar");
        $event->description_en = $request->input("description_en");
        $event->description_ar = $request->input("description_ar");

		$event->save();

		return redirect()->route('events.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$event = Event::findOrFail($id);

		return view('events.show', compact('event'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$event = Event::findOrFail($id);

		return view('events.edit', compact('event'));
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
			'name_en' => 'required | max:255',
			'name_ar' => 'required | max:255'

	        // 'description' => ''	      
    	]);

		$event = Event::findOrFail($id);
		
		$event->name_en = $request->input("name_en");
		$event->name_ar = $request->input("name_ar");
        $event->description_en = $request->input("description_en");
        $event->description_ar = $request->input("description_ar");

		$event->save();

		return redirect()->route('events.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$images=EventImage::where('event_id','=',$id)->get();
		foreach($images as $image)
		{
			Storage::disk('event_img')->delete($image->image);
		}

		$event = Event::findOrFail($id);

		$event->delete();

		return redirect()->route('events.index')->with('message', 'Item deleted successfully.');
	}

}

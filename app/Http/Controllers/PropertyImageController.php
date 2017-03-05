<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PropertyImage;
use Illuminate\Http\Request;

use Storage;	
use Image;

class PropertyImageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function showImages($id)
    {
        $images=PropertyImage::where('property_id','=',$id)->get();
        return view('properties.propertyimages')->withPropertyid($id)->withImages($images);
    }

	public function index()
	{
		// $property_images = PropertyImage::orderBy('id', 'desc')->paginate(10);

		// return view('property_images.index', compact('property_images'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// return view('property_images.create');
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
            'caption' => 'sometimes | max:255'
            ]);
        $propertyimage = new PropertyImage();

        $image=$request->file('image'); //image used to upload
        $filename=time(). '.' . $image->getClientOriginalExtension(); //rename image using timestap

        $path=Storage::disk('property_img')->getDriver()->getAdapter()->getPathPrefix();
        $file=$path.$filename;

        Image::make($image->getRealPath())->save($file);



        $propertyimage->image = $filename;
        $propertyimage->caption=$request->caption;
        $propertyimage->property_id=$request->property_id;
        $propertyimage->save();

        return redirect()->route('propertyimages',$request->property_id)->with('message', 'Item created successfully.');




		// $property_image = new PropertyImage();

		// $property_image->property_id = $request->input("property_id");
  //       $property_image->image = $request->input("image");
  //       $property_image->caption = $request->input("caption");

		// $property_image->save();

		// return redirect()->route('property_images.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// $property_image = PropertyImage::findOrFail($id);

		// return view('property_images.show', compact('property_image'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// $property_image = PropertyImage::findOrFail($id);

		// return view('property_images.edit', compact('property_image'));
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
		// $property_image = PropertyImage::findOrFail($id);

		// $property_image->property_id = $request->input("property_id");
  //       $property_image->image = $request->input("image");
  //       $property_image->caption = $request->input("caption");

		// $property_image->save();

		// return redirect()->route('property_images.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// $property_image = PropertyImage::findOrFail($id);
		// $property_image->delete();

		// return redirect()->route('property_images.index')->with('message', 'Item deleted successfully.');
	}

	public function delete($imageid)
    {
        //
        $image = PropertyImage::findOrFail($imageid);
        $propertyid=$image->property_id;
        Storage::disk('property_img')->delete($image->image);
        $image->delete();

        return redirect()->route('propertyimages',$propertyid)->with('message', 'Item deleted successfully.');
        // $images=EventImage::where('event_id','=',$eventid)->get();
        // return view('events.eventimages')->withEventid($eventid)->withImages($images);
        //return redirect()->route('sliders.index')->with('message', 'Item deleted successfully.');
    }

}

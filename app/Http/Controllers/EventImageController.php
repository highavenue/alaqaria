<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EventImage;
use Illuminate\Http\Request;

use Storage;
use Image;

class EventImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showImages($id)
    {
        $images=EventImage::where('event_id','=',$id)->get();
        return view('events.eventimages')->withEventid($id)->withImages($images);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\response($value, $httpStatusCode = 200, $headers = [])
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'image' => 'required | file | image',
            'caption' => 'sometimes | max:255'
            ]);
        $eventimage = new EventImage();

        $image=$request->file('image'); //image used to upload
        $filename=time(). '.' . $image->getClientOriginalExtension(); //rename image using timestap

        $path=Storage::disk('event_img')->getDriver()->getAdapter()->getPathPrefix();
        $file=$path.$filename;

        Image::make($image->getRealPath())->save($file);



        $eventimage->image = $filename;
        $eventimage->caption=$request->caption;
        $eventimage->event_id=$request->event_id;
        $eventimage->save();

        return redirect()->route('eventimages',$request->event_id)->with('message', 'Item created successfully.');


//return redirect()->route('pages.eventimages')->with('message', 'Item created successfully.');

        //
        //return "this is store".$request->event_id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       
    }

    public function delete($imageid)
    {
        //
        $image = EventImage::findOrFail($imageid);
        $eventid=$image->event_id;
        Storage::disk('event_img')->delete($image->image);
        $image->delete();

        return redirect()->route('eventimages',$eventid)->with('message', 'Item deleted successfully.');
        // $images=EventImage::where('event_id','=',$eventid)->get();
        // return view('events.eventimages')->withEventid($eventid)->withImages($images);
        //return redirect()->route('sliders.index')->with('message', 'Item deleted successfully.');
    }
}

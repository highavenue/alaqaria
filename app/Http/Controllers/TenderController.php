<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tender;
use Illuminate\Http\Request;
use File;
use Storage;
use Session;

class TenderController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tenders = Tender::orderBy('id', 'desc')->paginate(10);

		return view('tenders.index', compact('tenders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tenders.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$tender = new Tender();

		if($request->input('english_only')=='on')
        {
        	$tender->english_only=1;

        	$this->validate($request,[
			'tender_no' => 'required',
	        'subject_en' => 'required | max:255',
	        'subject_ar' => 'sometimes | max:255',
	        'desc_en' => 'required | max:255',
	        'desc_ar' => 'sometimes | max:255',
	        'attachment' => 'required | file | mimes:pdf',
	        'close_date'=>'required | date'
				]);
        }
        else
        {
        	$this->validate($request,[
			'tender_no' => 'required',
	        'subject_en' => 'required | max:255',
	        'subject_ar' => 'required | max:255',
	        'desc_en' => 'required | max:255',
	        'desc_ar' => 'required | max:255',
	        'attachment' => 'required | file | mimes:pdf',
	        'close_date'=>'required | date'
			]);
        }


		$file=$request->file('attachment'); //file used to upload
		$filename=time(). '.' . $file->getClientOriginalExtension(); //rename image using timestap
		//$path=Storage::disk('tender_docs')->getDriver()->getAdapter()->getPathPix();
		//$filepath=$path.$filename;
		//dd($file->getRealPath());
		Storage::disk('tender_docs')->put($filename, File::get($file->getRealPath()));


		

		$tender->tender_no = $request->input("tender_no");
        $tender->subject_en = $request->input("subject_en");
        $tender->subject_ar = $request->input("subject_ar");
        $tender->desc_en = $request->input("desc_en");
        $tender->desc_ar = $request->input("desc_ar");
        $tender->attachment = $filename;
        $tender->close_date = $request->input("close_date");
        // if($request->input('english_only')=='on')
        // {
        // 	$tender->english_only=1;
        // }

		$tender->save();

		return redirect()->route('tenders.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tender = Tender::findOrFail($id);

		return view('tenders.show', compact('tender'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tender = Tender::findOrFail($id);

		return view('tenders.edit', compact('tender'));
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
		$tender = Tender::findOrFail($id); 

		if($request->input('english_only')=='on')
        {
        	$tender->english_only=1;

        	$this->validate($request,[
			'tender_no' => 'required',
	        'subject_en' => 'required | max:255',
	        'subject_ar' => 'sometimes | max:255',
	        'desc_en' => 'required | max:255',
	        'desc_ar' => 'sometimes | max:255',
	        'attachment' => 'sometimes | file | mimes:pdf',
	        'close_date'=>'required | date'
				]);
        }
        else
        {
        	$tender->english_only=0;

        	$this->validate($request,[
			'tender_no' => 'required',
	        'subject_en' => 'required | max:255',
	        'subject_ar' => 'required | max:255',
	        'desc_en' => 'required | max:255',
	        'desc_ar' => 'required | max:255',
	        'attachment' => 'sometimes | file | mimes:pdf',
	        'close_date'=>'required | date'
			]);
        }

		

		$filename='';
		$oldfilename=$request->old_attachment;
		if($request->hasFile('attachment'))
		{

			$file=$request->file('attachment'); //file used to upload
			$filename=time(). '.' . $file->getClientOriginalExtension();
			Storage::disk('tender_docs')->put($filename, File::get($file->getRealPath()));


			//File::delete($oldfile);
			Storage::disk('tender_docs')->delete($oldfilename);
		}
		else
		{
			$filename=$request->old_attachment;
		}



		$tender->tender_no = $request->input("tender_no");
        $tender->subject_en = $request->input("subject_en");
        $tender->subject_ar = $request->input("subject_ar");
        $tender->desc_en = $request->input("desc_en");
        $tender->desc_ar = $request->input("desc_ar");
        $tender->attachment = $filename;
        $tender->close_date = $request->input("close_date");
        // if($request->input('english_only')=='on')
        // {
        // 	$tender->english_only=1;
        // }

		$tender->save();


		return redirect()->route('tenders.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tender = Tender::findOrFail($id);
		Storage::disk('tender_docs')->delete($tender->attachment);
		$tender->delete();

		return redirect()->route('tenders.index')->with('message', 'Item deleted successfully.');
	}

}

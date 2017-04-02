<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Msr;
use Illuminate\Http\Request;
use Session;

class MsrController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function sortOrderBy(Request $request)
	{
		$name="";
		$value="";
		//return $request->requestedfor;
		if ($request->has('requestedfor')) 
		{
			$name="requestedfor";
			$value=$request->requestedfor;
		}
		elseif ($request->has('category')) 
		{
			$name="category";
			$value=$request->category;   	
		}
		elseif ($request->has('location')) 
		{
			$name="location";
			$value=$request->location;   	
		}
		elseif ($request->has('requeststatus')) 
		{
			$name="requeststatus";
			$value=$request->requeststatus;   	
		}
		elseif ($request->has('workstatus')) 
		{
			$name="workstatus";
			$value=$request->workstatus;   	
		}



		$msrs = Msr::where($name,'=',$value)->paginate(20);

		return view('msrs.index', compact('msrs'));
	}
	public function index()
	{
		$msrs = Msr::orderBy('id', 'desc')->paginate(20);

		return view('msrs.index', compact('msrs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// return view('msrs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		// $this->validate($request,[
		// 	'msr_refno' => 'required',
		// 	'reqstdfor' => 'required',
		// 	'location' => 'required',
		// 	'reqstdate' => 'required',
		// 	'reqsttime' => 'required',
		// 	'msrcategory' => 'required',
		// 	'amount' => 'required',
		// 	'msrapprovals' => 'required',
		// 	'approvals' => 'required',
		// 	'priority' => 'required'
		// 	]);

		// $msr = new Msr();

		// $msr->msr_refno = $request->input("msr_refno");
  //       $msr->requestedby = $request->input("requestedby");
  //       $msr->perlocation = $request->input("perlocation");
  //       $msr->contact = $request->input("contact");
  //       $msr->reqstdfor = $request->input("reqstdfor");
  //       $msr->requestreceievedby = $request->input("requestreceievedby");
  //       $msr->location = $request->input("location");
  //       $msr->reqstdate = $request->input("reqstdate");
  //       $msr->reqsttime = $request->input("reqsttime");     
		// $msr->requestcategory = $request->input("requestcategory");
  //       $msr->desc_of_reqst = $request->input("desc_of_reqst");
  //       $msr->msrcategory = $request->input("msrcategory");
  //       $msr->amount = $request->input("amount");
  //       $msr->msrapprovals = $request->input("msrapprovals");
  //       $msr->preferredaccess = $request->input("preferredaccess");
  //       $msr->incidentreport = $request->input("incidentreport");
  //       $msr->approvals = $request->input("approvals");
  //       $msr->acprejectby = $request->input("acprejectby");
  //       $msr->priority = $request->input("priority");
  //       $msr->reason_for_rejection = $request->input("reason_for_rejection");
  //       $msr->task = $request->input("task");
  //       $msr->remarks = $request->input("remarks");
  //       $msr->comments = $request->input("comments");

		// $msr->save();

		// return redirect()->route('msrs.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$msr = Msr::findOrFail($id);

		return view('msrs.show', compact('msr'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$msr = Msr::findOrFail($id);

		return view('msrs.edit', compact('msr'));
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
		

		$msr = Msr::findOrFail($id);

		$this->validate($request,[
			'msr_refno' => 'required',
			'requeststatus' => 'required',
			'comments' => 'required_if:requeststatus,rejected',
			'workstatus' => 'required_if:requeststatus,accepted',
			]);

		$workstatus ="";
		if($request->input("requeststatus") == "accepted")
			$workstatus = $request->input("workstatus");	
		
		$comments="";
			if($request->input("requeststatus") == "rejected")
				$comments=$request->input("comments");

		$msr->msr_refno = $request->input("msr_refno");
		$msr->requeststatus = $request->input("requeststatus");
		$msr->comments = $comments;
		$msr->workstatus = 	$workstatus;
		$msr->save();

		Session::flash('create_msg','Item created successfully.');
		return redirect()->route('msrs.index')->with('message', 'Item updated successfully.');



		// $msr = Msr::findOrFail($id);

		// $msr->msr_refno = $request->input("msr_refno");
		// $msr->requestedby = $request->input("requestedby");
		// $msr->perlocation = $request->input("perlocation");
		// $msr->contact = $request->input("contact");
		// $msr->reqstdfor = $request->input("reqstdfor");
		// $msr->requestreceievedby = $request->input("requestreceievedby");
		// $msr->location = $request->input("location");
		// $msr->reqstdate = $request->input("reqstdate");
		// $msr->reqsttime = $request->input("reqsttime");
		// $msr->requestcategory = $request->input("requestcategory");
		// $msr->desc_of_reqst = $request->input("desc_of_reqst");
		// $msr->msrcategory = $request->input("msrcategory");
		// $msr->amount = $request->input("amount");
		// $msr->msrapprovals = $request->input("msrapprovals");
		// $msr->preferredaccess = $request->input("preferredaccess");
		// $msr->incidentreport = $request->input("incidentreport");
		// $msr->approvals = $request->input("approvals");
		// $msr->acprejectby = $request->input("acprejectby");
		// $msr->priority = $request->input("priority");
		// $msr->reason_for_rejection = $request->input("reason_for_rejection");
		// $msr->task = $request->input("task");
		// $msr->remarks = $request->input("remarks");
		// $msr->comments = $request->input("comments");

		// $msr->save();

		// return redirect()->route('msrs.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$msr = Msr::findOrFail($id);
		$msr->delete();

		return redirect()->route('msrs.index')->with('message', 'Item deleted successfully.');
	}

}

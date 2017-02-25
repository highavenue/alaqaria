<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TenderReceipt;
use Illuminate\Http\Request;
use App\Tender;
use Illuminate\Support\Facades;

class TenderReceiptController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tender_receipts = TenderReceipt::orderBy('id', 'desc')->paginate(10);
		//$tenders=Tender::get('tendor_no');
		return view('tender_receipts.index', compact('tender_receipts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tenders = Tender::orderBy('id', 'desc')->get();
		return view('tender_receipts.create')->withTenders($tenders);
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
			'company_name' => 'required | max:255',
	        'receipt_number' => 'required | max:255',
	        'tender_id' => 'required',
	        'receiver_name' => 'required | max:255'
			]);
		$tender_receipt = new TenderReceipt();

		$random_password = str_random(6);


		$tender_receipt->company_name = $request->input("company_name");
        $tender_receipt->receipt_number = $request->input("receipt_number");
        $tender_receipt->tender_id = $request->input("tender_id");
        $tender_receipt->receiver_name = $request->input("receiver_name");
        $tender_receipt->password = $random_password;

		$tender_receipt->save();

		return redirect()->route('tender_receipts.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tender_receipt = TenderReceipt::findOrFail($id);

		return view('tender_receipts.show', compact('tender_receipt'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tender_receipt = TenderReceipt::findOrFail($id);
		$tenders = Tender::orderBy('id', 'desc')->get();
		return view('tender_receipts.edit', compact('tender_receipt'))->withTenders($tenders);
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
			'company_name' => 'required | max:255',
	        'receipt_number' => 'required | max:255',
	        'tender_id' => 'required',
	        'receiver_name' => 'required | max:255',
	        'password'=>'required | max:8'
			]);


		$tender_receipt = TenderReceipt::findOrFail($id);

		$tender_receipt->company_name = $request->input("company_name");
        $tender_receipt->receipt_number = $request->input("receipt_number");
        $tender_receipt->tender_id = $request->input("tender_id");
        $tender_receipt->receiver_name = $request->input("receiver_name");
        $tender_receipt->password = $request->input("password");

		$tender_receipt->save();

		return redirect()->route('tender_receipts.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tender_receipt = TenderReceipt::findOrFail($id);
		$tender_receipt->delete();

		return redirect()->route('tender_receipts.index')->with('message', 'Item deleted successfully.');
	}

}

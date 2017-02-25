@extends('layout')
@section('header')
<div class="page-header">
        <h1>TenderReceipts / Show #{{$tender_receipt->id}}</h1>
        <form action="{{ route('tender_receipts.destroy', $tender_receipt->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('tender_receipts.edit', $tender_receipt->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="company_name">Company Name</label>
                     <p class="form-control-static">{{$tender_receipt->company_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="receipt_number">Receipt Number</label>
                     <p class="form-control-static">{{$tender_receipt->receipt_number}}</p>
                </div>
                    <div class="form-group">
                     <label for="tender_id">Tender Number</label>
                     <p class="form-control-static">{{$tender_receipt->tender->tender_no}}</p>
                </div>
                    <div class="form-group">
                     <label for="receiver_name">Receiver Name</label>
                     <p class="form-control-static">{{$tender_receipt->receiver_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="password">Password</label>
                     <p class="form-control-static">{{$tender_receipt->password}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('tender_receipts.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
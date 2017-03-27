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

<div class="row" >
      <div class="col-md-6 col-md-offset-3" style="border: 2px solid black;" id="printable">
       <table class="table">
       <caption class="text-center" style="padding-bottom: 0px;">
            <div class="row">
                <div class="col-md-12">
                    <img src="http://alaqaria.com.qa/data/themes/default/images/logo.jpg" style="width: 100px">
<!--                    <p style="font-size: 20px; font-weight: bold">ALAQARIA</p> -->
                    <p style="font-size: 16px; font-weight: bold; padding-top: 5px;">Tender Document Download Details</p>
                </div>
            </div>
       </caption>
       <tbody>
            <tr>
                <td class="first" style="padding-left: 30px;">Company Name</td>
                <td>:</td>
                <td class="last">{{$tender_receipt->company_name}}</td>
            </tr>
            <tr>
                <td class="first" style="padding-left: 30px;">Receiver Name</td>
                <td>:</td>
                <td class="last">{{$tender_receipt->receiver_name}}</td>
            </tr>
            <tr>
                <td class="first" style="padding-left: 30px;">Tender Number</td>
                <td>:</td>
                <td class="last">{{$tender_receipt->tender->tender_no}}</td>
            </tr>
            <tr>
                <td class="first" style="padding-left: 30px;">Receipt Number</td>
                <td>:</td>
                <td class="last">{{$tender_receipt->receipt_number}}</td>
            </tr>
            <tr>
                <td class="first" style="padding-left: 30px;">Password</td>
                <td>:</td>
                <td class="last">{{$tender_receipt->password}}</td>
            </tr>
       </tbody>     
       </table>

      
      </div>
      <div class="col-md-3"></div>
      <div class="col-md-6 col-md-offset-3" style="padding: 0px; margin-top: 50px;">
        
        <a href="#" class="btn btn-success btn-lg btn-block" onClick="window.print()">
            <span class="glyphicon glyphicon-print"></span> Print 
        </a>
      </div>
    </div>









    <div class="row">
        <div class="col-md-12">

            <form action="#">
               {{--  <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div> --}}
{{--                 <div class="form-group">
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
                </div> --}}
            </form>

            <a class="btn btn-link" href="{{ route('tender_receipts.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection

@section('css')

<style type="text/css">
        @media print {
        * 
        {    
/*       display: none !important;*/
            visibility: hidden;
        }

       #printable, #printable *
        {
/*       display: block !important;*/
            visibility: visible;
                
        }
        #printable 
        {
            position: absolute;
            left: 0px;
            top: 0px;   
        }
    }

    td.first
    {
        min-width: 12 0px;
    }
    td.last{
        word-wrap:break-word
    }

</style>

@endsection
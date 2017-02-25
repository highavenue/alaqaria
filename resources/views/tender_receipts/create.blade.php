@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> TenderReceipts / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('tender_receipts.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('company_name')) has-error @endif">
                       <label for="company_name-field">Company_name</label>
                    <input type="text" id="company_name-field" name="company_name" class="form-control" value="{{ old("company_name") }}"/>
                       @if($errors->has("company_name"))
                        <span class="help-block">{{ $errors->first("company_name") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('receipt_number')) has-error @endif">
                       <label for="receipt_number-field">Receipt_number</label>
                    <input style="width: 200px;" type="text" id="receipt_number-field" name="receipt_number" class="form-control" value="{{ old("receipt_number") }}"/>
                       @if($errors->has("receipt_number"))
                        <span class="help-block">{{ $errors->first("receipt_number") }}</span>
                       @endif
                    </div>

                    {{-- <div class="form-group @if($errors->has('tender_id')) has-error @endif">
                       <label for="tender_id-field">tender_id</label>
                    <input type="text" id="tender_id-field" name="tender_id" class="form-control" value="{{ old("tender_id") }}"/>
                       @if($errors->has("tender_id"))
                        <span class="help-block">{{ $errors->first("tender_id") }}</span>
                       @endif
                    </div> --}}

                     <div class="form-group @if($errors->has('tender_id')) has-error @endif">
                       <label for="tender_id-field">Tender_Number</label>
                       <Select style="width: 200px;" name="tender_id" id="tender_id-field" class="form-control" value="{{ old("tender_id") }}">
                       <option value="" disabled selected>Select your option</option>
                        @foreach($tenders as $tender)
                          <option value="{{$tender->id}}">{{$tender->tender_no}}</option>
                        @endforeach
                       </Select>
                   {{--  <input type="text" id="tender_id-field" name="tender_id" class="form-control" value="{{ old("tender_id") }}"/> --}}
                       @if($errors->has("tender_id"))
                        <span class="help-block">{{ $errors->first("tender_id") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('receiver_name')) has-error @endif">
                       <label for="receiver_name-field">Receiver_name</label>
                    <input type="text" id="receiver_name-field" name="receiver_name" class="form-control" value="{{ old("receiver_name") }}"/>
                       @if($errors->has("receiver_name"))
                        <span class="help-block">{{ $errors->first("receiver_name") }}</span>
                       @endif
                    </div>



                    <div style="display: none;" class="form-group @if($errors->has('password')) has-error @endif">
                       <label for="password-field">Password</label>
                    <input type="text" id="password-field" name="password" class="form-control" value="{{ old("password") }}"/>
                       @if($errors->has("password"))
                        <span class="help-block">{{ $errors->first("password") }}</span>
                       @endif
                    </div>

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('tender_receipts.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection

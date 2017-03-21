@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Msrs / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('msrs.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('msr_refno')) has-error @endif">
                       <label for="msr_refno-field">Msr_refno</label>
                    <input type="text" id="msr_refno-field" name="msr_refno" class="form-control" value="{{ old("msr_refno") }}"/>
                       @if($errors->has("msr_refno"))
                        <span class="help-block">{{ $errors->first("msr_refno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('requestedby')) has-error @endif">
                       <label for="requestedby-field">Requestedby</label>
                    <input type="text" id="requestedby-field" name="requestedby" class="form-control" value="{{ old("requestedby") }}"/>
                       @if($errors->has("requestedby"))
                        <span class="help-block">{{ $errors->first("requestedby") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('perlocation')) has-error @endif">
                       <label for="perlocation-field">Perlocation</label>
                    <input type="text" id="perlocation-field" name="perlocation" class="form-control" value="{{ old("perlocation") }}"/>
                       @if($errors->has("perlocation"))
                        <span class="help-block">{{ $errors->first("perlocation") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('contact')) has-error @endif">
                       <label for="contact-field">Contact</label>
                    <input type="text" id="contact-field" name="contact" class="form-control" value="{{ old("contact") }}"/>
                       @if($errors->has("contact"))
                        <span class="help-block">{{ $errors->first("contact") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('reqstdfor')) has-error @endif">
                       <label for="reqstdfor-field">Reqstdfor</label>
                    <input type="text" id="reqstdfor-field" name="reqstdfor" class="form-control" value="{{ old("reqstdfor") }}"/>
                       @if($errors->has("reqstdfor"))
                        <span class="help-block">{{ $errors->first("reqstdfor") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('reqstdate')) has-error @endif">
                       <label for="reqstdate-field">Date</label>
                    <input type="date" id="reqstdate-field" name="reqstdate" class="form-control" value="{{ old("reqstdate") }}"/>
                       @if($errors->has("reqstdate"))
                        <span class="help-block">{{ $errors->first("reqstdate") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('reqsttime')) has-error @endif">
                       <label for="reqsttime-field">Date</label>
                    <input type="time" id="reqsttime-field" name="reqsttime" class="form-control" value="{{ old("reqsttime") }}"/>
                       @if($errors->has("reqsttime"))
                        <span class="help-block">{{ $errors->first("reqsttime") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('requestreceievedby')) has-error @endif">
                       <label for="requestreceievedby-field">Requestreceievedby</label>
                    <input type="text" id="requestreceievedby-field" name="requestreceievedby" class="form-control" value="{{ old("requestreceievedby") }}"/>
                       @if($errors->has("requestreceievedby"))
                        <span class="help-block">{{ $errors->first("requestreceievedby") }}</span>
                       @endif
                    </div>


                    <div class="form-group @if($errors->has('location')) has-error @endif">
                       <label for="location-field">Location</label>
                    <input type="text" id="location-field" name="location" class="form-control" value="{{ old("location") }}"/>
                       @if($errors->has("location"))
                        <span class="help-block">{{ $errors->first("location") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('requestcategory')) has-error @endif">
                       <label for="requestcategory-field">Requestcategory</label>
                    <input type="text" id="requestcategory-field" name="requestcategory" class="form-control" value="{{ old("requestcategory") }}"/>
                       @if($errors->has("requestcategory"))
                        <span class="help-block">{{ $errors->first("requestcategory") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('desc_of_reqst')) has-error @endif">
                       <label for="desc_of_reqst-field">Desc_of_reqst</label>
                    <textarea class="form-control" id="desc_of_reqst-field" rows="3" name="desc_of_reqst">{{ old("desc_of_reqst") }}</textarea>
                       @if($errors->has("desc_of_reqst"))
                        <span class="help-block">{{ $errors->first("desc_of_reqst") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('msrcategory')) has-error @endif">
                       <label for="msrcategory-field">Msrcategory</label>
                    <input type="text" id="msrcategory-field" name="msrcategory" class="form-control" value="{{ old("msrcategory") }}"/>
                       @if($errors->has("msrcategory"))
                        <span class="help-block">{{ $errors->first("msrcategory") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('amount')) has-error @endif">
                       <label for="amount-field">Amount</label>
                    <input type="text" id="amount-field" name="amount" class="form-control" value="{{ old("amount") }}"/>
                       @if($errors->has("amount"))
                        <span class="help-block">{{ $errors->first("amount") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('msrapprovals')) has-error @endif">
                       <label for="msrapprovals-field">Msrapprovals</label>
                    <input type="text" id="msrapprovals-field" name="msrapprovals" class="form-control" value="{{ old("msrapprovals") }}"/>
                       @if($errors->has("msrapprovals"))
                        <span class="help-block">{{ $errors->first("msrapprovals") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('preferredaccess')) has-error @endif">
                       <label for="preferredaccess-field">Preferredaccess</label>
                    <input type="text" id="preferredaccess-field" name="preferredaccess" class="form-control" value="{{ old("preferredaccess") }}"/>
                       @if($errors->has("preferredaccess"))
                        <span class="help-block">{{ $errors->first("preferredaccess") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('incidentreport')) has-error @endif">
                       <label for="incidentreport-field">Incidentreport</label>
                    <input type="text" id="incidentreport-field" name="incidentreport" class="form-control" value="{{ old("incidentreport") }}"/>
                       @if($errors->has("incidentreport"))
                        <span class="help-block">{{ $errors->first("incidentreport") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('approvals')) has-error @endif">
                       <label for="approvals-field">Approvals</label>
                    <input type="text" id="approvals-field" name="approvals" class="form-control" value="{{ old("approvals") }}"/>
                       @if($errors->has("approvals"))
                        <span class="help-block">{{ $errors->first("approvals") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('acprejectby')) has-error @endif">
                       <label for="acprejectby-field">Acprejectby</label>
                    <input type="text" id="acprejectby-field" name="acprejectby" class="form-control" value="{{ old("acprejectby") }}"/>
                       @if($errors->has("acprejectby"))
                        <span class="help-block">{{ $errors->first("acprejectby") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('priority')) has-error @endif">
                       <label for="priority-field">Priority</label>
                    <input type="text" id="priority-field" name="priority" class="form-control" value="{{ old("priority") }}"/>
                       @if($errors->has("priority"))
                        <span class="help-block">{{ $errors->first("priority") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('reason_for_rejection')) has-error @endif">
                       <label for="reason_for_rejection-field">Reason_for_rejection</label>
                    <textarea class="form-control" id="reason_for_rejection-field" rows="3" name="reason_for_rejection">{{ old("reason_for_rejection") }}</textarea>
                       @if($errors->has("reason_for_rejection"))
                        <span class="help-block">{{ $errors->first("reason_for_rejection") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('task')) has-error @endif">
                       <label for="task-field">Task</label>
                    <input type="text" id="task-field" name="task" class="form-control" value="{{ old("task") }}"/>
                       @if($errors->has("task"))
                        <span class="help-block">{{ $errors->first("task") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('remarks')) has-error @endif">
                       <label for="remarks-field">Remarks</label>
                    <textarea class="form-control" id="remarks-field" rows="3" name="remarks">{{ old("remarks") }}</textarea>
                       @if($errors->has("remarks"))
                        <span class="help-block">{{ $errors->first("remarks") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('comments')) has-error @endif">
                       <label for="comments-field">Comments</label>
                    <textarea class="form-control" id="comments-field" rows="3" name="comments">{{ old("comments") }}</textarea>
                       @if($errors->has("comments"))
                        <span class="help-block">{{ $errors->first("comments") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('msrs.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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

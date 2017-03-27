@extends('layout')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
<div class="page-header">
  <h1><i class="glyphicon glyphicon-edit"></i> Msrs / Edit #{{$msr->id}}</h1>
</div>
@endsection

@section('content')
@include('error')

<div class="row">
  <div class="col-md-12">

    <form action="{{ route('msrs.update', $msr->id) }}" method="POST">
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group @if($errors->has('msr_refno')) has-error @endif">
       <label for="msr_refno-field">MSR REFNO</label>
       <input type="text" id="msr_refno-field" name="msr_refno" class="form-control" value="{{ is_null(old("msr_refno")) ? $msr->msr_refno : old("msr_refno") }}"/>
       @if($errors->has("msr_refno"))
       <span class="help-block">{{ $errors->first("msr_refno") }}</span>
       @endif
     </div>


     <div class="form-group  @if($errors->has('requeststatus')) has-error @endif">
      <label for="requeststatus">REQUEST STATUS</label>
      <select class="form-control" id="requeststatus" name="requeststatus" value="{{ is_null(old("requeststatus")) ? $msr->requeststatus : old("requeststatus") }}" style="width:250px;">
       <option value="">Select</option>
       <option value="accepted" @if($msr->requeststatus=='accepted') selected="selected" @endif>ACCEPTED</option>
       <option value="rejected" @if($msr->requeststatus=='rejected') selected="selected" @endif>REJECTED</option>
     </select>@if($errors->has("requeststatus"))
     <span class="help-block" style="color: red;" >{{ "requeststatus field is required" }}</span>
     @endif
   </div>


   <div class="form-group @if($errors->has('comments')) has-error @endif" id="commentblock">
     <label for="comments-field">COMMENTS( IF REJECTED PLEASE SPECIFY )</label>
     <textarea class="form-control" id="comments-field" rows="3" name="comments">{{ is_null(old("comments")) ? $msr->comments : old("comments") }}</textarea>
     @if($errors->has("comments"))
     <span class="help-block">{{ $errors->first("comments") }}</span>
     @endif
   </div>

   <div class="form-group  @if($errors->has('workstatus')) has-error @endif" id="workstatusblock">
    <label for="workstatus">WORK STATUS</label>
    <select class="form-control" id="workstatus" name="workstatus" value="{{ is_null(old("workstatus")) ? $msr->workstatus : old("workstatus") }}" style="width:250px;">
      <option value="">Select</option>
      <option value="scheduled" @if($msr->workstatus=='scheduled') selected="selected" @endif >SCHEDULED</option>
      <option value="inprogress" @if($msr->workstatus=='inprogress') selected="selected" @endif >IN PROGRESS</option>
      <option value="pending" @if($msr->workstatus=='pending') selected="selected" @endif >PENDING</option>
      <option value="completed" @if($msr->workstatus=='completed') selected="selected" @endif >COMPLETED</option>
  </select>@if($errors->has("workstatus"))
  <span class="help-block" style="color: red;" >{{ "workstatus field is required" }}</span>
  @endif
</div>

<div class="well well-sm">
  <button type="submit" class="btn btn-primary">Save</button>
  <a class="btn btn-link pull-right" href="{{ route('msrs.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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
<script type="text/javascript">

$( document ).ready(function() {
   var value = $("#requeststatus").val();
    if(value=="rejected")
    {
     $('#commentblock').show();
     $('#workstatusblock').hide();
   }
   else
   {
     $('#commentblock').hide();
     $('#workstatusblock').show();
   }
});
  

  $('#requeststatus').on('change', function() {
    var value = $("#requeststatus").val();
    if(value=="rejected")
    {
     $('#commentblock').show();
     $('#workstatusblock').hide();
   }
   else
   {
     $('#commentblock').hide();
     $('#workstatusblock').show();
   }
 });
</script>
@endsection

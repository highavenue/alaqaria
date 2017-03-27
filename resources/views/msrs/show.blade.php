@extends('layout')
@section('css')
<style type="text/css">

  body {
    -webkit-print-color-adjust: economy | exact;
  }

  *[role="form"] {
    max-width: 90%;
    padding: 15px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 0.3em;
  }
/*
    *[role="form"] h2 {
        margin-left: 5em;
        margin-bottom: 1em;
      }*/

      .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
        padding: 4px !important; 
    /*line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;*/
  }
  .table-custom {
    border: 2px solid #000 !important;
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
    border-spacing: 0;
    border-collapse: collapse;
  }

  table > thead > tr > th,
  table > tbody > tr > th,
  table > tfoot > tr > th,
  table > thead > tr > td,
  table > tbody > tr > td,
  table > tfoot > tr > td {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    border: 1px solid #000 !important;
  }

  table > thead > tr > th {
    vertical-align: bottom;
    border-bottom: 2px solid #ddd;
  }


  .success
  {
    background-color: #dff0d8;
  }

  @media print {
tr.vendorListHeading {
    background-color: #1a4567 !important;
    -webkit-print-color-adjust: exact; 
}}

@media print {
    .vendorListHeading th {
    color: white !important;
}}

</style>
@endsection


@section('header')
<div class="page-header">
  <h1>Msrs / Show #{{$msr->id}}</h1>
  <form action="{{ route('msrs.destroy', $msr->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="btn-group pull-right" role="group" aria-label="...">
      <a class="btn btn-warning btn-group" role="group" href="{{ route('msrs.edit', $msr->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
      <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
    </div>
  </form>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">







    @include('error')
    <form class="form-horizontal" role="form" action="{{ route('msrs.store') }}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">


      <div class="table-responsive" class="form-group">   

        <?php
        $msrconstant=App\Msrconstant::where('id','=',$msr->msrconstant_id)->first();
        $date = new Carbon\Carbon($msrconstant->revisiondate);
                          // $date->format('l jS \\of F Y h:i A');
        ?>

        <table class="table table-custom" class="table" border="1">
          <tbody>
            <tr>
              <td colspan="4" class="text-center success" style="color:#0063d3;"><h2 style="margin: 0px !important;">MAINTENANCE and SERVICE REQUEST(MSR)</h2></td>
              <td width="147" rowspan="3" style="text-align: center;vertical-align: middle;">
                <img src="/uploads/img/logo/logo.jpg" width="100px;"">
              </td>
            </tr>
            <tr>
              <td style="font-size: 1.2em;font-weight:bold;color:#0063d3;text-align:center;">{{$msrconstant->documentno}}</td>
              <td style="font-size: 1.2em;font-weight:bold;color:#0063d3;text-align:center;">{{$msrconstant->revisionno}}</td>
              <td style="font-size: 1.2em;font-weight:bold;color:#0063d3;text-align:center;">{{strtoupper($date->format('d F Y'))}}</td>
              <td style="font-size: 1.2em;font-weight:bold;color:#0063d3;text-align:center;">{{$msr->msr_refno}}</td>
            </tr>
            <tr>
              <td style="font-size:.9em;font-weight: bold;text-align:center;" class="success">DOCUMENT NUMBER</td>
              <td style="font-size:.9em;font-weight: bold;text-align:center;" class="success">REVISION NO.</td>
              <td style="font-size:.9em;font-weight: bold;text-align:center;" class="success">REVISION DATE</td>
              <td style="font-size:.9em;font-weight: bold;text-align:center;" class="success">MSR REFERENCE NO.</td>
            </tr>
          </tbody>
        </table>
      </div>


      <div class="table-responsive" class="form-group">  

        <table class="table table-custom" class="table" border="1">
          <tbody>
            <tr>
              <td width="13%;" style="font-size:.9em;font-weight: bold;text-align:center;">REQUESTED BY:</td>
              <td colspan="5">{{$msr->requestedby}}</td>
              <td width="25%" class="success" ">REQUESTED FOR:</td>
            </tr>
            <tr>
              <td style="font-size:.9em;font-weight: bold;text-align:center;">LOCATION</td>
              <td colspan="3">{{$msr->location}}</td>
              <td width="18%" style="font-size:.9em;font-weight: bold;text-align:center;">CONTACT#:</td>
              <td width="20%">{{$msr->contactno}}</td>
              <td rowspan="2" class="success" ">
                <label><input type="radio" name="reqstdfor" disabled="disabled" value="Maintenance" @if($msr->requestedfor=="Maintenance")checked="checked"@endif>MAINTENANCE</label><br>
                <label><input type="radio" name="reqstdfor" disabled="disabled" value="Services" @if($msr->requestedfor=="Services")checked="checked"@endif>SERVICES</label>
              </td>
            </tr>
            <?php  
            $date = new Carbon\Carbon($msr->created_at);
            ?>
            <tr>
              <td style="font-size:.9em;font-weight: bold;text-align:center;">DATE:</td>
              <td>{{$date->format('d-m-Y')}}</td>
              <td width="4%" style="font-size:.9em;font-weight: bold;text-align:center;">TIME:</td>
              <td>{{$date->format('h:i A')}}</td>
              <td style="font-size:.9em;font-weight: bold;text-align:center;">REQUEST RECEIVED BY:</td>
              <td></td>
            </tr>
          </tbody>
        </table>

      </div>

{{-- <div class="table-responsive" class="form-group">  

</div> --}}




<div class="table-responsive" class="form-group">
  <table class="table table-custom" class="table">
   <tr>
    <td colspan="8" class="success text-center"><label>COST CENTRE</label> @if($errors->has("location"))
      <span class="help-block" style="color: red;" >{{ $errors->first("location") }}</span>
      @endif</td>
    </tr>
    <tr class="text-center" style="font-size:0.9em;font-weight: bold;">
      <td colspan="2" width="25%">MESAIEED</td>
      <td colspan="2" width="19%">AL KHOR</td>
      <td>DUKHAN</td>
      <td>ZEKREET</td>
      <td>DOHA</td>
      <td>OTHERS</td>
    </tr>
    <tr style="font-size:.9em;font-weight: bold;">
     <td><label><input type="radio" name="location" value="Village I" @if($msr->center=="Village I")checked="checked"@endif disabled="disabled">Village I</label></td>
     <td><label><input type="radio" name="location" value="Village 451 pI" @if($msr->center=="Village 451 pI")checked="checked"@endif disabled="disabled">Village 451 pI</label></td>
     <td rowspan="2"><label><input type="radio" name="location" value="Dolphin" @if($msr->center=="Dolphin")checked="checked"@endif disabled="disabled">Dolphin</label></td>
     <td rowspan="2"><label><input type="radio" name="location" value="Shell" @if($msr->center=="Shell")checked="checked"@endif disabled="disabled">Shell</label></td>
     <td rowspan="2"><label><input type="radio" name="location" value="Souq" @if($msr->center=="Souq" && $msr->location=="dukhan")checked="checked"@endif disabled="disabled">Souq</label></td>
     <td rowspan="2"><label><input type="radio" name="location" value="Labor Camp" @if($msr->center=="Labor Camp")checked="checked"@endif disabled="disabled">Labor Camp</label></td>

     <td rowspan="4"><label><input type="radio" name="location" value="ALAQARIA TOWER" @if($msr->center=="ALAQARIA TOWER")checked="checked"@endif disabled="disabled">ALAQARIA TOWER</label></td>
     <td rowspan="4"><input class="form-control" id="requestcategory" name="location" type="text" @if($msr->location=="others")value="{{$msr->center}}"@endif disabled="disabled"></td>
   </tr>
   <tr style="font-size:.9em;font-weight: bold;">
     <td><label><input type="radio" name="location" value="Village II" @if($msr->center=="Village II")checked="checked"@endif disabled="disabled">Village II</label></td>
     <td><label><input type="radio" name="location" value="Village 451 pII" @if($msr->center=="Village 451 pII")checked="checked"@endif disabled="disabled">Village 451 pII</label></td>
   </tr>
   <tr style="font-size:.9em;font-weight: bold;">
     <td><label><input type="radio" name="location" value="Village III"  @if($msr->center=="Village III")checked="checked"@endif disabled="disabled">Village III</label></td>
     <td><label><input type="radio" name="location" value="Dunes Mall" @if($msr->center=="Dunes Mall")checked="checked"@endif disabled="disabled">Dunes Mall</label></td>
     <td rowspan="2"><label><input type="radio" name="location" value="QATAR GAS" @if($msr->center=="QATAR GAS")checked="checked"@endif disabled="disabled">QATAR GAS</label></td>

     <td rowspan="2"><label><input type="radio" name="location" value="RAS GAS"  @if($msr->center=="RAS GAS")checked="checked"@endif disabled="disabled">RAS GAS</label></td>
     <td rowspan="2"><label><input type="radio" name="location" value="ALAQARIA GARDENS COMPOUND" @if($msr->center=="ALAQARIA GARDENS COMPOUND")checked="checked"@endif disabled="disabled">ALAQARIA GARDENS COMPOUND</label></td>
     <td rowspan="2"><label><input type="radio" name="location" value="DSSA" @if($msr->center=="DSSA")checked="checked"@endif disabled="disabled">DSSA</label></td>
   </tr>
   <tr style="font-size:.9em;font-weight: bold;">
     <td><label><input type="radio" name="location" value="Village 393" @if($msr->center=="Village 393")checked="checked"@endif disabled="disabled">Village 393</label></td>
     <td><label><input type="radio" name="location" value="45 Flats(BC)" @if($msr->center=="45 Flats(BC)")checked="checked"@endif disabled="disabled">45 Flats(BC)</label></td>
   </tr>
   <tr style="font-size:.9em;font-weight: bold;">
     <td><label><input type="radio" name="location" value="Souq" @if($msr->center=="Souq" && $msr->location=="mesaieed")checked="checked"@endif disabled="disabled">Souq</label></td>
     <td><label><input type="radio" name="location" value="Commercial ShopsCommercial Shops" @if($msr->center=="Commercial Shops")checked="checked"@endif disabled="disabled">Commercial Shops</label></td>
     <td colspan="2" style="text-align: center;vertical-align: middle;">REQUEST CATEGORY</td>
     <td colspan="4" style="font-weight: normal;font-size: 14px;vertical-align: middle;">{{$msr->category}}</td>
   </tr>

 </table>        
</div>    


<div class="table-responsive" class="form-group">
  <table class="table table-custom" class="table" style="font-size:.9em;font-weight: bold;">
    <tr>
      <td class="success text-center" colspan="8"><label>DESCRIPTION OF REQUEST</label></td>
    </tr>
    <tr>
      <td colspan="8"><textarea style="width:100%;height:100px;" name="desc" disabled="disabled" >{{$msr->desc}} </textarea></td>
    </tr>
    <tr>
      <td class="success" colspan="2" style="text-align: center;vertical-align: middle;" width="25%"><label> MSR CATEGORY </label></td>
      <td colspan="2" style="vertical-align: middle;" width="25%"><label><input type="radio" name="msrcategory" value="nonchargeable">NON-CHARGEABLE</label></td>
      <td style="vertical-align: middle;" width="25%"><label><input type="radio" name="msrcategory" value="chargeable">CHARGEABLE</label></td>
      <td class="success" colspan="3" width="25%">AMOUNT:(QRs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
    </tr>
    <tr>
      <td rowspan="2" class="success" style="text-align: center;vertical-align: middle;"><label> MSR APPROVALS</label></td>
      <td rowspan="2" style="vertical-align: middle;"><label><input type="radio" name="msrapprovals" value="internal">INTERNAL(BY ALAQARIA)</label>
      </td>
      <td rowspan="2" colspan="2" style="vertical-align: middle;"><label><input type="radio" name="msrapprovals" value="external">EXTERNAL(NON-ALAQARIA)</label></td>
      <td><label>PREFERRED ACCESS</label></td>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td><label>INCIDENT REPORT/TENANT VIOLATION REPORT REF.</label></td>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td ><label><input type="radio" name="approvals" value="accepted" @if($msr->requeststatus=="accepted")checked="checked"@endif disabled="disabled">APPROVED</label>
      </td>
      <td colspan="3" style="vertical-align: middle;">DATE : </td>
      <td rowspan="2" style="text-align: center;vertical-align: middle;"><label>PRIORITY</label>
      </td>
      <td rowspan="2" style="vertical-align: middle;"><input type="radio" name="priority" value="high" >HIGH</td>
      <td rowspan="2" style="vertical-align: middle;"><input type="radio" name="priority" value="medium">MEDIUM</td>
      <td rowspan="2" style="vertical-align: middle;"><input type="radio" name="priority" value="low">LOW</td>
    </tr>
    <tr>
      <td ><label><input type="radio" name="approvals" value="rejected" @if($msr->requeststatus=="rejected")checked="checked"@endif disabled="disabled">REJECTED</label>
      </td>
      <td colspan="2" style="vertical-align: middle;">BY : </td>
    </tr>
    <tr>
      <td colspan="8">REASON FOR REJECTION OF REQUEST:<textarea style="width:100%;height:90px;" name="reason_for_rejection" disabled="disabled"> {{$msr->comments}}</textarea></td>
    </tr>
  </table>
</div>  


<div class="table-responsive" class="form-group">
  <table class="table table-custom" class="table" style="font-size:0.9em;font-weight: bold;">
    <tr>
      <td colspan="4" class="success text-center"><label>STATUS OF MAINTENANCE AND SERVICE REQUEST</label></td>
    </tr>
    <tr>
      <td rowspan="2"><input type="radio" name="task" value="Task Completed">TASK COMPLETED <br><span style="font-size: 0.8em;">COMMENTS :</span> </td>
      <td rowspan="2" colspan="3" style="height: 100px;">REMARKS:(DELAYED/PENDING DUE TO)</td>
    </tr>
    <tr>

    </tr>
    <tr>
      <td height="70px"></td>
      <td height="70px" width="300px"></td>
      <td rowspan="2" width="200px"></td>
      <td rowspan="2" width="150px"></td>         
    </tr>
    <tr>
      <td class="text-center">REQUESTOR</td>
      <td class="text-center">ALAQARIA</td>
    </tr>
    <tr>
      <td colspan="2" class="text-center">CONFIRMED BY</td>
      <td>DATE OF COMPLETION/TIME</td>
      <td>WORK ORDER REF.</td>
    </tr>
  </table>
</div>
<div class="text-center" style="color:#c30303;">
  QATAR REAL ESTATE INVESTMENT COMPANY(ALAQARIA)-FACILITIES MANAGEMENT DIVISION
</div>





</form> <!-- /form -->

<a class="btn btn-link" href="{{ route('msrs.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

</div>
</div>

@endsection


@section('scripts')
<script type="text/javascript">

  $( document ).ready(function() {
    $('input:radio:checked').each(function() {
      $(this).removeAttr('disabled');
   });
  });
</script>

@endsection
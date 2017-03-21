 <!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <style type="text/css">
    body {
        background-color: #eee;
      }

      *[role="form"] {
        max-width: 90%;
        padding: 15px;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 0.3em;
      }

      *[role="form"] h2 {
        margin-left: 5em;
        margin-bottom: 1em;
      }

  </style>
</head>
<body>
  <div class="container">
  @include('error')
    <form class="form-horizontal" role="form" action="{{ route('msrs.store') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="table-responsive" class="form-group">       
        <table class="table table-bordered" class="table">
            <tr>
              <th colspan="4" class="success"><h2 >MAINTENANCE and SERVICE REQUEST(MSR)</h2></th>
              <td rowspan="3"><img src="/uploads/img/logo/logo.jpg" width="100px;" style="padding-top: 50px;"></td>            
            </tr>
            <tr>
              <th>FMD-MSR-01F</th>
              <th>02</th>
              <th>31 MARCH 2016</th>
              <th><input class="form-control" id="msr_refno" name="msr_refno" type="text" placeholder="Enter msr refno" value="{{ old("msr_refno") }}"> @if($errors->has("msr_refno"))
                <span class="help-block" style="color: red;" >{{ $errors->first("msr_refno") }}</span>
                @endif</th>
            </tr>
            <tr>
              <td>DOCUMENT NUMBER</td>
              <td>REVISION NO.</td>
              <td>REVISION DATE</td>
              <td >MSR REFERENCE NO.</td>
            </tr>
        </table>
      </div>
      <div class="table-responsive" class="form-group">
        <table class="table table-bordered" class="table">
          <tr>
            <td>REQUESTED BY:</td>
          <td colspan="5"><input class="form-control" id="requestedby" name="requestedby" type="text"></td>
            <td class="success">REQUESTED FOR:</td>
          </tr>
          <tr>
              <td>LOCATION</td>
              <td colspan="2"><input class="form-control" id="perlocation" name="perlocation" type="text"></td>
              <td>CONTACT#:</td>
              <td colspan="2"><input class="form-control" id="contact" name="contact" type="text"></td>
              <td rowspan="2" class="success">
                    <label><input type="radio" name="reqstdfor" value="Maintenance">MAINTENANCE</label>
                <label><input type="radio" name="reqstdfor" value="Services">SERVICES</label>
              @if($errors->has("reqstdfor"))
                <span class="help-block" style="color: red;" >{{ $errors->first("reqstdfor") }}</span>
                @endif </td>
              
            </tr>
            <tr>
              <td>DATE:</td>
              <td><input class="form-control" id="reqstdate" name="reqstdate" type="date">@if($errors->has("reqstdate"))
                <span class="help-block" style="color: red;" >{{ $errors->first("reqstdate") }}</span>
                @endif </td>
              <td>TIME:</td>
              <td><input class="form-control" id="reqsttime" name="reqsttime" type="time"> @if($errors->has("reqsttime"))
                <span class="help-block" style="color: red;" >{{ $errors->first("reqsttime") }}</span>
                @endif </td>
              <td>REQUEST RECEIVED BY:</td>
              <td><input class="form-control" id="requestreceievedby" name="requestreceievedby" type="text"></td>
            </tr>
        </table>
      </div>


        <div class="table-responsive" class="form-group">
        <table class="table table-bordered" class="table">
           <tr>
            <td colspan="8" class="success text-center"><label>COST CENTRE</label> @if($errors->has("location"))
                <span class="help-block" style="color: red;" >{{ $errors->first("location") }}</span>
                @endif</td>
           </tr>
           <tr class="text-center ">
            <td colspan="2">MESAIEED</td>
            <td colspan="2">AL KHOR</td>
            <td>DUKHAN</td>
            <td>ZEKREET</td>
            <td>DOHA</td>
            <td>OTHERS</td>
           </tr>
           <tr>
             <td><label><input type="radio" name="location" value="village1">Village I</label></td>
             <td><label><input type="radio" name="location" value="village451p1">Village 451 pI</label></td>
             <td rowspan="2"><label><input type="radio" name="location" value="dolphin">Dolphin</label></td>
             <td rowspan="2"><label><input type="radio" name="location" value="shell">Shell</label></td>
             <td rowspan="2"><label><input type="radio" name="location" value="souq">Souq</label></td>
           <td rowspan="2"><label><input type="radio" name="location" value="labourcamp">Labor Camp</label></td>
             <td rowspan="4"><label><input type="radio" name="location" value="alaqariatower">ALAQARIA TOWER</label></td>
            <td rowspan="4">Please specify<input class="form-control" id="requestcategory" name="location" type="text"></td>
           </tr>
           <tr>
             <td><label><input type="radio" name="location" value="village2">Village II</label></td>
             <td><label><input type="radio" name="location" value="village451p2">Village 451 pII</label></td>
           </tr>
           <tr>
             <td><label><input type="radio" name="location" value="village3">Village III</label></td>
             <td><label><input type="radio" name="location" value="dunesmall">Dunes Mall</label></td>
             <td rowspan="2"><label><input type="radio" name="location" value="qatargas">QATAR GAS</label></td>
             <td rowspan="2"><label><input type="radio" name="location" value="rasgas">RASGAS</label></td>
           <td rowspan="2"><label><input type="radio" name="location" value="garden">ALAQARIA GARDENS COMPOUND</label></td>
             <td rowspan="2"><label><input type="radio" name="location" value="dssa">DSSA</label></td>
           </tr>
           <tr>
             <td><label><input type="radio" name="location" value="village393">Village 393</label></td>
             <td><label><input type="radio" name="location" value="45flats">45 Flats(BC)</label></td>
           </tr>
           <tr>
             <td><label><input type="radio" name="location" value="souq">Souq</label></td>
            <td><label><input type="radio" name="location" value="commercialshops">Commercial Shops</label></td>
             <td colspan="2" style="text-align: center;vertical-align: middle;">REQUEST CATEGORY</td>
             <td colspan="4"><input class="form-control" id="requestcategory" name="requestcategory" type="text"></td>
           </tr>
          
        </table>        
      </div>    


      <div class="table-responsive" class="form-group">
        <table class="table table-bordered" class="table">
          <tr>
            <td class="success text-center" colspan="8"><label>DESCRIPTION OF REQUEST</label></td>
          </tr>
          <tr>
            <td colspan="8"><textarea style="width:100%;height:150px;" name="desc_of_reqst"> </textarea></td>
          </tr>
          <tr>
            <td class="success" colspan="2" style="text-align: center;vertical-align: middle;"><label> MSR CATEGORY </label>@if($errors->has("msrcategory"))
                <span class="help-block" style="color: red;" >{{ $errors->first("msrcategory") }}</span>
                @endif </td>
            <td colspan="2" style="vertical-align: middle;"><label><input type="radio" name="msrcategory" value="nonchargeable">NON-CHARGEABLE</label></td>
            <td style="vertical-align: middle;"><label><input type="radio" name="msrcategory" value="chargeable">CHARGEABLE</label></td>
            <td class="success" colspan="3">AMOUNT:(QRs)<input class="form-control" id="amount" name="amount" type="text">@if($errors->has("amount"))
                <span class="help-block" style="color: red;" >{{ $errors->first("amount") }}</span>
                @endif</td>
          </tr>
          <tr>
            <td rowspan="2" class="success" style="text-align: center;vertical-align: middle;"><label> MSR APPROVALS</label>@if($errors->has("msrapprovals"))
                <span class="help-block" style="color: red;" >{{ $errors->first("msrapprovals") }}</span>
                @endif </td>
            <td rowspan="2" style="vertical-align: middle;"><label><input type="radio" name="msrapprovals" value="internal">INTERNAL(By ALAQARIA)</label>
            </td>
            <td rowspan="2" colspan="2" style="vertical-align: middle;"><label><input type="radio" name="msrapprovals" value="external">EXTERNAL(NON-ALAQARIA)</label></td>
            <td><label>PREFERRED ACCESS</label></td>
            <td colspan="3"><input class="form-control" id="preferredaccess" name="preferredaccess" type="text"></td>
          </tr>
          <tr>
            <td><label>INCIDENT REPORT/TENANT VIOLATION REPORT REF.</label></td>
            <td colspan="3"><input class="form-control" id="incidentreport" name="incidentreport" type="text"></td>
          </tr>
          <tr>
            <td ><label><input type="radio" name="approvals" value="approved">APPROVED</label>
            </td>
            <td colspan="3"> <label>DATE<input type="date" name="date"></label></td>
            <td rowspan="2" style="text-align: center;vertical-align: middle;"><label>PRIORITY</label>
            @if($errors->has("priority"))
                <span class="help-block" style="color: red;" >{{ $errors->first("priority") }}</span>
                @endif  </td>
            <td rowspan="2"><input type="radio" name="priority" value="high">HIGH</td>
            <td rowspan="2"><input type="radio" name="priority" value="medium">MEDIUM</td>
            <td rowspan="2"><input type="radio" name="priority" value="low">LOW</td>
          </tr>
          <tr>
            <td ><label><input type="radio" name="approvals" value="rejected">REJECTED</label>
            @if($errors->has("approvals"))
                <span class="help-block" style="color: red;" >{{ $errors->first("approvals") }}</span>
                @endif </td>
            <td colspan="2"><label>BY</label><input class="form-control" id="acprejectby" name="acprejectby" type="text"></td>
          </tr>
          <tr>
          <td colspan="8">REASON FOR REJECTION OF REQUEST:<textarea style="width:100%;height:150px;" name="reason_for_rejection" ></textarea></td>
          </tr>
        </table>
      </div>  


      <div class="table-responsive" class="form-group">
        <table class="table table-bordered" class="table">
          <tr>
            <td colspan="4" class="success text-center"><label>STATUS OF MAINTENANCE AND SERVICE REQUEST</label></td>
          </tr>
          <tr>
            <td><input type="radio" name="task" value="Task Completed">TASK COMPLETED</td>
            <td rowspan="2" colspan="3">REMARKS:(DELAYED/PENDING DUE TO)<textarea style="width:100%;height:150px;" name="remarks"></textarea></td>
          </tr>
          <tr>
            <td>COMMENTS<textarea style="width:100%;height:100px;" name="comments"></textarea></td>
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

      <div class="well well-sm">
        <button type="submit" class="btn btn-primary">Create</button>
        <a class="btn btn-link pull-right" href="{{ route('msrs.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
      </div>
      
      <div class="text-center" style="color:#c30303;">
        QATAR REAL ESTATE INVESTMENT COMPANY(ALAQARIA)-FACILITIES MANAGEMENT DIVISION
      </div>


    
    </form> <!-- /form -->
  </div> <!-- ./container -->

</body>
</html>
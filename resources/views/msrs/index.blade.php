@extends('layout')

@section('header')
<div class="page-header clearfix">
    <h1>
    <i class="glyphicon glyphicon-align-justify"></i> Maintenanace and Service Request
     <a class="btn btn-success" href="{{ route('msrs.index') }}"><i class="glyphicon glyphicon-refresh"></i> Reset All</a>

        <a class="btn btn-success pull-right" href="{{ route('msrs.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
    </h1>

</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
       
        <table class="table table-condensed table-striped">
            <thead>
                <form method="GET" action="{{ route('msrsfiltered','Maintenance') }}">
                    <tr>
                        {{-- <th>ID</th> --}}
                        <th style="vertical-align: middle;">MSR REF. NO</th>
                        <th style="vertical-align: middle;">REQUESTED FOR</th>
                        <th style="vertical-align: middle;">CATEGORY</th>
                        <th style="vertical-align: middle;">REQUESTEDBY</th>
                        <th style="vertical-align: middle;">LOCATION</th>
                        <th style="vertical-align: middle;">CENTER</th>
                        <th style="vertical-align: middle;">DATE & TIME</th>
                        <th style="vertical-align: middle;">REQUEST STATUS</th>
                        <th style="vertical-align: middle;">WORK STATUS</th>
                        <th class="text-right" style="vertical-align: middle;"">OPTIONS</th>
                    </tr>
                    <tr>
                       <th></th>
                       <th>
                           <select onchange="submit()" name="requestedfor">
                            <option value="">Filter By</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Services">Services</option>
                        </select>
                    </th>
                    <th>
                        <select onchange="submit()" name="category">
                            <option value="">Filter By</option>
                            <option value="civil">Civil</option>
                            <option value="electrical">Electrical</option>
                            <option value="plumbing">Plumbing</option>
                            <option value="air-conditioning">Air Conditioning</option>
                            <option value="mechanical">Mechanical</option>
                            <option value="fire-alarm">Fire alarm</option>
                            <option value="fire-fighting">Fire fighting</option>
                        </select>
                    </th>
                    <th></th>
                    <th>
                        <select onchange="submit()" name="location">
                            <option value="">Filter By</option>
                            <option value="mesaieed">MESAIEED</option>
                            <option value="al-khor">AL-KHOR</option>
                            <option value="dukhan">DUKHAN</option>
                            <option value="zekreet">ZEKREET</option>
                            <option value="doha">DOHA</option>
                            <option value="others">OTHERS</option>
                        </select>
                    </th>
                    <th></th>
                    <th></th>
                    <th>
                        <select onchange="submit()" name="requeststatus">
                           <option value="">Filter By</option>
                           <option value="accepted">ACCEPTED</option>
                           <option value="rejected">REJECTED</option>
                       </select>
                   </th>
                   <th>
                       <select onchange="submit()" name="workstatus">
                           <option value="">Filter By</option>
                           <option value="scheduled">SCHEDULED</option>
                           <option value="inprogress">IN PROGRESS</option>
                           <option value="pending">PENDING</option>
                           <option value="completed">COMPLETED</option>
                       </select>
                   </th>
                   <th></th>
               </tr>
           </form>
       </thead>
 @if($msrs->count())
       <tbody>
        @foreach($msrs as $msr)
        <tr>
            @if($msr->msr_refno=="")
            <td style="text-align:center;vertical-align: middle;">

                <span class="glyphicon glyphicon-remove-circle alert-danger" aria-hidden="true"></span> Not Set</td>
                @else
                  <td style="vertical-align: middle;">
                    {{$msr->msr_refno}} 
                </td>
                @endif                        
                  <td style="vertical-align: middle;">{{$msr->requestedfor}}</td>
                  <td style="vertical-align: middle;">{{$msr->category}}</td>
                  <td style="vertical-align: middle;">{{$msr->requestedby}}</td>
                  <td style="vertical-align: middle;">{{$msr->location}}</td>
                  <td style="vertical-align: middle;">{{$msr->center}}</td>
                <?php
                    $date = new Carbon\Carbon($msr->created_at);
                    // $date->format('l jS \\of F Y h:i A');
                ?>
                  <td style="vertical-align: middle;">{{$date->format('d-m-y')}}<br>{{$date->format('h:i A')}}</td>
                 {{--    <td>{{$msr->requeststatus}}</td>
                 <td>{{$msr->workstatus}}</td> --}}
                   <td style="vertical-align: middle;text-align:center">
                    @if($msr->requeststatus=="accepted")
                    <span style="padding:5px;" class="text text-success glyphicon glyphicon-ok"><font style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;"> Accepted</font></span>
                    @elseif($msr->requeststatus=="rejected")
                    <span style="padding:5px;" class="text text-danger glyphicon glyphicon-remove"><font style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;"> Rejected</font></span>
                    @else
                      <span class="glyphicon glyphicon-remove-circle alert-danger" aria-hidden="true"></span> Not Set
                    @endif
                </td> 

                  <td style="vertical-align: middle;text-align:center">
                 @if($msr->workstatus=="scheduled")
                 <span style="padding:5px;" class="label label-info"><font style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;">Scheduled</font></span>
                 @elseif($msr->workstatus=="inprogress")
                 <span style="padding:5px;" class="label label-warning"><font style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;">Work in Progress</font></span>
                 @elseif($msr->workstatus=="pending")
                 <span style="padding:5px;" class="label label-danger"><font style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;">Pending</font></span>  
                  @elseif($msr->workstatus=="completed")
                 <span style="padding:5px;" class="label label-success"><font style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;">Completed</font></span>  
                 @else
                  <span class="glyphicon glyphicon-remove-circle alert-danger" aria-hidden="true"></span> Not Set
                 @endif
             </td>

             <td class="text-right" style="vertical-align: middle;">
                <a class="btn btn-xs btn-primary" href="{{ route('msrs.show', $msr->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                <a class="btn btn-xs btn-warning" href="{{ route('msrs.edit', $msr->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <form action="{{ route('msrs.destroy', $msr->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {{-- <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button> --}}
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{-- {!! $msrs->render() !!} --}}
{!! $msrs->appends(\Input::except('page'))->render() !!}
@else
<h3 class="text-center alert alert-info">Empty!</h3>
@endif

</div>
</div>

@endsection
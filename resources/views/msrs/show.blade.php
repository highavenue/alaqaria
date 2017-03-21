@extends('layout')
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

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="msr_refno">MSR_REFNO</label>
                     <p class="form-control-static">{{$msr->msr_refno}}</p>
                </div>
                    <div class="form-group">
                     <label for="requestedby">REQUESTEDBY</label>
                     <p class="form-control-static">{{$msr->requestedby}}</p>
                </div>
                    <div class="form-group">
                     <label for="perlocation">PERLOCATION</label>
                     <p class="form-control-static">{{$msr->perlocation}}</p>
                </div>
                    <div class="form-group">
                     <label for="contact">CONTACT</label>
                     <p class="form-control-static">{{$msr->contact}}</p>
                </div>
                    <div class="form-group">
                     <label for="reqstdfor">REQSTDFOR</label>
                     <p class="form-control-static">{{$msr->reqstdfor}}</p>
                </div>
                    <div class="form-group">
                     <label for="requestreceievedby">REQUESTRECEIEVEDBY</label>
                     <p class="form-control-static">{{$msr->requestreceievedby}}</p>
                </div>
                    <div class="form-group">
                     <label for="location">LOCATION</label>
                     <p class="form-control-static">{{$msr->location}}</p>
                </div>
                    <div class="form-group">
                     <label for="requestcategory">REQUESTCATEGORY</label>
                     <p class="form-control-static">{{$msr->requestcategory}}</p>
                </div>
                    <div class="form-group">
                     <label for="desc_of_reqst">DESC_OF_REQST</label>
                     <p class="form-control-static">{{$msr->desc_of_reqst}}</p>
                </div>
                    <div class="form-group">
                     <label for="msrcategory">MSRCATEGORY</label>
                     <p class="form-control-static">{{$msr->msrcategory}}</p>
                </div>
                    <div class="form-group">
                     <label for="amount">AMOUNT</label>
                     <p class="form-control-static">{{$msr->amount}}</p>
                </div>
                    <div class="form-group">
                     <label for="msrapprovals">MSRAPPROVALS</label>
                     <p class="form-control-static">{{$msr->msrapprovals}}</p>
                </div>
                    <div class="form-group">
                     <label for="preferredaccess">PREFERREDACCESS</label>
                     <p class="form-control-static">{{$msr->preferredaccess}}</p>
                </div>
                    <div class="form-group">
                     <label for="incidentreport">INCIDENTREPORT</label>
                     <p class="form-control-static">{{$msr->incidentreport}}</p>
                </div>
                    <div class="form-group">
                     <label for="approvals">APPROVALS</label>
                     <p class="form-control-static">{{$msr->approvals}}</p>
                </div>
                    <div class="form-group">
                     <label for="acprejectby">ACPREJECTBY</label>
                     <p class="form-control-static">{{$msr->acprejectby}}</p>
                </div>
                    <div class="form-group">
                     <label for="priority">PRIORITY</label>
                     <p class="form-control-static">{{$msr->priority}}</p>
                </div>
                    <div class="form-group">
                     <label for="reason_for_rejection">REASON_FOR_REJECTION</label>
                     <p class="form-control-static">{{$msr->reason_for_rejection}}</p>
                </div>
                    <div class="form-group">
                     <label for="task">TASK</label>
                     <p class="form-control-static">{{$msr->task}}</p>
                </div>
                    <div class="form-group">
                     <label for="remarks">REMARKS</label>
                     <p class="form-control-static">{{$msr->remarks}}</p>
                </div>
                    <div class="form-group">
                     <label for="comments">COMMENTS</label>
                     <p class="form-control-static">{{$msr->comments}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('msrs.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
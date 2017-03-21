@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Msrs
            <a class="btn btn-success pull-right" href="{{ route('msrs.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($msrs->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>MSR_REFNO</th>
                        <th>REQUESTEDBY</th>
                        <th>PERLOCATION</th>
                        <th>CONTACT</th>
                        <th>REQSTDFOR</th>
                        <th>REQUESTRECEIEVEDBY</th>
                        <th>LOCATION</th>
                        <th>REQUESTCATEGORY</th>
                        <th>DESC_OF_REQST</th>
                        <th>MSRCATEGORY</th>
                        <th>AMOUNT</th>
                        <th>MSRAPPROVALS</th>
                        <th>PREFERREDACCESS</th>
                        <th>INCIDENTREPORT</th>
                        <th>APPROVALS</th>
                        <th>ACPT/REJT BY</th>
                        <th>PRIORITY</th>
                        <th>REASON_FOR_REJECTION</th>
                        <th>TASK</th>
                        <th>REMARKS</th>
                        <th>COMMENTS</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($msrs as $msr)
                            <tr>
                                <td>{{$msr->id}}</td>
                                <td>{{$msr->msr_refno}}</td>
                    <td>{{$msr->requestedby}}</td>
                    <td>{{$msr->perlocation}}</td>
                    <td>{{$msr->contact}}</td>
                    <td>{{$msr->reqstdfor}}</td>
                    <td>{{$msr->requestreceievedby}}</td>
                    <td>{{$msr->location}}</td>
                    <td>{{$msr->requestcategory}}</td>
                    <td>{{$msr->desc_of_reqst}}</td>
                    <td>{{$msr->msrcategory}}</td>
                    <td>{{$msr->amount}}</td>
                    <td>{{$msr->msrapprovals}}</td>
                    <td>{{$msr->preferredaccess}}</td>
                    <td>{{$msr->incidentreport}}</td>
                    <td>{{$msr->approvals}}</td>
                    <td>{{$msr->acprejectby}}</td>
                    <td>{{$msr->priority}}</td>
                    <td>{{$msr->reason_for_rejection}}</td>
                    <td>{{$msr->task}}</td>
                    <td>{{$msr->remarks}}</td>
                    <td>{{$msr->comments}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('msrs.show', $msr->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('msrs.edit', $msr->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('msrs.destroy', $msr->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $msrs->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
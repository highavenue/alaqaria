@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> TenderReceipts
            <a class="btn btn-success pull-right" href="{{ route('tender_receipts.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($tender_receipts->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>COMPANY_NAME</th>
                        <th>RECEIPT_NUMBER</th>
                        <th>TENDER_NO</th>
                        <th>RECEIVER_NAME</th>
                        <th>PASSWORD</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($tender_receipts as $tender_receipt)
                            <tr>
                                <td>{{$tender_receipt->id}}</td>
                                <td>{{$tender_receipt->company_name}}</td>
                    <td>{{$tender_receipt->receipt_number}}</td>
                    <td>{{$tender_receipt->tender->tender_no}}</td>
                    <td>{{$tender_receipt->receiver_name}}</td>
                    <td>{{$tender_receipt->password}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('tender_receipts.show', $tender_receipt->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('tender_receipts.edit', $tender_receipt->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('tender_receipts.destroy', $tender_receipt->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $tender_receipts->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
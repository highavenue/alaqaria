@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> VendorConstants
            <a class="btn btn-success pull-right" href="{{ route('vendor_constants.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($vendor_constants->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>DOCUMENTNO</th>
                        <th>REVISIONNO</th>
                        <th>REVISIONDATE</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($vendor_constants as $vendor_constant)
                            <tr>
                                <td>{{$vendor_constant->id}}</td>
                                <td>{{$vendor_constant->documentno}}</td>
                    <td>{{$vendor_constant->revisionno}}</td>
                    <td>{{$vendor_constant->revisiondate}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('vendor_constants.show', $vendor_constant->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('vendor_constants.edit', $vendor_constant->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                   {{--  <form action="{{ route('vendor_constants.destroy', $vendor_constant->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $vendor_constants->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
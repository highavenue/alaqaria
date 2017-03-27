@extends('layout')
@section('header')
<div class="page-header">
        <h1>VendorConstants / Show #{{$vendor_constant->id}}</h1>
        <form action="{{ route('vendor_constants.destroy', $vendor_constant->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('vendor_constants.edit', $vendor_constant->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="documentno">DOCUMENTNO</label>
                     <p class="form-control-static">{{$vendor_constant->documentno}}</p>
                </div>
                    <div class="form-group">
                     <label for="revisionno">REVISIONNO</label>
                     <p class="form-control-static">{{$vendor_constant->revisionno}}</p>
                </div>
                    <div class="form-group">
                     <label for="revisiondate">REVISIONDATE</label>
                     <p class="form-control-static">{{$vendor_constant->revisiondate}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('vendor_constants.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
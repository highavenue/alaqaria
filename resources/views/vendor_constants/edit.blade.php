@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> VendorConstants / Edit #{{$vendor_constant->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('vendor_constants.update', $vendor_constant->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div style="max-width: 250px;" class="form-group @if($errors->has('documentno')) has-error @endif">
                       <label for="documentno-field">Documentno</label>
                    <input type="text" id="documentno-field" name="documentno" class="form-control" value="{{ is_null(old("documentno")) ? $vendor_constant->documentno : old("documentno") }}"/>
                       @if($errors->has("documentno"))
                        <span class="help-block">{{ $errors->first("documentno") }}</span>
                       @endif
                    </div>

                    <div style="max-width: 250px;" class="form-group @if($errors->has('revisionno')) has-error @endif">
                       <label for="revisionno-field">Revisionno</label>
                    <input type="text" id="revisionno-field" name="revisionno" class="form-control" value="{{ is_null(old("revisionno")) ? $vendor_constant->revisionno : old("revisionno") }}"/>
                       @if($errors->has("revisionno"))
                        <span class="help-block">{{ $errors->first("revisionno") }}</span>
                       @endif
                    </div>

                    <div style="max-width: 250px;" class="form-group @if($errors->has('revisiondate')) has-error @endif">
                       <label for="revisiondate-field">Revisiondate</label>
                    <input type="text" id="revisiondate-field" name="revisiondate" class="form-control" value="{{ is_null(old("revisiondate")) ? $vendor_constant->revisiondate : old("revisiondate") }}"/>
                       @if($errors->has("revisiondate"))
                        <span class="help-block">{{ $errors->first("revisiondate") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('vendor_constants.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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

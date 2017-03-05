@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> PropertyImages / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('property_images.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('property_id')) has-error @endif">
                       <label for="property_id-field">Property_id</label>
                    <input type="text" id="property_id-field" name="property_id" class="form-control" value="{{ old("property_id") }}"/>
                       @if($errors->has("property_id"))
                        <span class="help-block">{{ $errors->first("property_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('image')) has-error @endif">
                       <label for="image-field">Image</label>
                    <input type="text" id="image-field" name="image" class="form-control" value="{{ old("image") }}"/>
                       @if($errors->has("image"))
                        <span class="help-block">{{ $errors->first("image") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('caption')) has-error @endif">
                       <label for="caption-field">Caption</label>
                    <input type="text" id="caption-field" name="caption" class="form-control" value="{{ old("caption") }}"/>
                       @if($errors->has("caption"))
                        <span class="help-block">{{ $errors->first("caption") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('property_images.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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

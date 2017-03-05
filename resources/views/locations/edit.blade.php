@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Locations / Edit #{{$location->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('locations.update', $location->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('name_en')) has-error @endif">
                       <label for="name_en-field">Name_en</label>
                    <input type="text" id="name_en-field" name="name_en" class="form-control" value="{{ is_null(old("name_en")) ? $location->name_en : old("name_en") }}"/>
                       @if($errors->has("name_en"))
                        <span class="help-block">{{ $errors->first("name_en") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('name_ar')) has-error @endif">
                       <label for="name_ar-field">Name_ar</label>
                    <input type="text" id="name_ar-field" name="name_ar" class="form-control" value="{{ is_null(old("name_ar")) ? $location->name_ar : old("name_ar") }}"/>
                       @if($errors->has("name_ar"))
                        <span class="help-block">{{ $errors->first("name_ar") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('locations.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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

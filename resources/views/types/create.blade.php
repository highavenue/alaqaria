@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Types / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('types.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('name_en')) has-error @endif">
                       <label for="name_en-field">Name_en</label>
                    <input type="text" id="name_en-field" name="name_en" class="form-control" value="{{ old("name_en") }}"/>
                       @if($errors->has("name_en"))
                        <span class="help-block">{{ $errors->first("name_en") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('name_ar')) has-error @endif">
                       <label for="name_ar-field">Name_ar</label>
                    <input type="text" id="name_ar-field" name="name_ar" class="form-control" value="{{ old("name_ar") }}"/>
                       @if($errors->has("name_ar"))
                        <span class="help-block">{{ $errors->first("name_ar") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('types.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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

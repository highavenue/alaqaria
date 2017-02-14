@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Managements / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('managements.store') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">



                <div class="form-group @if($errors->has('image')) has-error @endif">
                 <label for="image-field">Image</label>
                 <input type="file" id="image-field" name="image" class="form-control" value="{{ old("image") }}"/>
                 @if($errors->has("image"))
                 <span class="help-block">{{ $errors->first("image") }}</span>
                 @endif
               </div>


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


               <div class="form-group @if($errors->has('desig_en')) has-error @endif">
                 <label for="desig_en-field">Desig_en</label>
                 <input type="text" id="desig_en-field" name="desig_en" class="form-control" value="{{ old("desig_en") }}"/>
                 @if($errors->has("desig_en"))
                 <span class="help-block">{{ $errors->first("desig_en") }}</span>
                 @endif
               </div>


               <div class="form-group @if($errors->has('desig_ar')) has-error @endif">
                 <label for="desig_ar-field">Desig_ar</label>
                 <input type="text" id="desig_ar-field" name="desig_ar" class="form-control" value="{{ old("desig_ar") }}"/>
                 @if($errors->has("desig_ar"))
                 <span class="help-block">{{ $errors->first("desig_ar") }}</span>
                 @endif
               </div>

               <div class="well well-sm">
                <button type="submit" class="btn btn-primary">Create</button>
                <a class="btn btn-link pull-right" href="{{ route('managements.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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

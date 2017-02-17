@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Events / Edit #{{$event->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('events.update', $event->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('name_en')) has-error @endif">
                       <label for="name_en-field">name_en</label>
                    <input type="text" id="name_en-field" name="name_en" class="form-control" value="{{ is_null(old("name_en")) ? $event->name_en : old("name_en") }}"/>
                       @if($errors->has("name_en"))
                        <span class="help-block">{{ $errors->first("name_en") }}</span>
                       @endif
                    </div>

                      <div class="form-group @if($errors->has('name_ar')) has-error @endif">
                       <label for="name_ar-field">name_ar</label>
                    <input type="text" id="name_ar-field" name="name_ar" class="form-control" value="{{ is_null(old("name_ar")) ? $event->name_ar : old("name_ar") }}"/>
                       @if($errors->has("name_ar"))
                        <span class="help-block">{{ $errors->first("name_ar") }}</span>
                       @endif
                    </div>


                    <div class="form-group @if($errors->has('description_en')) has-error @endif">
                       <label for="description_en-field">Description_en</label>
                    <textarea class="form-control textarea_en" id="description_en-field" rows="3" name="description_en">{{ is_null(old("description_en")) ? $event->description_en : old("description_en") }}</textarea>
                       @if($errors->has("description_en"))
                        <span class="help-block">{{ $errors->first("description_en") }}</span>
                       @endif
                    </div>

                     <div class="form-group @if($errors->has('description_ar')) has-error @endif">
                       <label for="description_ar-field">Description_ar</label>
                    <textarea class="form-control textarea_ar" id="description_ar-field" rows="3" name="description_ar">{{ is_null(old("description_ar")) ? $event->description_ar : old("description_ar") }}</textarea>
                       @if($errors->has("description_ar"))
                        <span class="help-block">{{ $errors->first("description_ar") }}</span>
                       @endif
                    </div>


                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('events.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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

@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> TenderRequirements / Edit #{{$tender_requirement->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('tender_requirements.update', $tender_requirement->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('subject_en')) has-error @endif">
                       <label for="subject_en-field">Subject_en</label>
                    <input type="text" id="subject_en-field" name="subject_en" class="form-control" value="{{ is_null(old("subject_en")) ? $tender_requirement->subject_en : old("subject_en") }}"/>
                       @if($errors->has("subject_en"))
                        <span class="help-block">{{ $errors->first("subject_en") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('subject_ar')) has-error @endif">
                       <label for="subject_ar-field">Subject_ar</label>
                    <input type="text" id="subject_ar-field" name="subject_ar" class="form-control" value="{{ is_null(old("subject_ar")) ? $tender_requirement->subject_ar : old("subject_ar") }}"/>
                       @if($errors->has("subject_ar"))
                        <span class="help-block">{{ $errors->first("subject_ar") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('desc_en')) has-error @endif">
                       <label for="desc_en-field">Desc_en</label>
                    <textarea class="form-control textarea_en" id="desc_en-field" rows="3" name="desc_en">{{ is_null(old("desc_en")) ? $tender_requirement->desc_en : old("desc_en") }}</textarea>
                       @if($errors->has("desc_en"))
                        <span class="help-block">{{ $errors->first("desc_en") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('desc_ar')) has-error @endif">
                       <label for="desc_ar-field">Desc_ar</label>
                    <textarea class="form-control textarea_en" id="desc_ar-field" rows="3" name="desc_ar">{{ is_null(old("desc_ar")) ? $tender_requirement->desc_ar : old("desc_ar") }}</textarea>
                       @if($errors->has("desc_ar"))
                        <span class="help-block">{{ $errors->first("desc_ar") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('tender_requirements.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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

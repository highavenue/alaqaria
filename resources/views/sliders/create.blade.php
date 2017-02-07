@extends('layout')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
<div class="page-header">
  <h1><i class="glyphicon glyphicon-plus"></i> Sliders / Create </h1>
</div>
@endsection

@section('content')
@include('error')

<div class="row">
  <div class="col-md-12">

    <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group @if($errors->has('image')) has-error @endif">
       <label for="image-field">Image</label>
       <input type="file" id="image-field" name="image" class="form-control" value="{{ old("image") }}"/>
       @if($errors->has("image"))
       <span class="help-block">{{ $errors->first("image") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('title_en')) has-error @endif">
       <label for="title_en-field">Title_en</label>
       <input type="text" id="title_en-field" name="title_en" class="form-control" value="{{ old("title_en") }}"/>
       @if($errors->has("title_en"))
       <span class="help-block">{{ $errors->first("title_en") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('title_ar')) has-error @endif">
       <label for="title_ar-field">Title_ar</label>
       <input type="text" id="title_ar-field" name="title_ar" class="form-control" value="{{ old("title_ar") }}"/>
       @if($errors->has("title_ar"))
       <span class="help-block">{{ $errors->first("title_ar") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('subject_en')) has-error @endif">
       <label for="subject_en-field">Subject_en</label>
       <input type="text" id="subject_en-field" name="subject_en" class="form-control" value="{{ old("subject_en") }}"/>
       @if($errors->has("subject_en"))
       <span class="help-block">{{ $errors->first("subject_en") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('subject_ar')) has-error @endif">
       <label for="subject_ar-field">Subject_ar</label>
       <input type="text" id="subject_ar-field" name="subject_ar" class="form-control" value="{{ old("subject_ar") }}"/>
       @if($errors->has("subject_ar"))
       <span class="help-block">{{ $errors->first("subject_ar") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('linktext_en')) has-error @endif">
       <label for="linktext_en-field">Linktext_en</label>
       <input type="text" id="linktext_en-field" name="linktext_en" class="form-control" value="{{ old("linktext_en") }}"/>
       @if($errors->has("linktext_en"))
       <span class="help-block">{{ $errors->first("linktext_en") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('linktext_ar')) has-error @endif">
       <label for="linktext_ar-field">Linktext_ar</label>
       <input type="text" id="linktext_ar-field" name="linktext_ar" class="form-control" value="{{ old("linktext_ar") }}"/>
       @if($errors->has("linktext_ar"))
       <span class="help-block">{{ $errors->first("linktext_ar") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('link')) has-error @endif">
       <label for="link-field">Link</label>
       <textarea class="form-control" id="link-field" rows="3" name="link">{{ old("link") }}</textarea>
       @if($errors->has("link"))
       <span class="help-block">{{ $errors->first("link") }}</span>
       @endif
     </div>
     <div class="well well-sm">
      <button type="submit" class="btn btn-primary">Create</button>
      <a class="btn btn-link pull-right" href="{{ route('sliders.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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

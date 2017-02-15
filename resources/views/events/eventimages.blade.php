@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Event / Gallery </h1>
    </div>
@endsection

@section('content')
    @include('error')


     <?php $count=0; ?>
          <div class="row">
        @foreach($images as $image)
            @if(++$count%4==0) <div class="row">@endif
            <div class="col-md-3">
              <img src="{{$image->imageURL}}" class="thumbnail" width="100%">
            </div>
            @if($count%4==0) </div>@endif
         @endforeach 
          </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('eventimagesstore') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                {{-- <img src="{{$about->imageURL}}" class="img-thumbnail"" width="250" height="236"> --}}
                <input type="hidden" name="event_id" value="{{$eventid}}">

                <div class="form-group @if($errors->has('image')) has-error @endif">
                 <label for="image-field">Image</label>
                 <input type="file" id="image-field" name="image" class="form-control" value="{{ old("image") }}"/>
                 @if($errors->has("image"))
                 <span class="help-block">{{ $errors->first("image") }}</span>
                 @endif
               </div>

                    
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Upload</button>
                    <a class="btn btn-link pull-right" href="{{ route('events.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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

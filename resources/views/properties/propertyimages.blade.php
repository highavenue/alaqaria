@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Property / Gallery </h1>
    </div>
@endsection

@section('content')
    @include('error')


     <?php $count=0; ?>                                 
          <div class="row">
        @foreach($images as $image)
            @if(++$count%4==0) <div class="row">@endif
            <div class="col-md-3 text-center">
              <img src="{{$image->imageURL}}" class="thumbnail" width="100%">
              <p>{{$image->caption}}</p>
              <a class="btn btn-danger " href="{{ route('propertyimagesdelete',$image->id) }}"><span class="glyphicon glyphicon-remove"></span> Delete</a>
            </div>
            @if($count%4==0) </div>@endif
         @endforeach 
          </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('propertyimagesstore') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                {{-- <img src="{{$about->imageURL}}" class="img-thumbnail"" width="250" height="236"> --}}
                <input type="hidden" name="property_id" value="{{$propertyid}}">

                <div class="form-group @if($errors->has('image')) has-error @endif">
                 <label for="image-field">Image</label>
                 <input type="file" id="image-field" name="image" class="form-control" value="{{ old("image") }}"/>
                 @if($errors->has("image"))
                 <span class="help-block">{{ $errors->first("image") }}</span>
                 @endif
               </div>

               <div class="form-group @if($errors->has('caption')) has-error @endif">
                       <label for="caption-field">caption</label>
                    <input type="text" id="caption-field" name="caption" class="form-control" value="{{ old("caption") }}"/>
                       @if($errors->has("caption"))
                        <span class="help-block">{{ $errors->first("caption") }}</span>
                       @endif
                    </div>


                    
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Upload</button>
                    <a class="btn btn-link pull-right" href="{{ route('properties.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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

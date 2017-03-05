@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Properties / Edit #{{$property->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('properties.update', $property->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('location_id')) has-error @endif">
                       <label for="location_id-field">Location</label>

                    <Select style="width: 300px;" name="location_id" id="location_id-field" class="form-control" value="{{ is_null(old("location_id")) ? $property->location_id : old("location_id") }}">
                       <option value="" disabled selected>Select A Location</option>
                        @foreach($locations as $location)
                          <option value="{{$location->id}}" @if($property->location_id==$location->id) selected @endif>{{$location->name_en.'  -  '.$location->name_ar}}</option>
                        @endforeach
                       </Select>

                       @if($errors->has("location_id"))
                        <span class="help-block">{{ $errors->first("location_id") }}</span>
                       @endif
                    </div>


                    <div class="form-group @if($errors->has('category_id')) has-error @endif">
                       <label for="category_id-field">Category</label>

                     <Select style="width: 300px;" name="category_id" id="category_id-field" class="form-control" value="{{ is_null(old("category_id")) ? $property->category_id : old("category_id") }}">
                       <option value="" disabled selected>Select A Category</option>
                        @foreach($categories as $category)
                          <option value="{{$category->id}}" @if($property->category_id==$category->id) selected @endif>{{$category->name_en.'  -  '.$category->name_ar}}</option>
                        @endforeach
                       </Select>

                       @if($errors->has("category_id"))
                        <span class="help-block">{{ $errors->first("category_id") }}</span>
                       @endif
                    </div>




                    <div class="form-group @if($errors->has('type_id')) has-error @endif">
                       <label for="type_id-field">Type</label>

                     <Select style="width: 300px;" name="type_id" id="type_id-field" class="form-control" value="{{ is_null(old("type_id")) ? $property->type_id : old("type_id") }}">
                       <option value="" disabled selected>Select A Type</option>
                        @foreach($types as $type)
                          <option value="{{$type->id}}" @if($property->type_id==$type->id) selected @endif>{{$type->name_en.'  -  '.$type->name_ar}}</option>
                        @endforeach
                       </Select>

                       @if($errors->has("type_id"))
                        <span class="help-block">{{ $errors->first("type_id") }}</span>
                       @endif
                    </div>


                   



                    <div class="form-group @if($errors->has('desc_en')) has-error @endif">
                       <label for="desc_en-field">Desc_en</label>
                    <textarea class="form-control textarea_en" id="desc_en-field" rows="3" name="desc_en">{{ is_null(old("desc_en")) ? $property->desc_en : old("desc_en") }}</textarea>
                       @if($errors->has("desc_en"))
                        <span class="help-block">{{ $errors->first("desc_en") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('desc_ar')) has-error @endif">
                       <label for="desc_ar-field">Desc_ar</label>
                    <textarea class="form-control textarea_ar" id="desc_ar-field" rows="3" name="desc_ar">{{ is_null(old("desc_ar")) ? $property->desc_ar : old("desc_ar") }}</textarea>
                       @if($errors->has("desc_ar"))
                        <span class="help-block">{{ $errors->first("desc_ar") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('for')) has-error @endif">
                       <label for="for-field">Property is for</label>

                    <Select style="width: 300px;" name="for" id="for-field" class="form-control" value="{{ is_null(old("for")) ? $property->for : old("for") }}">
                       <option value="sale" @if($property->for=='sale') selected @endif>Sale</option>
                        <option value="rent" @if($property->for=='rent') selected @endif>Rent</option>
                          <option value="other" @if($property->for=='other') selected @endif>Other</option>
                       </Select>

                       @if($errors->has("for"))
                        <span class="help-block">{{ $errors->first("for") }}</span>
                       @endif
                    </div>



                    <div class="form-group @if($errors->has('status')) has-error @endif">
                     <label for="status-field">type</label>

                     <Select style="width: 300px;" name="status" id="status-field" class="form-control" value="{{ is_null(old("status")) ? $property->status : old("status") }}">

                      <option value="1" @if($property->status=='1') selected @endif>Active (default)</option>
                      <option value="0" @if($property->status=='0') selected @endif>Inacive</option>

                    </Select>
                    <label style="margin-top:10px;" class="label-warning">Select <i>'Active'</i> for publish this property and <i>'Inactive'</i> for hide it from public.</label>
                    @if($errors->has("status"))
                    <span class="help-block">{{ $errors->first("status") }}</span>
                    @endif
                  </div>




                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('properties.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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

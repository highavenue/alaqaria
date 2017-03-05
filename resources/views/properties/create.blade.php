<?php
        $lang=Session::get('lang');
?>

@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Properties / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('properties.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('location_id')) has-error @endif">
                       <label for="location_id-field">Location</label>

                    <Select style="width: 300px;" name="location_id" id="location_id-field" class="form-control" value="{{ old("location_id") }}">
                       <option value="" disabled selected>Select A Location</option>
                        @foreach($locations as $location)
                          <option value="{{$location->id}}">{{$location->name_en.'  -  '.$location->name_ar}}</option>
                        @endforeach
                       </Select>

                       @if($errors->has("location_id"))
                        <span class="help-block">{{ $errors->first("location_id") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('category_id')) has-error @endif">
                       <label for="category_id-field">category</label>

                    <Select style="width: 300px;" name="category_id" id="category_id-field" class="form-control" value="{{ old("category_id") }}">
                       <option value="" disabled selected>Select A Category</option>
                        @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name_en.'  -  '.$category->name_ar}}</option>
                        @endforeach
                       </Select>

                       @if($errors->has("category_id"))
                        <span class="help-block">{{ $errors->first("category_id") }}</span>
                       @endif
                    </div>


                    <div class="form-group @if($errors->has('type_id')) has-error @endif">
                       <label for="type_id-field">type</label>

                    <Select style="width: 300px;" name="type_id" id="type_id-field" class="form-control" value="{{ old("type_id") }}">
                       <option value="" disabled selected>Select A Type</option>
                        @foreach($types as $type)
                          <option value="{{$type->id}}">{{$type->name_en.'  -  '.$type->name_ar}}</option>
                        @endforeach
                       </Select>

                       @if($errors->has("type_id"))
                        <span class="help-block">{{ $errors->first("type_id") }}</span>
                       @endif
                    </div>


                    <div class="form-group @if($errors->has('desc_en')) has-error @endif">
                       <label for="desc_en-field">Desc_en</label>
                    <textarea class="form-control textarea_en" id="desc_en-field" rows="3" name="desc_en">{{ old("desc_en") }}</textarea>
                       @if($errors->has("desc_en"))
                        <span class="help-block">{{ $errors->first("desc_en") }}</span>
                       @endif
                    </div>
                    
                    <div class="form-group @if($errors->has('desc_ar')) has-error @endif">
                       <label for="desc_ar-field">Desc_ar</label>
                    <textarea class="form-control textarea_ar" id="desc_ar-field" rows="3" name="desc_ar">{{ old("desc_ar") }}</textarea>
                       @if($errors->has("desc_ar"))
                        <span class="help-block">{{ $errors->first("desc_ar") }}</span>
                       @endif
                    </div>


                    <div class="form-group @if($errors->has('for')) has-error @endif">
                       <label for="for-field">Property is for</label>

                    <Select style="width: 300px;" name="for" id="for-field" class="form-control" value="{{ old("for") }}">
                       <option value="sale" selected>Sale</option>
                        <option value="rent" >Rent</option>
                          <option value="other" >Other</option>
                       </Select>

                       @if($errors->has("for"))
                        <span class="help-block">{{ $errors->first("for") }}</span>
                       @endif
                    </div>
                    

                    <div class="form-group @if($errors->has('status')) has-error @endif">
                     <label for="status-field">type</label>

                     <Select style="width: 300px;" name="status" id="status-field" class="form-control" value="{{ old("status") }}">

                      <option value="1" selected="">Active (default)</option>
                      <option value="0">Inacive</option>

                    </Select>
                    <label style="margin-top:10px;" class="label-warning">Select <i>'Active'</i> for publish this property and <i>'Inactive'</i> for hide it from public.</label>
                    @if($errors->has("status"))
                    <span class="help-block">{{ $errors->first("status") }}</span>
                    @endif
                  </div>



                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
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

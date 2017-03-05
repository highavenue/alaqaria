@extends('layout')
@section('header')
<div class="page-header">
        <h1>PropertyImages / Show #{{$property_image->id}}</h1>
        <form action="{{ route('property_images.destroy', $property_image->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('property_images.edit', $property_image->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="property_id">PROPERTY_ID</label>
                     <p class="form-control-static">{{$property_image->property_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="image">IMAGE</label>
                     <p class="form-control-static">{{$property_image->image}}</p>
                </div>
                    <div class="form-group">
                     <label for="caption">CAPTION</label>
                     <p class="form-control-static">{{$property_image->caption}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('property_images.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
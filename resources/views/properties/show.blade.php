@extends('layout')
@section('header')
<div class="page-header">
        <h1>Properties / Show #{{$property->id}}</h1>
        <form action="{{ route('properties.destroy', $property->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('properties.edit', $property->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="location">LOCATION</label>
                     <p class="form-control-static">{{$property->location->name_en}}</p>
                </div>
                    <div class="form-group">
                     <label for="category">CATEGORY</label>
                     <p class="form-control-static">{{$property->category->name_en}}</p>
                </div>
                    <div class="form-group">
                     <label for="type">TYPE</label>
                     <p class="form-control-static">{{$property->type->name_en}}</p>
                </div>
                    <div class="form-group">
                     <label for="desc_en">DESC_EN</label>
                     <p class="form-control-static">{!!$property->desc_en!!}</p>
                </div>
                    <div class="form-group">
                     <label for="desc_ar">DESC_AR</label>
                     <p class="form-control-static">{!!$property->desc_ar!!}</p>
                </div>
                    <div class="form-group">
                     <label for="for_en">FOR</label>
                     <p class="form-control-static">{{$property->for}}</p>
                </div>
                    <div class="form-group">
                     <label for="status">STATUS</label>
                     <p class="form-control-static"><?php if($property->status)echo 'Active'; else
                     echo 'Inactive'; ?></p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('properties.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection


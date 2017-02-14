@extends('layout')
@section('header')
<div class="page-header">
        <h1>Managements / Show #{{$management->id}}</h1>
        <form action="{{ route('managements.destroy', $management->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('managements.edit', $management->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="image">IMAGE</label>
                     <p class="form-control-static"><img src="{{$management->imageURL}}" class="img-thumbnail"" width="350" height="236"> </p>
                </div>
                    <div class="form-group">
                     <label for="name_en">NAME_EN</label>
                     <p class="form-control-static">{{$management->name_en}}</p>
                </div>
                    <div class="form-group">
                     <label for="name_ar">NAME_AR</label>
                     <p class="form-control-static">{{$management->name_ar}}</p>
                </div>
                    <div class="form-group">
                     <label for="desig_en">DESIG_EN</label>
                     <p class="form-control-static">{{$management->desig_en}}</p>
                </div>
                    <div class="form-group">
                     <label for="desig_ar">DESIG_AR</label>
                     <p class="form-control-static">{{$management->desig_ar}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('managements.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
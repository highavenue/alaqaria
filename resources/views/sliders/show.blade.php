@extends('layout')
@section('header')
<div class="page-header">
        <h1>Sliders / Show #{{$slider->id}}</h1>
        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('sliders.edit', $slider->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <p class="form-control-static"><img src="{{$slider->imageURL}}" class="img-thumbnail"" width="350" height="236"> </td></p>
                </div>
                    <div class="form-group">
                     <label for="title_en">TITLE_EN</label>
                     <p class="form-control-static">{{$slider->title_en}}</p>
                </div>
                    <div class="form-group">
                     <label for="title_ar">TITLE_AR</label>
                     <p class="form-control-static">{{$slider->title_ar}}</p>
                </div>
                    <div class="form-group">
                     <label for="subject_en">SUBJECT_EN</label>
                     <p class="form-control-static">{{$slider->subject_en}}</p>
                </div>
                    <div class="form-group">
                     <label for="subject_ar">SUBJECT_AR</label>
                     <p class="form-control-static">{{$slider->subject_ar}}</p>
                </div>
                    <div class="form-group">
                     <label for="linktext_en">LINKTEXT_EN</label>
                     <p class="form-control-static">{{$slider->linktext_en}}</p>
                </div>
                    <div class="form-group">
                     <label for="linktext_ar">LINKTEXT_AR</label>
                     <p class="form-control-static">{{$slider->linktext_ar}}</p>
                </div>
                    <div class="form-group">
                     <label for="link">LINK</label>
                     <p class="form-control-static">{{$slider->link}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('sliders.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
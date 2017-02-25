@extends('layout')
@section('header')
<div class="page-header">
        <h1>Abouts / Show / {{$about->subject_en}}</h1>
{{--         <form action="{{ route('abouts.destroy', $about->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('abouts.edit', $about->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form> --}}

        {{-- newly added edit button after commenting existing delete and edit button --}}
        <div class="btn-group pull-right" role="group">
            <a style="display: inline;" class="btn btn-warning btn-group pull" role="group" href="{{ route('abouts.edit', $about->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a></div>
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
                     <label for="subject_en">SUBJECT_EN</label>
                     <p class="form-control-static">{{$about->subject_en}}</p>
                </div>
                    <div class="form-group">
                     <label for="subject_ar">SUBJECT_AR</label>
                     <p class="form-control-static">{{$about->subject_ar}}</p>
                </div>
                    <div class="form-group">
                     <label for="desc_en">DESC_EN</label>
                     <p class="form-control-static">{!!$about->desc_en!!}</p>
                </div>
                    <div class="form-group">
                     <label for="desc_ar">DESC_AR</label>
                     <p class="form-control-static" dir="rtl">{!!$about->desc_ar!!}</p>
                </div>
                    <div class="form-group">
                     <label for="image">IMAGE</label>
                     <p class="form-control-static"><img src="{{$about->imageURL}}" width="250"></p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('abouts.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
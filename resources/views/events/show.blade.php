@extends('layout')
@section('header')
<div class="page-header">
        <h1>Events / Show #{{$event->id}}</h1>
        <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('events.edit', $event->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="name_en">NAME_EN</label>
                     <p class="form-control-static">{{$event->name_en}}</p>
                </div>
                  <div class="form-group">
                     <label for="name_ar">NAME_AR</label>
                     <p class="form-control-static">{{$event->name_ar}}</p>
                </div>
                    <div class="form-group">
                     <label for="description_en">DESCRIPTION_EN</label>
                     <p class="form-control-static">{!!$event->description_en!!}</p>
                </div>
                   </div>
                    <div class="form-group">
                     <label for="description_ar">DESCRIPTION_AR</label>
                     <p class="form-control-static" dir="rtl">{!!$event->description_ar!!}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('events.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
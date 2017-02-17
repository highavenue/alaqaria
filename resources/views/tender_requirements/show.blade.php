@extends('layout')
@section('header')
<div class="page-header">
        <h1>TenderRequirements / Show #{{$tender_requirement->id}}</h1>
        <form action="{{ route('tender_requirements.destroy', $tender_requirement->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('tender_requirements.edit', $tender_requirement->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="subject_en">SUBJECT_EN</label>
                     <p class="form-control-static">{{$tender_requirement->subject_en}}</p>
                </div>
                    <div class="form-group">
                     <label for="subject_ar">SUBJECT_AR</label>
                     <p class="form-control-static">{{$tender_requirement->subject_ar}}</p>
                </div>
                    <div class="form-group">
                     <label for="desc_en">DESC_EN</label>
                     <p class="form-control-static">{!!$tender_requirement->desc_en!!}</p>
                </div>
                    <div class="form-group">
                     <label for="desc_ar">DESC_AR</label>
                     <p class="form-control-static" dir="rtl">{!!$tender_requirement->desc_ar!!}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('tender_requirements.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
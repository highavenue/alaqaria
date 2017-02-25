@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Tenders / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('tenders.store') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                  <div class="checkbox" >
                    <label class="alert alert-info alert-dismissable" style="padding-left: 50px; width: 100%;">
                    <input  type="checkbox" class=checkbox id="english_only-field" name="english_only" onchange="valueChanged()" > English Only Version (Check this box if you don't have arabic version text for this Tender)
                    </label>  
                  </div>
                </div>

                <div class="form-group @if($errors->has('tender_no')) has-error @endif">
                       <label for="tender_no-field">Tender_no</label>
                    <input type="text" id="tender_no-field" name="tender_no" class="form-control" value="{{ old("tender_no") }}"/>
                       @if($errors->has("tender_no"))
                        <span class="help-block">{{ $errors->first("tender_no") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('subject_en')) has-error @endif">
                       <label for="subject_en-field">Subject_en</label>
                    <input type="text" id="subject_en-field" name="subject_en" class="form-control" value="{{ old("subject_en") }}"/>
                       @if($errors->has("subject_en"))
                        <span class="help-block">{{ $errors->first("subject_en") }}</span>
                       @endif
                    </div>

                    <?php if(Session::get('checkbox')=='') { ?>
                    <div class="form-group arabic @if($errors->has('subject_ar')) has-error @endif">
                       <label for="subject_ar-field">Subject_ar</label>
                    <input type="text" id="subject_ar-field" name="subject_ar" class="form-control" value="{{ old("subject_ar") }}"/>
                       @if($errors->has("subject_ar"))
                        <span class="help-block">{{ $errors->first("subject_ar") }}</span>
                       @endif
                    </div>
                    <?php } ?>

                    <div class="form-group @if($errors->has('desc_en')) has-error @endif">
                       <label for="desc_en-field">Desc_en</label>
                    <textarea class="form-control textarea_en" id="desc_en-field" rows="3" name="desc_en">{{ old("desc_en") }}</textarea>
                       @if($errors->has("desc_en"))
                        <span class="help-block">{{ $errors->first("desc_en") }}</span>
                       @endif
                    </div>

                    <?php if(Session::get('checkbox')=='') { ?>
                    <div class="form-group arabic @if($errors->has('desc_ar')) has-error @endif">
                       <label for="desc_ar-field">Desc_ar</label>
                    <textarea class="form-control textarea_ar" id="desc_ar-field" rows="3" name="desc_ar">{{ old("desc_ar") }}</textarea>
                       @if($errors->has("desc_ar"))
                        <span class="help-block">{{ $errors->first("desc_ar") }}</span>
                       @endif
                    </div>
                    <?php } ?>

                   <div style="max-width: 200px;" class="form-group @if($errors->has('close_date')) has-error @endif">
                       <label for="close_date-field">Close_date</label>
                    <input type="date" id="close_date-field" name="close_date" class="form-control" value="{{ old("close_date") }}"/> 
                       @if($errors->has("close_date"))
                        <span class="help-block">{{ $errors->first("close_date") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('attachment')) has-error @endif">
                       <label for="attachment-field">Attachment</label>
                    <input type="file" id="attachment-field" name="attachment" class="form-control date" value="{{ old("attachment") }}"/>
                       @if($errors->has("attachment"))
                        <span class="help-block">{{ $errors->first("attachment") }}</span>
                       @endif
                    </div> 

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('tenders.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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

  <script type="text/javascript">
    function valueChanged()
    {
      if($('#english_only-field').is(":checked"))   
        $(".arabic").hide();
      else
        $(".arabic").show();
    }
  </script>
@endsection

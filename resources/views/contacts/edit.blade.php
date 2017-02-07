@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Contacts / Edit #{{$contact->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('area_en')) has-error @endif">
                       <label for="area_en-field">Area_en</label>
                    <input type="text" id="area_en-field" name="area_en" class="form-control" value="{{ is_null(old("area_en")) ? $contact->area_en : old("area_en") }}"/>
                       @if($errors->has("area_en"))
                        <span class="help-block">{{ $errors->first("area_en") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('area_ar')) has-error @endif">
                       <label for="area_ar-field">Area_ar</label>
                    <input type="text" id="area_ar-field" name="area_ar" class="form-control" value="{{ is_null(old("area_ar")) ? $contact->area_ar : old("area_ar") }}"/>
                       @if($errors->has("area_ar"))
                        <span class="help-block">{{ $errors->first("area_ar") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('street_en')) has-error @endif">
                       <label for="street_en-field">Street_en</label>
                    <input type="text" id="street_en-field" name="street_en" class="form-control" value="{{ is_null(old("street_en")) ? $contact->street_en : old("street_en") }}"/>
                       @if($errors->has("street_en"))
                        <span class="help-block">{{ $errors->first("street_en") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('street_ar')) has-error @endif">
                       <label for="street_ar-field">Street_ar</label>
                    <input type="text" id="street_ar-field" name="street_ar" class="form-control" value="{{ is_null(old("street_ar")) ? $contact->street_ar : old("street_ar") }}"/>
                       @if($errors->has("street_ar"))
                        <span class="help-block">{{ $errors->first("street_ar") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pobox')) has-error @endif">
                       <label for="pobox-field">Pobox</label>
                    <input type="text" id="pobox-field" name="pobox" class="form-control" value="{{ is_null(old("pobox")) ? $contact->pobox : old("pobox") }}"/>
                       @if($errors->has("pobox"))
                        <span class="help-block">{{ $errors->first("pobox") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('state_en')) has-error @endif">
                       <label for="state_en-field">State_en</label>
                    <input type="text" id="state_en-field" name="state_en" class="form-control" value="{{ is_null(old("state_en")) ? $contact->state_en : old("state_en") }}"/>
                       @if($errors->has("state_en"))
                        <span class="help-block">{{ $errors->first("state_en") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('state_ar')) has-error @endif">
                       <label for="state_ar-field">State_ar</label>
                    <input type="text" id="state_ar-field" name="state_ar" class="form-control" value="{{ is_null(old("state_ar")) ? $contact->state_ar : old("state_ar") }}"/>
                       @if($errors->has("state_ar"))
                        <span class="help-block">{{ $errors->first("state_ar") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('country_en')) has-error @endif">
                       <label for="country_en-field">Country_en</label>
                    <input type="text" id="country_en-field" name="country_en" class="form-control" value="{{ is_null(old("country_en")) ? $contact->country_en : old("country_en") }}"/>
                       @if($errors->has("country_en"))
                        <span class="help-block">{{ $errors->first("country_en") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('country_ar')) has-error @endif">
                       <label for="country_ar-field">Country_ar</label>
                    <input type="text" id="country_ar-field" name="country_ar" class="form-control" value="{{ is_null(old("country_ar")) ? $contact->country_ar : old("country_ar") }}"/>
                       @if($errors->has("country_ar"))
                        <span class="help-block">{{ $errors->first("country_ar") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ph1')) has-error @endif">
                       <label for="ph1-field">Ph1</label>
                    <input type="text" id="ph1-field" name="ph1" class="form-control" value="{{ is_null(old("ph1")) ? $contact->ph1 : old("ph1") }}"/>
                       @if($errors->has("ph1"))
                        <span class="help-block">{{ $errors->first("ph1") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('ph2')) has-error @endif">
                       <label for="ph2-field">Ph2</label>
                    <input type="text" id="ph2-field" name="ph2" class="form-control" value="{{ is_null(old("ph2")) ? $contact->ph2 : old("ph2") }}"/>
                       @if($errors->has("ph2"))
                        <span class="help-block">{{ $errors->first("ph2") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('fax')) has-error @endif">
                       <label for="fax-field">fax</label>
                    <input type="text" id="fax-field" name="fax" class="form-control" value="{{ is_null(old("fax")) ? $contact->fax : old("fax") }}"/>
                       @if($errors->has("fax"))
                        <span class="help-block">{{ $errors->first("fax") }}</span>
                       @endif
                    </div>


                    <div class="form-group @if($errors->has('email')) has-error @endif">
                       <label for="email-field">Email</label>
                    <input type="text" id="email-field" name="email" class="form-control" value="{{ is_null(old("email")) ? $contact->email : old("email") }}"/>
                       @if($errors->has("email"))
                        <span class="help-block">{{ $errors->first("email") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('map')) has-error @endif">
                       <label for="map-field">Map</label>
                    <textarea class="form-control" id="map-field" rows="3" name="map">{{ is_null(old("map")) ? $contact->map : old("map") }}</textarea>
                       @if($errors->has("map"))
                        <span class="help-block">{{ $errors->first("map") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('facebook')) has-error @endif">
                       <label for="facebook-field">Facebook</label>
                    <input type="text" id="facebook-field" name="facebook" class="form-control" value="{{ is_null(old("facebook")) ? $contact->facebook : old("facebook") }}"/>
                       @if($errors->has("facebook"))
                        <span class="help-block">{{ $errors->first("facebook") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('twitter')) has-error @endif">
                       <label for="twitter-field">Twitter</label>
                    <input type="text" id="twitter-field" name="twitter" class="form-control" value="{{ is_null(old("twitter")) ? $contact->twitter : old("twitter") }}"/>
                       @if($errors->has("twitter"))
                        <span class="help-block">{{ $errors->first("twitter") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('linkedin')) has-error @endif">
                       <label for="linkedin-field">Linkedin</label>
                    <textarea class="form-control" id="linkedin-field" rows="3" name="linkedin">{{ is_null(old("linkedin")) ? $contact->linkedin : old("linkedin") }}</textarea>
                       @if($errors->has("linkedin"))
                        <span class="help-block">{{ $errors->first("linkedin") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('instagram')) has-error @endif">
                       <label for="instagram-field">Instagram</label>
                    <input type="text" id="instagram-field" name="instagram" class="form-control" value="{{ is_null(old("instagram")) ? $contact->instagram : old("instagram") }}"/>
                       @if($errors->has("instagram"))
                        <span class="help-block">{{ $errors->first("instagram") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('youtube')) has-error @endif">
                       <label for="youtube-field">Youtube</label>
                    <input type="text" id="youtube-field" name="youtube" class="form-control" value="{{ is_null(old("youtube")) ? $contact->youtube : old("youtube") }}"/>
                       @if($errors->has("youtube"))
                        <span class="help-block">{{ $errors->first("youtube") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('rss')) has-error @endif">
                       <label for="rss-field">Rss</label>
                    <input type="text" id="rss-field" name="rss" class="form-control" value="{{ is_null(old("rss")) ? $contact->rss : old("rss") }}"/>
                       @if($errors->has("rss"))
                        <span class="help-block">{{ $errors->first("rss") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('contacts.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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

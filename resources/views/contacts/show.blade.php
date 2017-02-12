@extends('layout')
@section('header')
<div class="page-header">
    <h1>Contacts / Show #{{$contact->id}}</h1>
    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="btn-group pull-right" role="group" aria-label="...">
            <a class="btn btn-warning btn-group" role="group" href="{{ route('contacts.edit', $contact->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
               <label for="area_en">AREA_EN</label>
               <p class="form-control-static">{{$contact->area_en}}</p>
           </div>
           <div class="form-group">
               <label for="area_ar">AREA_AR</label>
               <p class="form-control-static">{{$contact->area_ar}}</p>
           </div>
           <div class="form-group">
               <label for="street_en">STREET_EN</label>
               <p class="form-control-static">{{$contact->street_en}}</p>
           </div>
           <div class="form-group">
               <label for="street_ar">STREET_AR</label>
               <p class="form-control-static">{{$contact->street_ar}}</p>
           </div>
           <div class="form-group">
               <label for="pobox">POBOX</label>
               <p class="form-control-static">{{$contact->pobox}}</p>
           </div>
           <div class="form-group">
               <label for="state_en">STATE_EN</label>
               <p class="form-control-static">{{$contact->state_en}}</p>
           </div>
           <div class="form-group">
               <label for="state_ar">STATE_AR</label>
               <p class="form-control-static">{{$contact->state_ar}}</p>
           </div>
           <div class="form-group">
               <label for="country_en">COUNTRY_EN</label>
               <p class="form-control-static">{{$contact->country_en}}</p>
           </div>
           <div class="form-group">
               <label for="country_ar">COUNTRY_AR</label>
               <p class="form-control-static">{{$contact->country_ar}}</p>
           </div>
           <div class="form-group">
               <label for="ph1">PH1</label>
               <p class="form-control-static">{{$contact->ph1}}</p>
           </div>
           <div class="form-group">
               <label for="ph2">PH2</label>
               <p class="form-control-static">{{$contact->ph2}}</p>
           </div>

           <div class="form-group">
             <label for="fax">FAX</label>
             <p class="form-control-static">{{$contact->fax}}</p>
         </div>

         <div class="form-group">
           <label for="email">EMAIL</label>
           <p class="form-control-static">{{$contact->email}}</p>
       </div>
         <div class="form-group">
               <label for="topbarcaption_en">TOPBARCAPTION_EN</label>
               <p class="form-control-static">{{$contact->topbarcaption_en}}</p>
           </div>
           <div class="form-group">
               <label for="topbarcaption_ar">TOPBARCAPTION_AR</label>
               <p class="form-control-static">{{$contact->topbarcaption_ar}}</p>
           </div>
       <div class="form-group">
           <label for="map">MAP</label>
           <p class="form-control-static">{{$contact->map}}</p>
       </div>
       <div class="form-group">
           <label for="facebook">FACEBOOK</label>
           <p class="form-control-static">{{$contact->facebook}}</p>
       </div>
       <div class="form-group">
           <label for="twitter">TWITTER</label>
           <p class="form-control-static">{{$contact->twitter}}</p>
       </div>
       <div class="form-group">
           <label for="linkedin">LINKEDIN</label>
           <p class="form-control-static">{{$contact->linkedin}}</p>
       </div>
       <div class="form-group">
           <label for="instagram">INSTAGRAM</label>
           <p class="form-control-static">{{$contact->instagram}}</p>
       </div>
       <div class="form-group">
           <label for="youtube">YOUTUBE</label>
           <p class="form-control-static">{{$contact->youtube}}</p>
       </div>
       <div class="form-group">
           <label for="rss">RSS</label>
           <p class="form-control-static">{{$contact->rss}}</p>
       </div>
   </form>

   <a class="btn btn-link" href="{{ route('contacts.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

</div>
</div>

@endsection
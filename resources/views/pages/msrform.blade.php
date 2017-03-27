@extends('layouts.master')
@section('title','| Home Page')
{{-- @section('bannerslider')
@include('partials._bannerslider')
@endsection --}}

@section('content')
{{-- @include('error') --}}
<div class="spacer-60"></div>

<div class="container">
  <div class="row">
    <!-- About Section -->
    <section id="abt_sec" class="col-md-6 col-md-offset-3">
      <!-- Progressbars -->
      <div class="row skill_sec">

        <div class="titl_sec">
          <div class="col-xs-12">

            <h3 class="main_titl text-left">
              MAINTENANCE and SERVICE REQUEST(MSR)
            </h3>

          </div>

          <div class="clearfix"></div>
        </div>

        <div class="col-xs-12 skill_ara clearfix">
          @if(Session::has('create_msg'))
          <div class="alert alert-success" id="message">{{ Session::get('create_msg') }}</div>
          @endif
          {{-- form --}}
          <form action="{{ route('storeMsrForm') }}" method="POST" enctype="multipart/form-data" id="msrform">
            {{csrf_field()}}
            <div class="form-group">
             <label>REQUESTED FOR:</label>
             <div class="row" style="padding:8px 0px;">
               <div class="col-md-4 col-md-offset-2">
                 <label class="radio-inline"><input type="radio" name="requestedfor" value="Maintenance" checked="checked">MAINTENANCE</label>
               </div>
               <div class="col-md-4 col-md-offset-1">
                <label class="radio-inline"><input type="radio" name="requestedfor" value="Services">SERVICES</label>    
              </div>
            </div>     

          </div>

          <div class="form-group  @if($errors->has('category')) has-error @endif">
            <label for="category">CATEGORY:</label>
            <select class="form-control" id="category" name="category" value="{{ old("category") }}">
              <option value="">Select a Category</option>
              <option value="civil">Civil</option>
              <option value="electrical">Electrical</option>
              <option value="plumbing">Plumbing</option>
              <option value="air-conditioning">Air Conditioning</option>
              <option value="mechanical">Mechanical</option>
              <option value="fire-alarm">Fire alarm</option>
              <option value="fire-fighting">Fire fighting</option>
            </select>@if($errors->has("category"))
                <span class="help-block" style="color: red;" >{{ "category field is required" }}</span>
                @endif
          </div>

          <div class="form-group @if($errors->has('requestedby')) has-error @endif">
            <label>REQUESTED BY:</label>
            <input class="form-control" id="requestedby" type="text" name="requestedby">
            @if($errors->has("requestedby"))
                <span class="help-block" style="color: red;" >{{ "requested by field is required" }}</span>
                @endif
          </div>

          <div class="form-group @if($errors->has('location')) has-error @endif">
            <label for="location">SELECT LOCATION:</label>
            <select class="form-control" id="location" name="location" >
              <option value="">Select Location</option>
              <option value="mesaieed">MESAIEED</option>
              <option value="al-khor">AL-KHOR</option>
              <option value="dukhan">DUKHAN</option>
              <option value="zekreet">ZEKREET</option>
              <option value="doha">DOHA</option>
              <option value="others">OTHERS</option>
            </select>@if($errors->has("location"))
                <span class="help-block" style="color: red;" >{{ "location field is required" }}</span>
                @endif
          </div>

          <div class="form-group @if($errors->has('locationcenter')) has-error @endif" id="centerblock">
            <label for="locationcenter"> SELECT CENTER :</label>
            <select class="form-control" id="center" name="locationcenter">
              <option value="">Select Center</option>
            </select>@if($errors->has("locationcenter"))
                <span class="help-block" style="color: red;" >{{ "center field is required" }}</span>
                @endif
          </div>

        
          <div class="form-group @if($errors->has('otherlocationcenter')) has-error @endif" id="otherblock">
            <label>OTHERS:</label>
            <input class="form-control" id="other" type="text" name="otherlocationcenter">
            @if($errors->has("otherlocationcenter"))
                <span class="help-block" style="color: red;" >{{ "other field is required" }}</span>
                @endif
          </div>

          <div class="form-group @if($errors->has('contactno')) has-error @endif">
            <label>CONTACT NO:</label>
            <input class="form-control" id="contactno" type="text" name="contactno">
             @if($errors->has("contactno"))
                <span class="help-block" style="color: red;" >{{ "contactno field is required" }}</span>
                @endif
          </div>
          <div class="form-group @if($errors->has('desc')) has-error @endif">
            <label>DESCRIPTION:</label> <br>
            <textarea id="desc" name="desc" style="width:100%;" rows="5"> </textarea>
            @if($errors->has("desc"))
                <span class="help-block" style="color: red;" >{{ "description field is required" }}</span>
                @endif
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-success pull-right" style="background-color:#4cae4c !important">Submit</button>
          </div>
        </form>

      </div>
    </div>
    <div class="spacer-30"></div>

  </section>


</div>
</div>



@endsection

@section('scripts')

<script type="text/javascript">
 $(document).ready(function() {
  var c_a = new Array();
  c_a[1]="Village I|Village II|Village III|Village 393|Souq|Village 451 pI|Village 451 pII|Dunes Mall|45 Flats(BC)|Commercial Shops";
  c_a[2]="Dolphin|Shell|QATAR GAS|RAS GAS";
  c_a[3]="Souq|ALAQARIA GARDENS COMPOUND";
  c_a[4]="Labor Camp|DSSA";
  c_a[5]="ALAQARIA TOWER";
  $('#otherblock').hide();

  $('#location').on('change', function() {
    var index = document.getElementById("location").selectedIndex;
    var center = document.getElementById( "center" );

    if(index==6)
    {
     $('#centerblock').hide();
     $('#otherblock').show();
   }
   else
   {
     $('#centerblock').show();
     $('#otherblock').hide();
   }

            center.length=0;  // Fixed by Julian Woods
            center.options[0] = new Option('Select Center','');
            center.selectedIndex = 0;
            
            var center_arr = c_a[index].split("|");
            
            for (var i=0; i<center_arr.length; i++) {
              center.options[center.length] = new Option(center_arr[i],center_arr[i]);
            }
          });


  setTimeout(function() {
    $('#message').fadeOut('slow');
  }, 5000); 


});

//  $('#msrform').submit(function() {
//   $val=$('#location').val();
//   if($val=='others')
//   alert($val);
// });

</script>

@endsection
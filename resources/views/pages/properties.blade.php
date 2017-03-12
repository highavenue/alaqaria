@extends('layouts.master')
@section('title','| Home Page')
@section('bannerslider')
@include('partials._bannerslider')
@endsection

@section('content')




<!-- Page Content -->
<section id="srch_slide">

    <div class="container">

        <!-- Search Form -->
        <div class="row">
            <div class="col-md-12">
                <div class="srch_frm">
                   <?php
                   $locations=App\Location::all();
                   ?>
                   <h3>Real Estate Search</h3>
                   <form name="sentMessage" id="contactForm" novalidate method="POST" action="{{ route('propertysearch') }}">
                   {{csrf_field()}}
                    <div class="control-group form-group">
                        <div class="controls col-md-3 first">
                           <label>Location </label>
                           <select name="location" class="form-control" required data-validation-required-message="Please select a state." onchange="" id="location">
                            <option value="" selected="selected">Select Any Location</option>
                            @foreach($locations as $location)
                            <option value="{{ $location->id }}">{{$location->name_en.' - '.$location->name_ar}}</option>
                            @endforeach
                    </select>
                    <p class="help-block"></p>
                </div>

                <div class="controls col-md-3">
                   <label>Category</label>
                   <select name="category" class="form-control" required data-validation-required-message="Please select a state." id="category">
                       <option value="" selected="selected">Select a Category</option>
               </select>
           </div>

           <div class="controls col-md-3">
               <label>Type</label>
               <select name="type" class="form-control" required data-validation-required-message="Please select a state." id="type">
                <option value="" selected="selected">Select a Type</option>
            </select>
            <p class="help-block"></p>
        </div>

        <div class="controls col-md-3">
            <label>Actions </label>
            <select name="action" class="form-control" required data-validation-required-message="Please select a state.">
               <option value="all" selected="selected">All</option>
               <option value="sale" >For Sale</option>
               <option value="rent" >For Rent</option>
           </select>
           <p class="help-block"></p>
       </div>

       <div class="clearfix"></div>
   </div>

   <div class="sub_btn col-md-1 col-md-offset-11">
    <button type="submit" class="btn btn-primary">Search</button>
</div>
<div class="clearfix"></div>
<div id="success"></div>
<!-- For success/fail messages -->
</form>
</div>
</div>
</div>
<!-- /.row -->

</div>
<!-- /.container -->

</section>

<div class="spacer-60"></div>

<!-- Featured Properties Section -->
<section id="feat_propty">
    <div class="container">
        <div class="row">
        @include('partials._titlesectionbar',['title' => 'Properties','link_text' => '','link'=>'#'])  
        <?php $count=0 ?>  
            @foreach($properties as $property)
                @if($count++%3==0)
                    <div class="row" style="margin:0px;">
                @endif
                @include('partials._propertyboxview',$property)
                @if($count%3==0)
                    </div><div class="spacer-30"></div>
                @endif
            @endforeach

            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                  <p>{{ $properties->links() }}</p>
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
</section>

<div class="spacer-60"></div>






@endsection

@section('scripts')

<script>
    // $(document).ready(function() {
    //     $('select#location').on('change', function() {
    //         var optionSelected = $(this).find("option:selected");
    //         semesterSelected  = optionSelected.val();
    //         console.log(semesterSelected);

    //         $.ajax({
    //             type: "POST",
    //             cache: false,
    //             url : "/test",
    //             data: { sem : semesterSelected },
    //             success: function(data) {
    //                 var obj = $.parseJSON(data);
    //                 var i = 0;
    //                 console.log(data.iyo);

    //                 $.each(obj, function() {
    //                     console.log(this[0]);
    //                     console.log(this[1]);
    //                     console.log(this[2]);
    //                     console.log(this[3]);
    //                     console.log(this[4]);

    //                     i++;
    //                 });
    //             }
    //         })
    //         .done(function(data) {
    //             alert('done');
    //         })
    //         .fail(function(jqXHR, ajaxOptions, thrownError) {
    //             alert('No response from server');
    //         });
    //     });
    // });

    $(document).ready(function() {

        $('select#location').on('change', function() {
            var Selected = $(this).find("option:selected");
            idSelected  = Selected.val();
            var url=("loc_cat/").concat(idSelected);
            $.get( url)
            .done(function( data ) {
                $('#category').empty();
                $('#category').append('<option value="" selected="selected">Select a Category</option>');
                $.each(data,function(index,subCatObj)
                {
                        //alert(subCatObj.name_en);
                        $('#category').append('<option value="'+subCatObj.category_id+'">'+subCatObj.name_en+' - '+subCatObj.name_ar+'</option>');
                    });
                //alert( "Data Loaded: " + data );
            });
        });


        $('select#category').on('change', function() {
            var category = $(this).find("option:selected");
            idCategory=category.val();
            var location = $('select#location').find("option:selected");
            idLocation=location.val();
            var url=("loc_cat_type/"+idLocation+'/'+idCategory); //).concat(idSelected);
            $.get( url)
            .done(function( data ) {
                $('#type').empty();
                $('#type').append('<option value="" selected="selected">Select a Type</option>');
                $.each(data,function(index,subCatObj)
                {
                        //alert(subCatObj.name_en);
                        $('#type').append('<option value="'+subCatObj.type_id+'">'+subCatObj.name_en+' - '+subCatObj.name_ar+'</option>');
                    });
                //alert( "Data Loaded: " + data );
            });
        });



    });
</script>

@endsection
    <div class="srch_frm">
        <h3>Real Estate Search</h3>
        <form name="sentMessage" id="contactForm" novalidate action="{{ route('propertysearch') }}" method="POST">
        {{csrf_field()}}
            {{-- <div class="control-group form-group">
                <div class="controls">
                    <label>Keyword </label>
                    <input type="text" class="form-control" id="keyword" required data-validation-required-message="Please enter a keyword." placeholder="Any keyword">
                    <p class="help-block"></p>
                </div>
            </div> --}}

            <?php
            $locations=App\Location::all();
            ?>

            <div class="control-group form-group">
                <div class="controls">
                    <label>Location </label>
                    <select name="location" class="form-control" required data-validation-required-message="Please select a state." onchange="" id="location">
                        <option value="" selected="selected">Select Any Location</option>
                        @foreach($locations as $location)
                        <option value="{{ $location->id }}">{{$location->name_en.' - '.$location->name_ar}}</option>
                        @endforeach
                       {{--  <option value="" selected="selected">Any Location</option>
                        <option value="AL">Al Khor</option>
                        <option value="AK">Maiseed</option>
                        <option value="AZ">Dukhan</option>
                        <option value="AR">Zekreet</option>
                        <option value="CA">Other</option>
                        <option value="CO">Other</option>
                        <option value="CT">Other</option>
                        <option value="DE">Other</option> --}}
                    </select>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Category</label>
                    <select name="category" class="form-control" required data-validation-required-message="Please select a state." id="category">
                       <option value="" selected="selected">Select a Category</option>
                   {{--      <option value="2">Commercial</option>
                   <option value="3">Household</option> --}}
               </select>
           </div>
       </div>
       <div class="control-group form-group">
        <div class="controls">
            <label>Type</label>
            <select name="type" class="form-control" required data-validation-required-message="Please select a state." id="type">
                <option value="" selected="selected">Select a Type</option>
            </select>
        </div>
    </div>

    <div class="control-group form-group">
        <div class="controls">
            <label>Actions </label>
            <select name="action" class="form-control" required data-validation-required-message="Please select a state.">
                <option value="all" selected="selected">All</option>
                <option value="sale" >For Sale</option>
                <option value="rent" >For Rent</option>
            </select>
        </div>
    </div>
           {{--  <div class="control-group form-group">
                <div class="controls col-md-6 first">
                    <label>Actions </label>
                    <select name="Type" class="form-control" required data-validation-required-message="Please select a type.">
                        <option value="" selected="selected">Industrial</option>
                        <option value="" selected="selected">For Rent</option>
                        <option value="2">For Sale</option>
                    </select>
                </div>
                <div class="controls col-md-6">
                    <label>Actions </label>
                    <select name="Actions" class="form-control" required data-validation-required-message="Please select a Actions.">
                        <option value="" selected="selected">For Rent</option>
                        <option value="2">For Sale</option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div> --}}

            {{-- <div class="control-group form-group">
                 <div class="controls col-md-6 first">
                    <label>Min. Price </label>
                    <select name="min-price" class="form-control" required data-validation-required-message="Please select a Min. Price.">
                        <option value="" selected="selected">$50</option>
                        <option value="2">$00</option>
                        <option value="3">$200</option>
                        <option value="3">$300</option>
                        <option value="3">$400</option>
                        <option value="3">$500</option>
                        <option value="3">$700</option>
                        <option value="3">$800</option>
                        <option value="3">$900</option>
                        <option value="3">$000</option>
                        <option value="3">$500</option>
                        <option value="3">$2000</option>
                        <option value="3">$2500</option>
                    </select>
                </div> 
                <div class="controls col-md-6">
                    <label>Max. Price </label>
                    <select name="max-price" class="form-control" required data-validation-required-message="Please select a Max. Price.">
                        <option value="" selected="selected">$200</option>
                        <option value="2">$300</option>
                        <option value="3">$400</option>
                        <option value="3">$500</option>
                        <option value="3">$600</option>
                        <option value="3">$700</option>
                        <option value="3">$800</option>
                        <option value="3">$900</option>
                        <option value="3">$1000</option>
                        <option value="3">$1500</option>
                        <option value="3">$2000</option>
                        <option value="3">$2500</option>
                        <option value="3">$3000</option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div> --}}

            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>


    @section('searchbox_script')
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
            var url=("/loc_cat/").concat(idSelected);
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
            var url=("/loc_cat_type/"+idLocation+'/'+idCategory); //).concat(idSelected);
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
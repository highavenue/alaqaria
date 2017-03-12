 <?php
 $lang=Session::get('lang');

 if($lang=='ar')
 {
    $location_name=$property->location->name_ar;
    $category_name=$property->category->name_ar;
    $type_name=$property->type->name_ar;
    $desc=$property->desc_ar;
}
else
{
    $location_name=$property->location->name_en;
    $category_name=$property->category->name_en;
    $type_name=$property->type->name_en;
    $desc=$property->desc_en;
}

$images=App\PropertyImage::where('property_id','=',$property->id)->get();
$img_count=count($images);
if($img_count==0)
{
    $image=new App\EventImage();
    $image->image='no_img.png';
    $images[]=$image;
}

?>

@extends('layouts.master')
@section('title','| Home Page')
@section('bannerslider')
@include('partials._bannerslider')
@endsection

@section('css')
<!-- bxslider -->
<link href="/css/jquery.bxslider.css" rel="stylesheet">
@endsection

@section('content')

<div class="spacer-40"></div>
<div class="container">
    <div class="row">
        @include('partials._titlesectionbar',['title' => 'Search Result','link_text' => '','link'=>'#'])  
    </div>
    <div class="row">
        <!-- Proerty Details Section -->
        <section id="prop_detal" class="col-md-8">
            <div class="row">
                <div class="panel panel-default">
                   <!-- Proerty Slider Images -->
                   <div class="panel-image">
                    <ul id="prop_slid">
                        @foreach($images as $image)
                        <li><img class="img-responsive" src="{{$image->imageURL}}" @if($image->caption!='2') alt="{{$image->caption}}" title="{{$image->caption}}" @endif style="width: 100%; height: 100%;">
                        </li>
                        @endforeach

                       {{--  <li><img class="img-responsive" src="/images/property/prop.png" alt="Property Slide Image" title="Funky roots">
                   </li> --}}

               </ul>
               <!-- Proerty Slider Thumbnails -->    
               <div class="col-md-12 rel_img">
                <ul id="slid_nav">
                    <?php $i=0; ?>
                    @foreach($images as $image)
                    <li style="padding: 1%">
                        <a data-slide-index="{{$i++}}" href=""><img class="img-responsive img-hover" src="{{$image->imageURL}}" alt="" style="width: 150px;height:75px;">
                        </a>
                    </li>
                    @endforeach

                            {{-- <li>
                                <a data-slide-index="4" href=""><img class="img-responsive img-hover" src="/images/property/prop_thumb.png" alt="">
                                </a>
                            </li> --}}
                            

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="panel-body">
                    <div class="prop_feat">
                        <p class="area"><i class="fa fa-map-marker"></i>{{$location_name}}..</p>
                        <p class="bedrom"><i class="fa fa-bars"></i> {{$category_name}}..</p>
                        <p class="bedrom"><i class="fa fa-building-o"></i> {{$type_name}}..</p>
                    </div>

                    {{-- <h3 class="sec_titl">Amillarah Private Islands</h3> --}}

                    <div class="col_labls larg_labl">

                        <p class="or_labl">For {{ucfirst($property->for)}}</p>
                        {{-- <p class="blu_labl"> $470,00</p> --}}

                    </div>

                    <p class="sec_desc">
                        {!!$desc!!}
                    </p>    

                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class="spacer-30"></div>



    </section>

    <!-- Sidebar Section -->                     
    <section id="sidebar" class="col-md-4">
        <!-- Search Form -->               
        <div class="row">
            <div class="col-md-12">
                @include('partials._searchbox')
            </div>
        </div>
        <!-- /.row -->


        <div class="spacer-30"></div>

    </section>

    <div class="spacer-60"></div>

</div>
</div>

@endsection


@section('scripts')
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

<!-- BX Slider -->
<script src="/js/jquery.bxslider.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    /* Product Slider Codes */
    $(document).ready(function () {
        'use strict';

        $('#prop_slid').bxSlider({
            pagerCustom: '#slid_nav',
            captions:true,
            auto:true,
            pause:4000
        });
    });

</script>

@yield('searchbox_script')


@endsection
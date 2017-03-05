@extends('layouts.master')
@section('title','| Home Page')
@section('bannerslider')
@include('partials._bannerslider')
@endsection

@section('content')

@include('partials._searchandslide')

<div class="spacer-60"></div>

<!-- Featured Properties Section -->
<section id="feat_propty">
    <div class="container">
        <div class="row">

            @include('partials._titlesectionbar',['title' => 'Featured Properties','link_text' => 'View Properties','link'=>'#'])    

            @include('partials._propertyboxview')
            @include('partials._propertyboxview')
            @include('partials._propertyboxview')

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


<div class="spacer-60"></div>



<!-- Testimonial Section -->
<section id="testim">
    <div class="container">
        <div class="row testim_sec m0">

            @include('partials._testimonial')
            @include('partials._testimonial')
            @include('partials._testimonial')
            @include('partials._testimonial')
            @include('partials._testimonial')

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


<div class="spacer-60"></div>


<!-- Latest News Section -->
<section id="lates_news">
    <div class="container">
        <div class="row">

           @include('partials._titlesectionbar',['title' => 'latest news','link_text' => 'view the blog','link'=>'#']) 

           @include('partials._newsbox')
           @include('partials._newsbox')
           @include('partials._newsbox')

       </div>
       <!-- /.row -->
   </div>
   <!-- /.container -->
</section>


<div class="spacer-60"></div>



@endsection

@section('scripts')
<!-- Owl Carousel JavaScript -->
<script src="js/owl.carousel.min.js"></script>

<!-- Flexslider JavaScript -->
<script src="js/jquery.flexslider-min.js"></script>


<!-- Script to Activate the Carousels -->
<script type="text/javascript">
    $(document).ready(function () {
        'use strict';
        $("#owl-carousel").owlCarousel({
            items: 5,
            itemsDesktop: [1199, 5],
            itemsDesktopSmall: [979, 3],
            itemsTablet: [768, 2],
            itemsMobile: [479, 1],
            navigation: true,
            navigationText: [
            "<i class='fa fa-chevron-left icon-white'></i>",
            "<i class='fa fa-chevron-right icon-white'></i>"
            ],
            autoPlay: false,
            pagination: false
        });

        /*$("#slide_pan").owlCarousel({
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            itemsMobile: [479, 1],
            navigation: true,
            navigationText: [
            "<i class='fa fa-chevron-left icon-white'></i>",
            "<i class='fa fa-chevron-right icon-white'></i>"
            ],
            autoPlay: false,
            pagination: false
        });*/

        $(".slide_pan_news").owlCarousel({
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            itemsMobile: [479, 1],
            navigation: true,
            navigationText: [
            "<i class='fa fa-chevron-left icon-white'></i>",
            "<i class='fa fa-chevron-right icon-white'></i>"
            ],
            autoPlay: false,
            pagination: false
        });

        $(".testim_sec").owlCarousel({
            items: 2,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 1],
            itemsMobile: [479, 1],
            navigation: true,
            navigationText: [
            "<i class='fa fa-chevron-left icon-white'></i>",
            "<i class='fa fa-chevron-right icon-white'></i>"
            ],
            autoPlay: false,
            pagination: false
        });


        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: true,
            slideshow: true,
            slideshowSpeed: 5000

        });
    });
</script>
@yield('scripts_append')

@endsection
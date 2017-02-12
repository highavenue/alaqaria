    <?php
        $sliders=App\Slider::all();
        $lang=Session::get('lang');
    ?>
    <!-- Header Stat Banner -->
    <header id="banner" class="stat_bann">
        <div class="bannr_sec">
            {{-- <img src="http://placehold.it/1350x900" alt="Banner"> --}}
            @foreach($sliders as $slider)
            <img src="{{$slider->imageURL}}" alt="Banner">
            @endforeach
            <h1 class="main_titl">
            Best Real Estate Deals site
        </h1>
           {{--  <h4 class="sub_titl">
            Wes Anderson American Apparel
        </h4> --}}

        </div>
    </header>
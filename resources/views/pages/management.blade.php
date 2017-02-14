  <?php
        $managements=App\Management::orderBy('id', 'asc')->get();
        $lang=Session::get('lang');
        $count=0;

        if($lang=='ar')
            $heading='مجموعة مخرجين';
        else
            $heading='Board of Directors';
                
    ?>
    
@extends('layouts.master')
@section('title','| Home Page')
@section('bannerslider')
@include('partials._bannerslider')
@endsection

@section('content')
<div class="spacer-60"></div>

<div class="container">
    <div class="row">
        <!-- Features Section -->
        <section id="serv_pg" class="col-md-12">
            <!-- What we do -->
            <div class="row skill_sec">
                @include('partials._titlesectionbar',['title' => $heading,'link_text' => '','link'=>'#'])

                <div class="col-xs-12 serv_col">

                {{-- loop blow and add the spice after every 4 loop --}}
                
                {{-- <div class="clearfix spacer-50"></div> --}}

                @foreach($managements as $management)
                    <div class="col-xs-3 text-center align">
                        <img src="{{$management->imageURL}}" width="150" class="thumbnail" style="margin: 0px auto">
                         @if($lang=='ar')
                            <h3 class="fun_num">{{$management->name_ar}}</h3>
                            <p class="desc"> {{$management->desig_ar}} </p>
                        @else
                            <h3 class="fun_num">{{$management->name_en}}</h3>
                            <p class="desc"> {{$management->desig_en}} </p>
                        @endif
                    </div>
                    @if(++$count%4==0)
                        <div class="clearfix spacer-50"></div>
                    @endif
                @endforeach


            </div>
        </div>
        <!-- /.row -->
        <div class="spacer-30"></div>
    </section>

</div>
</div>



@endsection

@section('scripts')

@endsection
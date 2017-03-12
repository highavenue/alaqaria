<?php
        $about=App\About::find(3);
        $lang=Session::get('lang');
        
        if($lang=='ar')
        {
            $subject=$about->subject_ar;
            $desc=$about->desc_ar;
        }
        else
        {
            $subject=$about->subject_en;
            $desc=$about->desc_en;
        }
                
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
            <!-- About Section -->
            <section id="abt_sec" class="col-md-8">
                <!-- Progressbars -->
                <div class="row skill_sec">
                    @include('partials._titlesectionbar',['title' => $subject,'link_text' => '','link'=>'#'])

                    <div class="col-xs-12 skill_ara">
                        <p class="pull-right text-justify" > <img src="{{$about->imageURL}}" width="200" class="pull-right img-responsive" style="margin-left: 20px;">{!!$desc!!}</p>
                    </div>
                </div>
                <div class="spacer-30"></div>
             
            </section>


            <!-- Sidebar Section -->
            <section id="sidebar" class="col-md-4">
                <!-- Search Form -->
                @include('partials._searchbox')
                <div class="spacer-30"></div>

            </section>
        </div>
    </div>



@endsection

@section('scripts')

@yield('searchbox_script')

@endsection
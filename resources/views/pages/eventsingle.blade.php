  <?php
        //$events=App\Event::orderBy('id', 'desc')->paginate(1);
        $lang=Session::get('lang');
        $count=0;

        if($lang=='ar')
            $heading=$event->name_ar;
        else
            $heading=$event->name_en;
                
        $img_count=count($images);
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
                    <div class="row">
                        {{-- loop blow and add the spice after every 4 loop --}}

                        {{-- <div class="clearfix spacer-50"></div> --}}


                        <?php $count=0; ?>
                        <div class="jumbotron"> 
                            <div class="row"> 
                                <div class="col-md-12" style="padding: 0px; margin-bottom: 15px;">
                                    <a class="btn btn-info align-middle" href="{{ route('events') }}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width: 100%;">

                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            @for ($i = 0; $i < $img_count; $i++)
                                            <li data-target="#carousel-example-generic" data-slide-to={{$i}} @if($i==0) echo class="active"@endif></li>
                                            @endfor                         
                                        </ol>
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            @foreach ($images as $image)
                                            <div class="item @if($count++==0) echo active @endif ">
                                              <img src="{{$image->imageURL}}" alt="..." width="100%" height="100%">
                                              <div class="carousel-caption">
                                              {{$image->caption}}
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>  
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>  
                            </div>
                        </div>


                        <div class="row"> 
                            <div class="col-md-12" style="padding: 0px; margin-top: 15px;">
                                <a class="btn btn-info align-middle" href="{{ route('events') }}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
                            </div>
                        </div>


                    </div>
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


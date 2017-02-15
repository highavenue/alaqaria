  <?php
        //$events=App\Event::orderBy('id', 'desc')->paginate(1);
        $lang=Session::get('lang');
        $count=0;

        if($lang=='ar')
            $heading='أحداث';
        else
            $heading='Events';
                
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
            <div class="row skill_sec ">
                @include('partials._titlesectionbar',['title' => $heading,'link_text' => '','link'=>'#'])

                <div class="col-xs-12 serv_col ">
                <div class="row">
                    {{-- loop blow and add the spice after every 4 loop --}}

                    {{-- <div class="clearfix spacer-50"></div> --}}

                    @foreach($events as $event)
                    <?php $count=0; ?>
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-md-12">
                                @if($lang=='ar')
                                <h3 class="fun_num">{{$event->name_ar}}</h3>
                                <hr>
                                <p class="desc"> {{$event->description_ar}} </p>
                                @else
                                <h3 class="fun_num text-center">{{$event->name_en}}</h3>
                                <hr>
                                <p class="desc text-justify"> {{$event->description_en}} </p>
                                @endif
                            </div>
                        </div>
                        <div class="spacer-30"></div>

                        <?php
                        $images=App\EventImage::where('event_id','=',$event->id)->select('image')->get();
                        $c=count($images);
                        ?>

                        @foreach($images as $image)
                        @if($count++%4==0) <div class="spacer-30"></div><div class="row">@endif
                        <div class="col-md-3">
                            <img src="{{$image->imageURL}}" width="100%" class="thumbnail">
                        </div>
                        @if($count%4==0 || --$c==0) </div>@endif
                        @endforeach

                    </div>
                    @endforeach
                    <div class="row"><div class="col-md-12 text-center" >{{$events->links()}}</div></div>  
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


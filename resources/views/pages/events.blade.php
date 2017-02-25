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
            @include('partials._titlesectionbar',['title' => $heading,'link_text' => '','link'=>'#'])
            <div class="row skill_sec ">
  <div class="row serv_col">
      <?php $count=0;?>
    @foreach($events as $event)
      <?php
      $images=App\EventImage::where('event_id','=',$event->id)->get();
      $img_count=count($images);
      $i=0;
      ?>

      @foreach($images as $image)
      @if(++$i==1)
       @if($count++%4==0) <div class="spacer-30"></div><div class="row">@endif
      
      <div class="col-md-3 ">
        <a href="{{route('eventsingle',$image->event_id)}}" style="cursor: pointer;">
          <img src="{{$image->imageURL}}" width="100%" style="height: 200px;" class="thumbnail">
        </a>
        <a href="#" class="text-center">{{$event->name_en}}<span class="badge pull-right">{{$img_count}} Photos</span></a>
      
        
        
      </div>
     @endif
       @if($count%4==0 ) </div>@endif
      @endforeach
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


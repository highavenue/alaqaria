  <?php
        $lang=Session::get('lang');
        $count=0;

        // if($lang=='ar')
        // {
        //     $heading=$tenderRequirement->subject_ar;
        //     $desc=$tenderRequirement->desc_ar;
        // }
        // else
        // {
        //     $heading=$tenderRequirement->subject_en;
        //     $desc=$tenderRequirement->desc_en;
        // }
                
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
                @include('partials._titlesectionbar',['title' => 'Latest Tenders','link_text' => '','link'=>'#'])

                <div class="col-xs-12 serv_col ">
                    <div class="row">
                        {{-- loop blow and add the spice after every 4 loop --}}

                        {{-- <div class="clearfix spacer-50"></div> --}}
 
                                <div class="col-md-12">
                                {{--  --}}
                                @foreach($tenders as $tender)
                             
                                <div class="jumbotron">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <h3 class="fun_num">{{$tender->tender_no}}</h3>
                                        <h3 class="fun_num">{{$tender->close_date}}</h3>
                                        <h3 class="fun_num">{{$tender->created_at}}</h3>
                                            @if($lang=='ar' && $tender->english_only==0)                                           
                                            <hr>
                                            <p class="desc"> {{$tender->subject_ar}} </p>
                                            <p class="desc"> {!!$tender->desc_ar!!} </p>
                                            @else
                                           <p class="desc"> {{$tender->subject_en}} </p>
                                            <p class="desc"> {!!$tender->desc_en!!} </p>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="spacer-30"></div>        

                                </div>
                                @endforeach
                               {{--  <div class="row"><div class="col-md-12 text-center" >{{$events->links()}}</div></div>   --}}
                                {{--  --}}

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


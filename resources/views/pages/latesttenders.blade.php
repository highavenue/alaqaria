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
{{-- @section('bannerslider')
@include('partials._bannerslider')
@endsection --}}

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

                            @if(Session::has('warning_msg'))
                            <div class="alert alert-danger" id="message">{{ Session::get('warning_msg') }}</div>
                            @endif


                            {{-- @foreach($tenders as $tender)

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

                                        <form action="{{ route('filedownload') }}" method="POST">
                                            {{csrf_field()}}
                                            <input type="button" class="btn btn-info well-sm showhide" name="download" id="{{$tender->id}}" value="Show Download">

                                            <div id="{{'id_'.$tender->id}}"> 

                                             <div class="form-group">
                                                <input type="text" class="form-control" name="password" id="password" placeholder="password">
                                            </div>

                                            <input type="hidden" name="tender_id" value="{{$tender->id}}">
                                            <button class="btn btn-success well-sm" type="submit"><i class="fa fa-download" aria-hidden="true"></i> download</button>

                                        </div>
                                    </form>

                                    </div>
                                </div>
                                <div class="spacer-30"></div>        

                            </div>
                            @endforeach --}}
  {{--                           <div class="row text-center">
                                <form action="{{ route('filedownload') }}" method="POST">
                                {{csrf_field()}}
                                        Select An Option : 
                                    <label style="margin-left: 10px;" class="radio-inline"><input type="radio" name="category" checked value="all">Show All</label>
                                    <label class="radio-inline"><input type="radio" name="category" value="active">Show Active</label>
                                    <label class="radio-inline"><input type="radio" name="category" value="inactive">Show Inacive</label>
                                    <button type="submit" class="btn btn-info" style="margin-left: 20px;" >Filter</button>
                                </form>
                            </div>
                            <div class="spacer-30"></div> --}}

                            @foreach($tenders as $tender)

                             <?php
                                        $tender_closing = new Carbon\Carbon($tender->close_date);
                                        $today=new Carbon\Carbon;   
                                        $today=$today->setTime(0,0,0);
                                        $status_msg;
                                        $download;
                                        $headcolor;
                                        
                                        $left = $tender_closing->diffInDays($today);
                                        if($today->lte($tender_closing))
                                        {
                                            $status_msg='<i class="fa fa-circle" style="color:#4caf50;" aria-hidden="true"></i> '.$left.' days left';
                                            $headcolor='panel-info';
                                            $download=1;
                                        }
                                        else
                                        {
                                            $status_msg='<i class="fa fa-circle" style="color:red;" aria-hidden="true"></i> Expired';
                                            $headcolor='panel-danger';
                                            $download=0;
                                        }
                                        
                            ?>


                            <div class="panel {{$headcolor}}">
                                <div class="panel-heading" style="padding: 5px;">
                                    <div class="row">
                                        <div class="col-md-10" style="border-right: 2px white solid; font-size: 15px;">
                                            @if($lang=='ar' && $tender->english_only==0)
                                                {{$tender->subject_ar}}
                                            @else
                                                {{$tender->subject_en}}
                                            @endif
                                        </div>
                                        <div class="col-md-2" style="padding-right: 0px;padding-top: 8px;">
                                            <div class="row">posted on: <span class="badge">{{ Carbon\Carbon::parse($tender->created_at)->formatLocalized('%d-%b-%y') }}</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body text-justify" style="padding: 15px;">
                                    <div class="row">
                                        <b>Tender Ref No : </b><span class="badge">{{$tender->tender_no}}</span>
                                    </div>
                                    <div class="row">
                                        <b>closing date : </b><span class="badge">{{ Carbon\Carbon::parse($tender->close_date)->formatLocalized('%d-%b-%y') }}</span>
                                    </div>

                                    @if($lang=='ar' && $tender->english_only==0)
                                        {!!$tender->desc_ar!!} 
                                    @else
                                        {!!$tender->desc_en!!} 
                                    @endif
                                </div>
                                <div class="panel-footer" style="padding: 5px;">
                                    <div class="row">
                                    @if($download==1)
                                        <form action="{{ route('filedownload') }}" method="POST">
                                           {{csrf_field()}}
                                           <input type="hidden" name="tender_id" value="{{$tender->id}}">
                                           <div class="col-md-2">  <input type="button" class="btn btn-default well-sm showhide" name="download" id="{{$tender->id}}" value="Show Download"> </div>
                                           <div class="col-md-6"> <div style="margin:0px;" class="form-group {{'id_'.$tender->id}}">
                                            <input type="text" class="form-control" name="password" id="password" placeholder="password">
                                        </div> </div>
                                        <div class="col-md-2"> <button class="btn btn-success well-sm {{'id_'.$tender->id}}" type="submit"><i class="fa fa-download" aria-hidden="true"></i> download</button> </div>
                                    </form>
                                    <div class="col-md-2 " style="border-left: 2px white solid;padding: 8px;"> 
                                       Status : {!!$status_msg!!}
                                    </div>
                                    @else
                                    <div class="col-md-2 col-md-offset-10" style="border-left: 2px white solid;padding: 8px;"> 
                                       Status : {!!$status_msg!!}
                                    </div>
                                    @endif
                                </div>     
                            </div>
                            </div>
                            <div class="spacer-30"></div>
                            @endforeach 

                        <div class="row">
                            <div class="col-md-12" style="text-align: center;">
                              <p>{{ $tenders->links() }}</p>
                          </div>
                      </div>

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
<script type="text/javascript">
    $(document).ready(function(){     
        @foreach($tenders as $tender) 
        $(".{{'id_'.$tender->id}}").hide();
        $("#{{$tender->id}}").click(function(){
          $(".{{'id_'.$tender->id}}").slideToggle("fast");
      });
        @endforeach
    });

    $(".showhide").click(function() {
        var $this = $(this);

        $this.toggleClass('show');

        if ($this.hasClass('show')) {
            $this.val('Hide Download');
        } else {
            $this.val('Show Download');
        }
    });



    setTimeout(function() {
        $('#message').fadeOut('slow');
    }, 5000); 

</script>

@endsection




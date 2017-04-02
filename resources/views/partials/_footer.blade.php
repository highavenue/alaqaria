    <?php
        $contact=App\Contact::find(1);
        $aboutus=App\About::find(1);
        $lang=Session::get('lang');

        $about_desc="";

        if($lang=='ar')
        {
            $about_desc=$aboutus->desc_ar;

        }
        else
        {
            $about_desc=$aboutus->desc_en;

        }
                

    ?>

    <!-- Footer -->
    <footer >
        <!-- Footer Top -->           
        <div class="footer_top">
            <div class="container">   
                <div class="row">
                    <!-- About Section -->                
                    <div class="col-md-3 abt_sec">
                        <h2 class="foot_title">
                   About ALAQARIA
                </h2>
                        <p>{!!$about_desc!!}</p>

                    </div>
                    <!-- Latest Tweets --> 
                    <div class="col-md-3 abt_sec">
                        <h2 class="foot_title">
                   Page Views
                </h2>
                <div style="background-color: black;width: 100px;height: 30px;text-align: center;color: white;font-size: 24px;">
                <?php
session_start();
$counter_name = "counter.txt";

// Check if a text file exists. If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}

// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

// Has visitor been counted in this session?
// If not, increase counter value by one
if(!isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f); 
}

echo "$counterVal";
?>
                  
                </div>
                        {{-- <ul class="tweets">
                            <li> <i class="fa fa-twitter"></i>
                                <p class="twee">
                                    Check out this great <a href="#">#themeforest</a> item 'Responsive Photography WordPress <a href="#">http://drbl.in/871942</a>
                                </p>

                                <p class="datd"> 6 April 2015 </p>
                                <div class="clearfix"></div>
                            </li>


                            <li class="spacer-20"></li>

                            <li><i class="fa fa-twitter"></i>

                                <p class="twee">
                                    <a href="#"> #MadeBySeries </a> Made By: Chris Coyier, Founder <a href="#">  http://ow.ly/LeAKf </a>
                                </p>

                                <p class="datd"> 6 April 2015 </p>
                                <div class="clearfix"></div>
                            </li>
                        </ul> --}}

                    </div>
                    <!-- Contact Info -->
                    <div class="col-md-3">
                        <h2 class="foot_title">
                   Contact Info
                </h2>
                        <ul class="cont_info">
                            <li><i class="fa fa-map-marker"></i>
                                <p>
                                @if($lang=='ar')
                                {{ $contact->area_ar}}
                                -
                                {{ $contact->street_ar }}
                                @else
                                {{ $contact->area_en}}
                                -
                                {{ $contact->street_en }}
                                @endif
                                </p>
                            </li>
                            <li><i class="fa fa-phone"></i>
                                <p> <a href="tel:{{$contact->ph1}}">                                 
                                Phone: 
                                <span dir="ltr">{{$contact->ph1}}<span> </a> </p>
                            </li>

                            @if($contact->ph2)
                            <li><i class="fa fa-phone"></i>
                                <p> <a href="tel:{{$contact->ph2}}">                                 
                                Phone: 
                                <span dir="ltr">{{$contact->ph2}}<span> </a> </p>
                            </li>
                            @endif

                            <li><i class="fa fa-envelope"></i>
                                <p> <a href="mailto:{{$contact->email}}"> Email: {{$contact->email}} </a> </p>
                            </li>
                        </ul>

                    </div>
                    <!-- Useful Links -->
                    <div class="col-md-3">
                        <h2 class="foot_title">
                            Useful Links
                        </h2>
                        <ul class="foot_nav">
                            <li> <a href="{{ route('homePage') }}">Home Search</a> </li>
                            <li> <a href="{{ route('properties') }}">Properties Inspection</a> </li>
                            <li> <a href="{{ route('latestTenders') }}">Latest Tenders</a> </li>
                            <li> <a href="{{route('events')}}">Events</a> </li>
                            <li> <a href="{{ route('contactUs') }}">ContactUs</a> </li>
                        </ul>

                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->

        </div>
        <!-- Copyright -->
        <div class="footer_copy_right">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <p>&copy; Copyright 2017. {{-- All Rights Reserved by <a href="#"> WeDoor --}} </a>
                        </p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p>Website develped by <a href="http://www.highavenuegroup.com" target="blank"> Highavenue </a> </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
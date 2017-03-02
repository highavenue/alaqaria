    <!-- Navigation -->
    <nav class="navbar" role="navigation" style="box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25);border-radius: 0px;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Logo -->
               {{--  <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo">
                </a> --}}
                <a class="navbar-brand" href="{{ route('homePage') }}"><img src="/uploads/img/logo/logo.jpg" alt="logo" height="100">
            </div>
            <!-- Navigation -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="" href="{{ route('homePage') }}"> Home </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('aboutUs') }}"> About Us </a>
                            </li>
                            <li>
                                <a href="{{ route('companyOverview') }}"> Company Overview </a>
                            </li>
                            <li>
                                <a href="{{ route('missionAndVision') }}"> Mission & Vision </a>
                            </li>

                        </ul>

                    </li>
                    <li>
                        <a href="#">Management </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('management') }}"> Board of Director </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Property </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="property_listing.html"> Property Listings </a>
                            </li>
                            <li>
                                <a href="property_details.html"> Property Single </a>
                            </li>
                        </ul>
                    </li>


                      <li>
                        <a href="#">Tenders</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('latestTenders') }}">Latest Tenders</a></li>
                            <li><a href="{{route('howToTender')}}">How to Tender</a></li>
                             <li><a href="{{route('tenderTermsAndConditions')}}">Terms & Conditions</a></li>
                        </ul>
                    </li>


                   
                    <li>
                        <a href="blog.html">Blog                          </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-single.html"> Blog Single </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages                                       </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="active" href="about.html"> About us </a>
                            </li>
                            <li>
                                <a href="services.html"> Services </a>
                            </li>
                            <li>
                                <a href="pricing.html"> Pricing Table </a>
                            </li>
                            <li>
                                <a href="404.html"> 404 Page </a>
                            </li>
                        </ul>

                    </li>
                    <li>
                       {{-- <a style="text-decoration: none;cursor: pointer;" onclick="document.getElementById('myform').submit();">Events</a>
                         <form id="myform" action="{{ route('events') }}" method="POST" style="display: none;">   
                         {{csrf_field()}} 
                             <input type="hidden" name="eventid" value="">        
                         </form> --}}
        
                     <a href="{{route('events')}}">Events</a>
                        
                     
                 </li>

                    <li>
                        <a class="" href="{{ route('contactUs') }}">ContactUs</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
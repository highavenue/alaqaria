    <?php
        $contact=App\Contact::find(1);
        $lang=Session::get('lang');
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
                   About Wedoor
                </h2>
                        <p>
                            Ethical quinoa slow-carb squid, irony Pitchfork tousled hella art party PBR&amp;B cray dreamcatcher brunch.
                        </p>

                        <div class="spacer-20"></div>

                        <p>
                            Bicycle rights jean shorts organic, street art PBR occupy flexitarian pour-over master cleanse farm-to-table.

                        </p>

                    </div>
                    <!-- Latest Tweets --> 
                    <div class="col-md-3">
                        <h2 class="foot_title">
                   Latest Tweets
                </h2>
                        <ul class="tweets">
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
                        </ul>

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
                            <li> <a href="index.html">Home Search</a> </li>
                            <li> <a href="property_listing.html">Properties Inspection</a> </li>
                            <li> <a href="agents.html">Agents Consult</a> </li>
                            <li> <a href="blog.html">Latest News</a> </li>
                            <li> <a href="contact.html">Get in touch</a> </li>
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
                        <p>&copy; Copyright 2014. All Rights Reserved by <a href="#"> WeDoor </a>
                        </p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p>Template developed by <a href="http://themeforest.net/user/crelegant"> The Crelegant Team </a> </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
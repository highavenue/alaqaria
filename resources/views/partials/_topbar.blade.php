<?php
    $contact=App\Contact::find(1);
    $lang=Session::get('lang');
?>
    <!-- Top Bar -->
    <section class="top_sec">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 top_lft">
                    <div class="soc_ico">
                        <ul>
                            <li class="tweet">
                                <a href="{{$contact->twitter}}" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="fb">
                                <a href="{{$contact->facebook}}" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="insta">
                                <a href="{{$contact->instagram}}" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="linkd">
                                <a href="{{$contact->linkedin}}" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="ytube">
                                <a href="{{$contact->youtube}}" target="_blank">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li class="rss">
                                <a href="{{$contact->rss}}" target="_blank">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>


                        </ul>

                    </div>
                    <div class="inf_txt">
                        <p>
                        @if($lang=='ar')
                            {{ $contact->topbarcaption_ar}}
                            @else
                            {{ $contact->topbarcaption_en}}
                            @endif
                        </p>
                    </div>

                </div>
                <!-- /.top-left -->
                <div class="col-xs-12 col-md-6 top_rgt">
                    <div class="sig_in">
                        <p><i class="fa fa-user"></i>
                            <a href="#login_box" class="log_btn" data-toggle="modal"> Sign in </a> or <a class="reg_btn" href="#reg_box" data-toggle="modal"> create account </a> </p>
                        </div>
                        {{-- <div class="submit_prop">
                            <h3 class="subm_btn"><a href="#prop_box" data-toggle="modal">
                                <i class="fa fa-bars"></i>
                                <span> Submit Property </span></a>
                            </h3>
                        </div> --}}
                        <div class="submit_prop">
                            <h3 class="subm_btn">
                               {{--  <a><span> En </span></a>
                                <a><span> Ar </span></a> --}}
                                <form action="/lang" method="POST" style="display: inline;">
                                {{csrf_field()}}
                                    <button type="submit" name="action" value="en" class="btn btn-link" style="color: white">En</button>
                                </form>
                                <form action="/lang" method="POST" style="display: inline;">
                                {{csrf_field()}}
                                    <button type="submit" name="action" value="ar" class="btn btn-link" style="color: white">عربى</button>
                                </form>
                            </h3>
                        </div>

                    </div>
                    <!-- /.top-right -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
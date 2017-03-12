   <?php
        $lang=Session::get('lang');

        if($lang=='ar')
        {
            $location_name=$property->location->name_ar;
            $category_name=$property->category->name_ar;
            $type_name=$property->type->name_ar;
            $desc=$property->desc_ar;
        }
        else
        {
            $location_name=$property->location->name_en;
            $category_name=$property->category->name_en;
            $type_name=$property->type->name_en;
            $desc=$property->desc_en;
        }

        $images=App\PropertyImage::where('property_id','=',$property->id)->get();
        $img_count=count($images);
        if($img_count==0)
        {
            $image=new App\EventImage();
            $image->image='no_img.png';
            $images[]=$image;
        }
                
    ?>

            <!-- Property 1 -->
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-image">
                        <img class="img-responsive img-hover" style="width: 370px; height: 240px" src="{{$images[0]->imageURL}}" alt="">
                        {{-- http://placehold.it/370x240 --}}
                        <div class="img_hov_eff">
                            <a class="btn btn-default btn_trans" href="{{ route('propertysingle',$property->id) }}"> More Details </a>
                        </div>

                    </div>
                    <div class="sal_labl">
                    For {{ucfirst($property->for)}}
                    </div>

                    <div class="panel-body">
                        <div class="prop_feat">
                            <p class="area"><i class="fa fa-map-marker"></i>{{substr($location_name,0,12)}}..</p>
                            <p class="bedrom"><i class="fa fa-bars"></i> {{substr($category_name,0,12)}}..</p>
                            <p class="bedrom"><i class="fa fa-building-o"></i> {{substr($type_name,0,12)}}..</p>
                        </div>
                        {{-- <h3 class="sec_titl">
                         Amillarah Private Islands                 </h3> --}}

                         <p class="sec_desc">
                            @if($lang=='ar')
                            {!!substr($desc, 0,400)!!}
                            @else
                            {!!substr($desc, 0,100)!!}...
                            @endif
                        </p>
                        <div class="panel_bottom">
{{--                             <div class="col-md-6">
                                <p class="price text-left"> $250,100</p>
                            </div> --}}
                            <div class="col-md-6 col-md-offset-6">
                                <p class="readmore text-right"> <a href="{{ route('propertysingle',$property->id) }}">  Read More </a> </p>

                            </div>



                        </div>
                    </div>
                </div>
                {{-- <div class="share_btn">
                    <i class="fa fa-share-alt"></i>
                    <div class="soc_btn">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/sharer.php?u=123.abc.com&t=TEst"> <i class="fa fa-facebook"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-twitter"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-google-plus"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-linkedin"></i> </a>
                            </li>

                        </ul>
                    </div>
                </div> --}}


            </div>
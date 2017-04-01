  <?php
        $contact=App\Contact::find(1);
        $lang=Session::get('lang');
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
		<!-- Contact Section -->
		<section id="contact_sec" class="col-md-8">
			<!-- Contact form -->
			<div class="row">

			@include('partials._titlesectionbar',['title' => 'Send us email','link_text' => '','link'=>'#']) 

				<div class="col-md-12">
					<div class="cont_frm">
					@include('partials._message')
						<form name="sentMessage" id="contactForm"  action="{{ route('postContactUs') }}" method="POST">
						{{csrf_field()}}
							<div class="control-group form-group col-md-6 first">
								<div class="controls">
									<input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name." placeholder="Your Name">
									<div class="in_ico">
										<i class="fa fa-user"></i>
									</div>
									<p class="help-block"></p>
									@if($errors->has("name"))
                <span class="help-block" style="color: red;" >{{ $errors->first("name") }}</span>
                @endif
								</div>

								<div class="controls">
									<input type="text" class="form-control" id="companyname" name="companyname" required data-validation-required-message="Please enter your company name." placeholder="Company Name">
									<div class="in_ico">
										<i class="fa fa-building"></i>
									</div>
									<p class="help-block"></p>
									@if($errors->has("companyname"))
                <span class="help-block" style="color: red;" >{{ $errors->first("companyname") }}</span>
                @endif
								</div>

								<div class="controls">
									<input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter an email address." placeholder="Email Address">
									<div class="in_ico">
										<i class="fa fa-envelope-o"></i>
									</div>
									<p class="help-block"></p>
									@if($errors->has("email"))
                <span class="help-block" style="color: red;" >{{ $errors->first("email") }}</span>
                @endif
								</div>

								<div class="controls">
									<input type="number" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number." placeholder="Your Phone">
									<div class="in_ico">
										<i class="fa fa-phone"></i>
									</div>
									<p class="help-block"></p>
									@if($errors->has("phone"))
                <span class="help-block" style="color: red;" >{{ $errors->first("phone") }}</span>
                @endif
								</div>


								<div class="controls last">
									<select class="form-control" name="department"  required ">
										<option value="">Select A Department</option>
										<option value="jubinj1990@gmail.com">Maintenance</option>
										<option value="property">Property</option>
										<option value="procurement">Procurement</option>
										<option value="other">Other</option>
									</select>
										@if($errors->has("department"))
                <span class="help-block" style="color: red;" >{{ $errors->first("department") }}</span>
                @endif
								</div>

								<div class="clearfix"></div>
							</div>

							<div class="control-group form-group col-md-6">
								<div class="controls last">
									<input type="text" class="form-control" id="subject" name="subject" required data-validation-required-message="Please enter your website." placeholder="Subject">
									<div class="in_ico">
										<i class="fa fa-pencil"></i>
									</div>
									<p class="help-block"></p>
									@if($errors->has("subject"))
                <span class="help-block" style="color: red;" >{{ $errors->first("subject") }}</span>
                @endif
								</div>
								<div class="controls">
									<textarea rows="10" cols="100" class="form-control" id="contactmessage" name="contactmessage" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none;height:190px;" placeholder="Message"></textarea>
									<div class="in_ico">
										<i class="fa fa-paper-plane-o"></i>
									</div>
									@if($errors->has("contactmessage"))
                <span class="help-block" style="color: red;" >{{ $errors->first("contactmessage") }}</span>
                @endif
								</div>
								<button type="submit" class="btn btn-primary">Send Message</button>
							</div>
							<div class="clearfix"></div>
							<div id="success"></div>
							<!-- For success/fail messages -->
						</form>
					</div>
				</div>
			</div>
			<!-- /.row -->

			<div class="spacer-30"></div>
			<!-- Location Map -->
			<div class="row">

			@include('partials._titlesectionbar',['title' => 'Our Location','link_text' => '','link'=>'#']) 

				<div class="col-md-12">
					<div class="map_ara">
						{!!$contact->map!!}
					</div>

				</div>
			</div>
			<!-- /.row -->

		</section>

		<!-- Sidebar Section -->
		<section id="sidebar" class="col-md-4">
			<!-- Contact Information -->
			<div class="row">
				<div class="titl_sec">
					<div class="col-lg-12">

						<h3 class="main_titl text-left">
							@if($lang=='ar')
							المعلومات العقارية
							@else
							Alaqaria information
							@endif
						</h3>

					</div>
					<div class="clearfix"></div>
				</div>

				<div class="cont_info">
					<div class="info_sec first">
						<div class="icon_box">
							<i class="fa fa-map-marker"></i>
						</div>
						<p class="infos">
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
					</div>

					<div class="info_sec">
						<div class="icon_box">
							<i class="fa fa-envelope-o"></i>
						</div>
						<p class="infos"><a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
						</p>
					</div>

					<div class="info_sec">
						<div class="icon_box">
							<i class="fa fa-phone"></i>
						</div>
						<p class="infos"> <a href="tel:{{$contact->ph1}}"> {{$contact->ph1}}</a> </p>
					</div>

					 @if($contact->ph2)
					<div class="info_sec">
						<div class="icon_box">
							<i class="fa fa-phone"></i>
						</div>
						<p class="infos"> <a href="tel:{{$contact->ph2}}"> {{$contact->ph2}}</a> </p>
					</div>
					@endif

					 @if($contact->facebook)
					<div class="info_sec">
						<div class="icon_box">
							<i class="fa fa-facebook"></i>
						</div>
						<p class="infos">{{$contact->facebook}}</p>
					</div>
					@endif


				</div>
			</div>
			<!-- /.row -->
		</section>

		<div class="spacer-60"></div>

	</div>
</div>

@endsection

@section('scripts')

@endsection


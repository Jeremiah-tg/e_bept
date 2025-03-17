@extends('frontend.layouts.master')

@section('title','Likana Safaris || About Us')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="{{route('about-us')}}">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="about-content">
							@php
								$settings=DB::table('settings')->get();
							@endphp
							<h3>Welcome To <span>LIKANA Safaris Uganda</span></h3>
							<p>@foreach($settings as $data) {{$data->description}} @endforeach</p>
						<h1 style="text-decoration:none; color:#96CA3F;"> CORE <small>Values</small></h1>&nbsp;
						<style media="screen">
							h3:hover{
								color: #96CA3F;
							}
						</style>
						<h3>INTEGRITY</h3>
						<!-- <p>We continuously strive to uphold the highest ethical standards whilst delivering excellent service to our customers.</p> -->
						<h3>PROFESSIONALISM</h3>
						<!-- <p>We adhere to the rules and regulations of the tourism profession and perform our functions with a positive attitude, creatively applying our knowledge and skills to deliver high quality products and services.</p> -->

						<h3>CORPORATE GOVERNANCE</h3>
						<!-- <p>Our business practices, operational rules, processes and policies are formulated to engender public trust and confidence while exceeding the expectations of all stakeholders.</p> -->
						<h3>EXCELLENT SERVICE</h3>
						<!-- <p>We continuously deliver exceptional services which ensures remarkable customer satisfaction.</p> -->

						<h3>LOYALTY</h3>
						<!-- <p>We are committed to providing the best products and services to our customers that enhance their business objectives and also ensure a healthy environment that support our staff.</p> -->


							<div class="button">
								<a href="{{route('blog')}}" class="btn">Our Blog</a>
								<a href="{{route('contact')}}" class="btn primary">Contact Us</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-img overlay">
							<div class="button">
								<!-- https://youtu.be/NarVMPawcPY -->
								<!-- https://www.youtube.com/shorts/ZH8EXp2_Yao?feature=share -->
								<a href="https://www.youtube.com/watch?v=ZH8EXp2_Yao" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
							<img src="@foreach($settings as $data) {{$data->photo}} @endforeach" alt="@foreach($settings as $data) {{$data->photo}} @endforeach">
						</div>
						<!-- <div class="button">
							<a href="{{route('blog')}}" class="btn">Our Blog</a>
							<a href="{{route('contact')}}" class="btn primary">Contact Us</a>
						</div> -->
					</div>
				</div>
			</div>
	</section>
	<!-- End About Us -->


	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-3 col-md-6 col-12">
	                <!-- Start Single Service -->
	                <div class="single-service">
	                    <i class="ti-rocket"></i>
	                    <h4>Free shiping</h4>
	                    <p>Orders over UGX 400,000</p>
	                </div>
	                <!-- End Single Service -->
	            </div>
	            <div class="col-lg-3 col-md-6 col-12">
	                <!-- Start Single Service -->
	                <div class="single-service">
	                    <i class="ti-reload"></i>
	                    <h4>Free Return</h4>
	                    <p>Within 21 days returns</p>
	                </div>
	                <!-- End Single Service -->
	            </div>
	            <div class="col-lg-3 col-md-6 col-12">
	                <!-- Start Single Service -->
	                <div class="single-service">
	                    <i class="ti-lock"></i>
	                    <h4>Secure Payment</h4>
	                    <p>100% secure payment</p>
	                </div>
	                <!-- End Single Service -->
	            </div>
	            <div class="col-lg-3 col-md-6 col-12">
	                <!-- Start Single Service -->
	                <div class="single-service">
	                    <i class="ti-tag"></i>
	                    <h4>Best Price</h4>
	                    <p>Guaranteed price</p>
	                </div>
	                <!-- End Single Service -->
	            </div>
	        </div>
	    </div>
	</section>
	<!-- End Shop Services Area -->

	@include('frontend.layouts.newsletter')
@endsection

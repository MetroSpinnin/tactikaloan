@extends('layouts.inc')
@section('content')
<div class="main-container">
<section class="space-lg bg-gradient">
<div class="container">
<div class="row align-items-center">
<div class="col-12 col-md-6 mb-5 mb-md-0 position-relative">
<h1 class="display-4">Get a loan from Tactika in 10 Minutes</h1>
<p align="justify">
Whether you are a student or Market woman or Business person or Salary earner Get a loan from Tactika in 10 Minutes and also technical support during transactions almost immediately as required.
</p>
</div>
<!--end of col-->
<div class="col-12 col-md-6">
<div class="overflow-visible" data-flickity='{ "cellAlign": "center", "contain": true, "prevNextButtons": false, "pageDots":false, "wrapAround":true, "autoPlay":5000, "imagesLoaded":true, "initialIndex":3, "draggable":false }'>

<div class="carousel-cell col-11" style="background: rgb(241,254,245); border-radius:5px; padding:20px;">
<form method="POST" action="{{ route('register') }}">
@csrf
<div class="form-group">
<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="username" required autocomplete="name" autofocus>

@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group">
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email address" required autocomplete="email">

@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror

</div>

<div class="form-group">
<input id="phonenumber" type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phone" placeholder="phone number" required autocomplete="phonenumber">

@error('phoneNumber')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror

</div>

<div class="form-group">
<input id="date" type="text" class="form-control @error('date') is-invalid @enderror" name="date" placeholder="Date of birth" required autocomplete="date">

@error('date')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror

</div>

<div class="form-group">
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror

</div>
<div class="form-group">
<input id="password-confirm" type="password" class="form-control" placeholder="confirm password" name="password_confirmation" required autocomplete="new-password">
</div>
<input type="submit" class="btn btn-success" value="Register"/>
</form>
</div>
</div>
</div>
<!--end of col-->
</div>
<!--end of row-->
</div>
<!--end of container-->
</section>
<!--end of section-->
<section class="bg-white">
<div class="container">
<div class="row justify-content-around align-items-center">
<div class="col-12 col-md-6 col-lg-5 text-center text-md-left section-intro">
<span class="title-decorative">Loans Curated for all</span>
<h3 class="h1">Quick, Lowest Interests</h3>
<span class="lead">
Tactika employs industry-standard Low Interest Loan rates with an intuitive workflow designed to get you up and runnning faster.
</span>
<a href="loan.php">Apply for Loans &rsaquo;</a>
</div>
<!--end of col-->
<div class="col-8 col-md-6 col-lg-4">
<img alt="Image" src="{{asset('img/graphic-developer-group.svg')}}" class="img-fluid shadow" />
</div>
<!--end of col-->
</div>
<!--end of row-->
</div>
<!--end of container-->
</section>
<!--end of section-->
<section class="bg-gradient text-white space-lg">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-10">
<div class="media">
<img alt="Image" src="{{asset('img/avatar-male-3.jpg')}}" class="avatar avatar-lg" />
<div class="media-body">
<p class="h2">
“With Tactika, you get your desired Loan amount with lowest interest rates in less than 10 Minutes.”
</p>
<span>Samuel Metro</span>
</div>
</div>
</div>
<!--end of col-->
</div>
<!--end of row-->
</div>
<!--end of container-->
</section>
<!--end of section-->
<section>
<div class="container">
<div class="row justify-content-center text-center section-intro">
<div class="col-12 col-md-9 col-lg-8">
<span class="title-decorative" data-aos="fade-up" data-aos-delay="10">Missions &amp; Visions</span>
<h2 class="display-4" data-aos="fade-up" data-aos-delay="100">About us + much more</h2>
<span class="lead" data-aos="fade-up" data-aos-delay="200">Tactika is a financial solution provider for delivering tailor made offerings for our many customers using technology as an enabler and push them to helping achieve their goals be it personal family or business.</span>

</div>
<!--end of col-->
</div>
<!--end of row-->

<div class="row justify-content-around align-items-center">
<div class="col-12 col-md-6 col-lg-5 order-md-2">
<ul class="nav" id="myTab" role="tablist">
<li>
<a class="active card" id="tab-1" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
<div class="card-body">
<h5>Mission</h5>
<p align="justify">
To Create innovative ways to bridge the financial inclusion gap,liberate Nigerians and people in other parts of the world through the provision of sound creative financing solutions that will help them and build the economy.
</p>
</div>
</a>
</li>
<li>
<a class="card" id="tab-2" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
<div class="card-body">
<h5>Vision</h5>
<p align="justify">
Be the first one stop finance provision hub using innovation and technology  to constantly create unique finance solutions with delightful customer experience.
</p>
</div>
</a>
</li>
<li>
<a class="card" id="tab-3" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
<div class="card-body">
<h5>About Us</h5>
<p align="justify">
Tactika is a financial solution provider for delivering tailor made offerings for our many customers using technology as an enabler and push them to helping achieve their goals be it personal family or business.
</p>
</div>
</a>
</li>
</ul>
</div>
<!--end of col-->
<div class="col-12 col-md-6 order-md-1">
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="tab-1">
<img alt="Image" class="img-fluid shadow rounded-circle dotter" src="{{asset('img/be22.png')}}" />
</div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="tab-2">
<img alt="Image" class="img-fluid shadow rounded-circle dotter" src="{{asset('img/be11.png')}}" />
</div>
<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="tab-3">
<img alt="Image" class="img-fluid shadow rounded-circle dotter" src="{{asset('img/be1.jpg')}}" />
</div>
</div>
</div>
<!--end of col-->
</div>
<!--end of row-->
</div>
<!--end of container-->
</section>
<!--end of section-->
<section class="bg-gradient p-0 text-white">
<svg class="decorative-divider" preserveAspectRatio="none" viewbox=" 0 0 100 100">
<polygon fill="#F8F9FB" points="0 0 100 0 100 100"></polygon>
</svg>
<div class="container">
<div class="row justify-content-center section-intro">
<div class="col-auto">
<h2 class="h1" id="faq">Frequently Asked Questions</h2>
</div>
<!--end of col-->
</div>
<!--end of row-->
<ul class="row feature-list feature-list-sm justify-content-center">

<li class="col-12 col-md-6 col-lg-5">
<div class="card">
<div class="card-body">
<h6>How does payment work?</h6>
<p align="justify">
Register as a new user and then on your dashboard there are range of options to choose for applying for loan, the process is easy and fast which ranges from BVN verification to updating Bio and loan amount requests.
</p>
</div>
</div>
</li>

<li class="col-12 col-md-6 col-lg-5">
<div class="card">
<div class="card-body">
<h6>How do i invest in Tactika?</h6>
<p align="justify">
Go to the Loans page and register and then proceed to fill your bio, then enter the investment amount and Tactika team would contact you, our rates are fixed and practices transparent with no hidden charges.
</p>
</div>
</div>
</li>

<li class="col-12 col-md-6 col-lg-5">
<div class="card">
<div class="card-body">
<h6>What do you mean by ‘unlimited’?</h6>
<p align="justify">
When we say unlimited we mean to say that we offer loans to anyone irrespective of portfolio whether you are a student or in the working class or even running a personal Business, we give loans.
</p>
</div>
</div>
</li>

<li class="col-12 col-md-6 col-lg-5">
<div class="card">
<div class="card-body">
<h6>What do you mean by personal Loans?</h6>
<p align="justify">
Personal Loans can be accessed by anyone and everyone for meeting basic needs to high budget demands,Tactika personal loan is designed to help you achieve your goals with ease and in short time frames.
</p>
</div>
</div>
</li>

<li class="col-12 col-md-6 col-lg-5">
<div class="card">
<div class="card-body">
<h6>Is this a subscription?</h6>
<p align="justify">
Tactika does not run subscription packages, rather you request for loans and pay back as when due,we furthermore have terms and conditions together with the policies guiding our terms of service in real time.
</p>
</div>
</div>
</li>

<li class="col-12 col-md-6 col-lg-5">
<div class="card">
<div class="card-body">
<h6>Am i restricted to an Amount?</h6>
<p align="justify">
Yes, the maximum amount Tactika offers to loan requests are from one thousand to a range of five million naira (5,000,000) we do not offer above that, but if in any case an amount above that is required kindly contact the Team
</p>
</div>
</div>
</li>

</ul>
<!--end of row-->
<!--end of col-->
</div>
<!--end of row-->
</div>
<!--end of container-->
</section>
<!--end of section-->
@endsection
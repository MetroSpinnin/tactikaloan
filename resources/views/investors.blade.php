@extends('layouts.inc')
@section('content')
<div class="main-container">
      <nav aria-label="breadcrumb" role="navigation" class="bg-success text-white">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Investors Page</li>
              </ol>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </nav><section class="bg-white">
        <div class="container">
          <div class="row justify-content-around align-items-center">
            <div class="col-12 col-md-6 col-lg-5 text-center text-md-left section-intro">
              <span class="title-decorative">invest your money today and earn solid returns on investment</span>
              <h3 class="h1">Call for Investors</h3>
              <span class="lead"><p align="justify">
              If you have some extra money that you won't need for a while, give it to Tactika as an investment watch it yield more than what the money market will give to you. Our rates are fixed and our practices are transparent with no hidden charges or deductions on your money with us. You can also access your investment dashboard on this platform to monitor your account and how much you are earning almost on a daily basis.
              <Br><br>How it works: simply click on the investment tab, register, input your bio, enter the investment amount and leave the rest to us. Our team will get in touch with you in no time.
              </p>
              </span>
              <a href="#">Apply as an Investor &rsaquo;</a>
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
@endsection
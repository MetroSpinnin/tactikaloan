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
                <li class="breadcrumb-item active" aria-current="page">Loan Information Page</li>
              </ol>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </nav>
    
      <section>
        <div class="container">
          <div class="row justify-content-center text-center section-intro">
            <div class="col-12 col-md-9 col-lg-8">
              <span class="title-decorative" data-aos="fade-up" data-aos-delay="10">Loan Information Page</span>
              <h2 class="display-4" data-aos="fade-up" data-aos-delay="100">About us + much more</h2>
              <p align="justify">Bridging the financial inclusion gap is one of the millenium development goals of the united Nations, however using innovative technology to achieveing this goal is the heart and soul of tactika.<br><br> We are not only keen on bridgingthe gap, but also equip people through creative financing to impact their lives, businesses and the economy.<br><br> Our core as a financial solution provider is delivering tailor made offerings for our many customers using technology as an enabler and push to helping them achieve their goals be it personal or business.<br><br> The tactika team understand that customer is "king" and "key" to what we do,hence we continuously push to improve on your everyday experience with us, whenever.</span>

            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
          </div>
          </section>
          <section class="bg-gradient p-0 text-white">
        <svg class="decorative-divider" preserveAspectRatio="none" viewbox=" 0 0 100 100">
          <polygon fill="#F8F9FB" points="0 0 100 0 100 100"></polygon>
        </svg>
        <div class="container">
          <div class="row justify-content-center section-intro">
            <div class="col-auto">
              <h2 class="h1">Tactika Loans !!</h2>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
          <ul class="row feature-list feature-list-sm justify-content-center">

            <li class="col-12 col-md-6 col-lg-5">
              <div class="card">
                <div class="card-body">
                  <h6><B>Personal Loans</b></h6>
                  <p align="justify">
                  Get a personal loan today to meet your daily needs, we have clear processes which helps you estimate your loan amount, interest rate and possible repayment plan considering your chosen tenure. Personal loans can be accessed by anyone and everyone for meeting basic needs to high budget demands. Tactika personal loan is designed to help you achieve your goals with ease. We assure you of fast turnaround in processing your loan application as well as same-day access to money or credit. We are here to help you.<br><br>How it works: To access the personal loan – simply click on the apply for loan tab, register,input your bio, enter the loan amount and leave the rest to us. You will be credited in no time once your loan is approved.
                  </p>
                </div>
              </div>
            </li>
            <li class="col-12 col-md-6 col-lg-5">
              <div class="card">
                <div class="card-body">
                  <h6><b>Business Loans</b></h6>
                  <p align="justify">
                  Thinking of getting that business off the ground or you want more capital to expand your business, Tactika Business Loan is designed to take the stress off you. Our team is equipped with necessary technical know-how and expertise to help you ensure you achieve your business goals. We have clear processes which helps you know what you estimate your loan amount, interest rate and possible repayment plan considering your chosen tenure. Business loans can be accessed by anyone and everyone for meeting their business needs.
                  <br><br>How it works: To access the business loan – simply click on the apply for loan tab, register, input your bio, enter the loan amount and leave the rest to us. You will be credited in no time once your loan is approved.
                  </p>
                </div>
              </div>
            </li>
            </ul>
            </section>
            @endsection
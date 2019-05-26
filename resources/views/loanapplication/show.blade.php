@extends('layouts.inc')
@section('content')
<section class="space-sm">
<div class="container">
<div class="row justify-content-between">
<div class="col-12 col-md-12">

<a href="/loanapplication" class="btn btn-success"> Go Back </a><br><br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Loan Amount Requested</h5>
        <p class="card-text " align="justify"><span class="squared">You requested for <font color="red">₦{{$loanApp->loanAmount}}</font></span><br><br>The maximum amount Tactika offers to loan requests are from one thousand to a range of five million naira (5,000,000) we do not offer above that, but if in any case an amount above that is required kindly contact us.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Employment Status</h5>
        <p class="card-text " align="justify"><span class="squared">You specified that you are currently <font color="red">{{$loanApp->employmentstatus}}</font></span><br><br>The maximum amount Tactika offers to loan requests are from one thousand to a range of five million naira (5,000,000) we do not offer above that, but if in any case an amount above that is required kindly contact us.</p>       
        
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Business Name</h5>
        <p class="card-text " align="justify"><span class="squared">Your business name is <font color="red">{{$loanApp->BusinessName}}</font></span><br><br>The maximum amount Tactika offers to loan requests are from one thousand to a range of five million naira (5,000,000) we do not offer above that, but if in any case an amount above that is required kindly contact us.</p>         
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Business Address</h5>
        <p class="card-text " align="justify"><span class="squared">Your business Address is <font color="red">{{$loanApp->BusinessAddress}}</font></span><br><br>The maximum amount Tactika offers to loan requests are from one thousand to a range of five million naira (5,000,000) we do not offer above that, but if in any case an amount above that is required kindly contact us.</p> 
        
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text " align="justify"><span class="squared">Your Phone Number is <font color="red">0{{$loanApp->phoneNumber}}</font></span><br><br>The maximum amount Tactika offers to loan requests are from one thousand to a range of five million naira (5,000,000) we do not offer above that, but if in any case an amount above that is required kindly contact us.</p> 
        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Loan Code-ID</h5>
        <p class="card-text " align="justify"><span class="squared">This is your Number<font color="red"> {{$loanApp->id}}</font> loan</span><br><br>The maximum amount Tactika offers to loan requests are from one thousand to a range of five million naira (5,000,000) we do not offer above that, but if in any case an amount above that is required kindly contact us.</p>
        
      </div>
    </div>
  </div>
</div>
<!--end-->
</div>
</div>
</section>
@endsection
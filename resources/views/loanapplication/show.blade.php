@extends('layouts.inc')
@section('content')
<section class="space-sm">
<div class="container">
<div class="row justify-content-between">
<div class="col-12 col-md-12">

<a href="/loanapplication" class="btn btn-success"> Go Back </a><br><br>
<div class="row">
  <div class="col-sm-6">
    <div class="card"><span class="squared">
      <div class="card-body">
        <h5 class="card-title">Loan Amount Requested</h5>
        <p class="card-text " align="justify">{{$loanApp->user->name}} You requested for <font color="red">₦{{$loanApp->loanAmount}}</font><br><br>The maximum amount Tactika offers to loan requests are from one thousand to a range of five million naira (5,000,000) we do not offer above that, but if in any case an amount above that is required kindly contact us.</p>
        </div></span>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card"><span class="squared">
      <div class="card-body">
        <h5 class="card-title">Employment Status</h5>
        <p class="card-text " align="justify">You specified that you are currently <font color="red">{{$loanApp->employmentstatus}}</font><br><br>The maximum amount Tactika offers to loan requests are from one thousand to a range of five million naira (5,000,000) we do not offer above that, but if in any case an amount above that is required kindly contact us.</p>     
        </div></span>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card"><span class="squared">
      <div class="card-body">
        <h5 class="card-title">Business Name</h5>
        <p class="card-text " align="justify">Your business name is <font color="red">{{$loanApp->BusinessName}}</font><br><br>The maximum amount Tactika offers to loan requests are from one thousand to a range of five million naira (5,000,000) we do not offer above that, but if in any case an amount above that is required kindly contact us.</p>         
      </div>
    </div></span>
  </div>
  <div class="col-sm-6">
    <div class="card"><span class="squared">
      <div class="card-body">
        <h5 class="card-title">Business Address</h5>
        <p class="card-text " align="justify">Your business Address is <font color="red">{{$loanApp->BusinessAddress}}</font><br><br>The maximum amount Tactika offers to loan requests are from one thousand to a range of five million naira (5,000,000) we do not offer above that, but if in any case an amount above that is required kindly contact us.</p>         
      </div>
    </div></span>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card"><span class="squared">
      <div class="card-body">
        <h5 class="card-title">Phone Number</h5>
        <p class="card-text " align="justify">Your Phone Number is <font color="red">0{{$loanApp->phoneNumber}}</font><br><br>The maximum amount Tactika offers to loan requests are from one thousand to a range of five million naira (5,000,000) we do not offer above that, but if in any case an amount above that is required kindly contact us.</p> 
        
      </div>
    </div></span>
  </div>
  <div class="col-sm-6">
    <div class="card"><span class="squared">
      <div class="card-body">
        <h5 class="card-title">Loan Code-ID</h5>
        <p class="card-text " align="justify">This is your Number<font color="red"> {{$loanApp->id}}</font> loan<br><br>The maximum amount Tactika offers to loan requests are from one thousand to a range of five million naira (5,000,000) we do not offer above that, but if in any case an amount above that is required kindly contact us.</p>
        
      </div>
    </div></span>
  </div>
</div>
<!--end-->
<a href="/loanapplication/{{$loanApp->id}}/edit" class="btn btn-outline-success btn-sm">Edit</a>
<form method="POST" action="{{action('LoansApplicationController@destroy', $loanApp->id)}}">
@csrf
<div class="form-group">
<input type="hidden" name="_method" value="DELETE">
</div>
<input type="submit" class="btn btn-outline-danger pull-right" value="Delete"/>
</form>
</div>
</div>
</section>
@endsection
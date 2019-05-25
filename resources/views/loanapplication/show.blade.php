@extends('layouts.inc')
@section('content')
<section class="space-sm">
<div class="container">
<div class="row justify-content-between">
<div class="col-12 col-md-12">

<a href="/loanapplication" class="btn btn-success"> Go Back </a><br><br>
<div class="card">
<ul class="list-group list-group-flush list-group-comments">
<li class="list-group-item py-4">
<div class="media">
<img alt="Image" src="{{asset('img/avatar-bd.jpg')}}" class="avatar avatar-sm" />
<div class="media-body">
<div class="mb-2">
<span class="h6 mb-0">₦{{$loanApp->loanAmount}} Naira Loan requested</span>
<span class="text-muted">Number {{$loanApp->id}} Loan Applied for</span>
</div>
<p align="justify">

&rsaquo; Employment Status:  {{$loanApp->employmentstatus}}<br>
&rsaquo; Occupation:  {{$loanApp->occupation}}<br>
&rsaquo; Business Name:  {{$loanApp->BusinessName}}<br>
&rsaquo; Business Address:  {{$loanApp->BusinessAddress}}<br>
&rsaquo; Phone Number:  0{{$loanApp->phoneNumber}}<br>
&rsaquo; Amount Request:  {{$loanApp->loanAmount}}<br>

</p>
<small class="text-muted">Date of Request: {{$loanApp->created_at}}</small>
<div class="mr-2"><br>
<button class="btn btn-sm btn-outline-primary">Edit Loan</button>
<button class="btn btn-sm btn-outline-primary">&nbsp; Delete Loan</button>
</div>

<div class="d-flex align-items-center">
</div>
</div>
</div>
</div>

</li>
</ul>
</div>
</div>

</div>
</section>
@endsection
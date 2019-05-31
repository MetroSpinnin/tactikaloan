@extends('dashboard')
@section('content')
<div class="container">
<!-- your content here -->
<div class="row col-md-12">
<div class="card-deck">
<div class="card" style="background:rgb(241,254,245);">
<img src="../img/l1.jpg" class="card-img-top" alt="..." style="  box-shadow: 0 0 10px 9px #78b19663;">
<div class="card-body">
<p class="card-text" align="justify" style="font-weight: bold;">Total Loan: {{ $loanApplications->count() }}</p>
</div>
</div>
<div class="card" style="background:rgb(241,254,245);">
<img src="../img/l2.jpg" class="card-img-top" alt="..." style=" box-shadow: 0 0 10px 9px #78b19663;">
<div class="card-body">
<p class="card-text" align="justify" style="font-weight: bold;">PreApproved: 0</p>
</div>
</div>
<div class="card" style="background:rgb(241,254,245);">
<img src="../img/l3.jpg" class="card-img-top" alt="..." style="    box-shadow: 0 0 10px 9px #78b19663;">
<div class="card-body">
<p class="card-text" align="justify" style="font-weight: bold;">Cancelled: 0</p>
</div>
</div>
<div class="card" style="background:rgb(241,254,245);">
<img src="../img/l4.jpg" class="card-img-top" alt="..." style="    box-shadow: 0 0 10px 9px #78b19663;">
<div class="card-body">
<p class="card-text" align="justify" style="font-weight: bold;">Completed: 0</p>
</div>
</div>

</div>

</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-8 d-flex">
<br><br>
@if(count($loanApplications)>0)
@foreach($loanApplications as $loanApp)
<div class="card">
<ul class="list-group list-group-flush list-group-comments">
<li class="list-group-item py-4">
<div class="media">
<img alt="Image" src="{{asset('img/avatar-bd.jpg')}}" class="mr-2 avatar avatar-sm rounded-circle" width="60px" height="60px" /><br>
<div class="media-body">
<div class="mb-2">
<span class="h6 mb-0"><font color="red">₦{{$loanApp->loanAmount}}</font> Loan Requested</span><br>
<span class="text-muted">Loan Applied for on {{$loanApp->created_at}}</span>
</div>
<p align="justify">
{{$loanApp->user->name}} Get a personal loan today to meet your daily needs, we have clear processes which helps you estimate your loan amount, interest rate and possible repayment plan.
</p>
</div>
</div>

</li>
@endforeach
</ul>

@else
<div class="card">
<ul class="list-group list-group-flush list-group-comments">
<li class="list-group-item py-4">
<div class="media-body">
<div class="mb-2">
<span class="h6 mb-0"><font color="red"><p class="lead">You have not Applied for Any Loans</p></font></span></div>
</div>
@endif</p>
</div>
</div>
</div>
</div>

<!-- Metro Second Row -->
<div class="container">
<div class="row col-md-12">
<div class="card-deck">
<div class="card" style="background:rgb(241,254,245);">
<img src="../img/loann.jpeg" class="card-img-top" alt="..." style="box-shadow: 0 0 10px 9px #78b19663;">
<div class="card-body">
<h5 class="card-title" style="font-weight: bold;"><a href="#">Account Activities</a></h5>
</div>
</div>
<div class="card" style="background:rgb(241,254,245);">
<img src="../img/loann2.jpeg" class="card-img-top" alt="..." style="box-shadow: 0 0 10px 9px #78b19663;">
<div class="card-body">
<h5 class="card-title" style="font-weight: bold;"><a href='/loanapplication'>Applied Loans</a></h5>
</div>
</div>
<div class="card" style="background:rgb(241,254,245);">
<img src="../img/loann3.jpeg" class="card-img-top" alt="..." style="box-shadow: 0 0 10px 9px #78b19663;">
<div class="card-body">
<h5 class="card-title" style="font-weight: bold;"><a href='/loanapplication'>Loan Requests</a></h5>
</div>
</div>
</div>
<br><br>
</div>
<!-- end of MetroSecond Row -->
</div>
</div>

@endsection
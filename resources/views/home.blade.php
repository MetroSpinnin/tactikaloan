@extends('dashboard')
@section('content')
<div class="container">
<!-- your content here -->
<div class="row col-md-12">
<div class="card-deck">
<div class="card" style="background:rgb(241,254,245);">
<img src="../img/l1.jpg" class="card-img-top" alt="..." style="  box-shadow: 0 0 10px 9px #78b19663;">
<div class="card-body">
<p class="card-text" align="justify" style="font-weight: bold;">Total Loan: 0</p>
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
<div class="col-lg-12 d-flex">
<div class="card justify-content-center p-lg-4 p-3" style="background: rgb(241,254,245);">
<div class="card-body py-3 flex-grow-0">
<p class="lead wfont" align="justify">@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif
<a href="/loanapplication/create" class="btn btn-outline-success btn-sm"> Make Loan Request </a><br><br><br>
@if(count($loanApplications)>0)
<table class="table table-striped">
	<tr>
		<th>Loan Request ID Status</th>
		<th>Edit Loan Request</th>
		<th>Delete Your Loan Request</th>
	</tr>
	@foreach($loanApplications as $loanApp)
	<tr>
		<td>Number <font color='red'> #tac{{$loanApp->id}}</font> Loan Request</td>
		<td><a href="/loanapplication/{{$loanApp->id}}/edit" class="btn btn-outline-success btn-sm"> Edit</a></td>
		<td>
		<!--<form method="POST" action="{{action('LoansApplicationController@destroy', $loanApp->id)}}">
		@csrf
		<div class="form-group">
		<input type="hidden" name="_method" value="DELETE">
		</div>
		<input type="submit" class="btn btn-outline-danger btn-sm" value="Delete"/>
		</form>-->
		</td>
	</tr>
	@endforeach
</table>
@else
	You have no Loans
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
<img src="../img/loann.jpeg" class="card-img-top" alt="..." style="    box-shadow: 0 0 10px 9px #78b19663;">
<div class="card-body">
<h5 class="card-title" style="font-weight: bold;"><a href="#">Account Activities</a></h5>
</div>
</div>
<div class="card" style="background:rgb(241,254,245);">
<img src="../img/loann2.jpeg" class="card-img-top" alt="..." style="    box-shadow: 0 0 10px 9px #78b19663;">
<div class="card-body">
<h5 class="card-title" style="font-weight: bold;"><a href='/loanapplication'>Applied Loans</a></h5>
</div>
</div>
<div class="card" style="background:rgb(241,254,245);">
<img src="../img/loann3.jpeg" class="card-img-top" alt="..." style="    box-shadow: 0 0 10px 9px #78b19663;">
<div class="card-body">
<h5 class="card-title" style="font-weight: bold;"><a href='/loanapplication'>Loan Requests</a></h5>
</div>
</div>

</div>

</div>
<!-- end of MetroSecond Row -->
</div>
</div>

@endsection
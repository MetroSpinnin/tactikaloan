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
<div class="col-lg-6 d-flex">
<div class="card justify-content-center p-lg-4 p-3" style="background: rgb(241,254,245);">
<div class="card-body py-3 flex-grow-0">
<p class="lead wfont" align="justify">@if(count($loanApplications)>0)
<table class="table table-striped">
	<tr>
		<th>Employment status</th>
		<th></th>
		<th></th>
	</tr>
	@foreach($loanApplications as $loanApp)
	<tr>
		<td>{{$loanApp->employmentstatus}}</td>
		<td><a href="/loanapplication/{{$loanApp->id}}/edit"> Edit</a></td>
		<td><form method="POST" action="{{action('LoansApplicationController@destroy', $loanApp->id)}}">
@csrf
<div class="form-group">
<input type="hidden" name="_method" value="DELETE">
</div>
<input type="submit" class="btn btn-outline-danger pull-right" value="Delete"/>
</form></td>
	</tr>
	@endforeach
</table>
@else
	You have no Loans
@endif</p>
<a
class="lead wfont" href="request-terms.php">See Request Terms</a>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="row">
<div class="col-6"> <a href="clothings.php" class="card hover-effect" style="background: rgb(241,254,245);">
<img class="card-img-top" src="../img/loann.jpeg" alt="Startup" />
<div class="card-body">
<div class="d-flex justify-content-between align-items-center">
<h6 class="mb-0 wfont"><b>Trends</b></h6>
</div>
</div>
</a>

</div>
<div class="col-6"> <a href="electronics.php" class="card hover-effect" style="background: rgb(241,254,245);">
<img class="card-img-top" src="../img/loann.jpeg" alt="Small Business" />
<div class="card-body">
<div class="d-flex justify-content-between align-items-center">
<h6 class="mb-0 wfont"><b>Analysis</b></h6>
</div>
</div>
</a>

</div>
<div class="col-6"> <a href="foodstuffs.php" class="card hover-effect" style="background: rgb(241,254,245);">
<img class="card-img-top" src="../img/loann2.jpeg" alt="Multinational" />
<div class="card-body">
<div class="d-flex justify-content-between align-items-center">
<h6 class="mb-0 wfont"><b>Reports</b></h6>
</div>
</div>
</a>

</div>
<div class="col-6"> <a href="automobiles.php" class="card hover-effect" style="background: rgb(241,254,245);">
<img class="card-img-top" src="../img/loann3.jpeg" alt="Non-profit" />
<div class="card-body">
<div class="d-flex justify-content-between align-items-center">
<h6 class="mb-0 wfont"><b>Support</b></h6>
</div>
</div>
</a>

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
<h5 class="card-title" style="font-weight: bold;">Account Activities</h5>
</div>
</div>
<div class="card" style="background:rgb(241,254,245);">
<img src="../img/loann2.jpeg" class="card-img-top" alt="..." style="    box-shadow: 0 0 10px 9px #78b19663;">
<div class="card-body">
<h5 class="card-title" style="font-weight: bold;">Applied Loans</h5>
</div>
</div>
<div class="card" style="background:rgb(241,254,245);">
<img src="../img/loann3.jpeg" class="card-img-top" alt="..." style="    box-shadow: 0 0 10px 9px #78b19663;">
<div class="card-body">
<h5 class="card-title" style="font-weight: bold;">Loan Requests</h5>
</div>
</div>

</div>

</div>
<!-- end of MetroSecodnd Row -->
</div>
</div>
@endsection
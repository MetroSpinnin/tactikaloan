@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>

<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif
<a href="/loanapplication/create" class="btn btn-outline-success"> Make Loan Request </a><br><br><br>
@if(count($loanApplications)>0)
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
@endif

</div>
</div>
</div>
</div>
</div>
@endsection

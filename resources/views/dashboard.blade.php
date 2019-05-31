<!doctype html>
<html lang="en">

<head>
<title>{{ Auth::user()->name }} Dashboard </title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<!-- Material Kit CSS -->
<link href="{{asset('csss/material-dashboard.css')}}" rel="stylesheet" />
<style type="text/css">
@font-face
{
font-family: all;
src:url('{{asset('fonts/Nunito-Regular.woff')}}')format('woff');
}
*
{
font-family:all;
}
</style>
</head>

<body>
<div class="wrapper ">
<div class="sidebar" data-color="green"  style="background:rgb(241,254,245);">
<!--
Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

Tip 2: you can also add an image using data-image tag
-->
<div class="logo">
<a href="{{url('/home')}}" class="simple-text logo-mini">
<img src="../img/logo.png" width="200px" class="rounded-circle">
</a>
<a href="#" class="simple-text logo-normal">
</a>
</div>
<div class="sidebar-wrapper">
<ul class="nav">
<li class="nav-item active  ">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif
<a class="nav-link" href="#0">
<i class="material-icons"></i>
<p> &rsaquo; {{ Auth::user()->name }} Dashboard</p>
</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="#0">
<i class="material-icons"></i>
<p> &rsaquo; {{ Auth::user()->name }} Profile</p>
</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="/loanapplication/create">
<i class="material-icons"></i>
<p> &rsaquo; Apply for Loan</p>
</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="#0">
<i class="material-icons"></i>
<p> &rsaquo; Employment Profile</p>
</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="#0">
<i class="material-icons"></i>
<p> &rsaquo; Standard Document</p>
</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="{{ route('logout') }}"
onclick="event.preventDefault();document.getElementById('logout-form').submit();">
&rsaquo; {{ Auth::user()->name }} {{ __('Logout') }}</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
</li>

<!-- your sidebar here -->
</ul>
</div>
</div>

<div class="main-panel">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
<div class="container-fluid">
<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
<span class="sr-only">Toggle navigation</span>
<span class="navbar-toggler-icon icon-bar"></span>
<span class="navbar-toggler-icon icon-bar"></span>
<span class="navbar-toggler-icon icon-bar"></span>
</button>
</div>
</nav><br><br>
<!-- End Navbar -->

@yield('content')

<footer class="footer">
<div class="container-fluid">
<nav class="float-left">
<ul>
<li>
<a href="#">
Tactika Loan
</a>
</li>
</ul>
</nav>
<div class="copyright float-right"><script src="js/bundle.js"></script></i>
<a href="#" target="_blank">Tactika</a> LLC.
</div>
</div>
</footer>
</div>
</div>
</body>

</html>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Tactika</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Tactika">
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500" rel="stylesheet">
<link href="{{asset('css/socicon.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/entypo.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
<style>@font-face{font-family:all; src:url('{{asset('fonts/Nunito-Regular.woff')}}')format('woff');} *{font-family: all;} .bg-darky{background: rgb(241,254,245) !important;}.dotter{border:2px dashed green; border-radius:100%;}.bg-gradient {background: linear-gradient(135deg, #283c86 0%, #45a247 100%) !important;}.navabar-toggler{color:green}</style>
</head>

<body style="background: rgb(241,254,245); !important;">
<div class="navbar-container">
<div class="bg-darky navbar-dark" data-sticky="top">
<div class="container">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand" href="index.php">
<img alt="Tactika" src="{{asset('img/logo.png')}}" width="120px" />
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon bg-success" style="border: 1px dashed green !important; padding:5px !important;"></span>
</button>
<div class="collapse navbar-collapse justify-content-between" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item">
<a href="/loan" class="nav-link"><font color="green">Loan</font></a>
</li>
<li class="nav-item">
<a href="/investors" class="nav-link"><font color="green">Investors</font></a>
</li>
<li class="nav-item dropdown">
<a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"><font color="green">Contact Us</font></a>
</li>
<li class="nav-item dropdown">
<a class="nav-link" href="#faq" id="componentsDropdown" role="button" data-toggle="dropdown"><font color="green">FAQs</font></a>
</li>
</ul>

<ul class="navbar-nav">
<li class="nav-item d-flex align-items-center">
<a href="/login" class="btn btn-success"><b>Login Now</b></a>
</li>
</ul>

</div>
<!--end nav collapse-->
</nav>
</div>
<!--end of container-->
</div>
</div>
<div class="main-container">
<section class="space-lg bg-gradient" style="align-content: center !important;">
<div class="container align-items-center">
<div class="row align-items-center">
<!--end of col-->
<div class="col-md-10">
<div class="overflow-visible" data-flickity='{ "cellAlign": "center", "contain": true, "prevNextButtons": false, "pageDots":false, "wrapAround":true, "autoPlay":5000, "imagesLoaded":true, "initialIndex":3, "draggable":false }'>

<div class="carousel-cell col-md-10 align-items-center" style="background:rgb(241,254,245); border-radius:5px; padding:20px;align-content: center;">
<form method="POST" action="{{ route('login') }}">
@csrf

<div class="form-group row">
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email address" required autocomplete="email" autofocus>

@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="form-group row">
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="current-password">

@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="form-group row">
<div class="col-md-12">
<div class="form-check">
<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

<label class="form-check-label" for="remember">
{{ __('Remember Me') }}
</label>
</div>
</div>
</div>

<div class="form-group row mb-0">
<div class="col-md-12">
<button type="submit" class="btn btn-success">
{{ __('Login') }}
</button>
@if (Route::has('password.request'))
<a class="btn btn-link" href="{{ route('password.request') }}">
<font color="green">{{ __('Forgot Your Password?') }}</font>
</a>
@endif
</div>
</div>
</form>
</div>
</div><br><br><br><br><br><br><br><br>
</div>
<!--end of col-->
</div>
<!--end of row-->
</div>
<!--end of container-->
</section>
<!-- Required vendor scripts (Do not remove) -->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

<!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js' if site does not use that feature) -->

<!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
<script type="text/javascript" src="{{asset('js/aos.js')}}"></script>
<!-- Flatpickr (calendar/date/time picker UI) -->
<script type="text/javascript" src="{{asset('js/flatpickr.min.js')}}"></script>
<!-- Flickity (handles touch enabled carousels and sliders) -->
<script type="text/javascript" src="{{asset('js/flickity.pkgd.min.js')}}"></script>
<!-- jarallax (parallax effect and video backgrounds) -->
<script type="text/javascript" src="{{asset('js/jarallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jarallax-video.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jarallax-element.min.js')}}"></script>
<!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
<script type="text/javascript" src="{{asset('js/scrollMonitor.js')}}"></script>
<!-- jQuery smartWizard facilitates steppable wizard content -->
<script type="text/javascript" src="{{asset('js/jquery.smartWizard.js')}}"></script>
<!-- Smooth scroll (animation to links in-page)-->
<script type="text/javascript" src="{{asset('js/smooth-scroll.polyfills.min.js')}}"></script>
<!-- Prism (displays formatted code boxes) -->
<script type="text/javascript" src="{{asset('js/prism.js')}}"></script>
<script type="text/javascript" src="{{asset('js/zoom-vanilla.min.js')}}"></script>

<!-- Required theme scripts (Do not remove) -->
<script type="text/javascript" src="{{asset('js/theme.js')}}"></script>
</body>
</html>

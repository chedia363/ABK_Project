<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <title>ABAK</title>
    <meta name="description" content="AAyQURAN">
    <meta name="tags" content="">
    <meta name="author" content="Jeff Simons Decena">
    @if(App::isLocale('en'))
	<link rel="stylesheet" href="{{ asset('img/favicon.png') }}">
  	<link rel="stylesheet" href="{{ asset('img/apple-touch-icon.png') }}">
	<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/icofont/icofont.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/remixicon/remixicon.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/venobox/venobox.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/aos/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    @else
	<link rel="stylesheet" href="{{ asset('img/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('fonts/ArbFONTS-GE_Dinar_Two_Light-1.otf') }}">
  <link rel="stylesheet" href="{{ asset('fonts/ArbFONTS-Almarai-Regular.ttf') }}">
  <link rel="stylesheet" href="{{ asset('fonts/ArbFONTS-GE-Dinar-One-Medium.otf') }}">
  <link rel="stylesheet" href="{{ asset('fonts/ArbFONTS-GE-Dinar-Two-Medium-2.otf') }}">
  <link rel="stylesheet" href="{{ asset('fonts/Geeza Pro Bold.ttf') }}">
  	<link rel="stylesheet" href="{{ asset('img/apple-touch-icon.png') }}">
	<link rel="stylesheet" href="{{ asset('vendor/icofont/icofont.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/remixicon/remixicon.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/venobox/venobox.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style-rtl.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/aos/aos.css') }}">
	<link href="{{ asset('fonts/ArbFONTS-GE-Dinar-One-Medium.otf') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/font-awesome-rtl.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap-rtl.css') }}">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    @endif
	<link href="{{ asset('fonts/ArbFONTS-GE-Dinar-One-Medium.otf') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="{{ asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicons/fav.png')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    @yield('css')
    <meta property="og:url" content="{{ request()->url() }}"/>
    @yield('og')
</head>
<body>
<noscript>
    <p class="alert alert-danger">
        You need to turn on your javascript. Some functionality will not work if this is disabled.
        <a href="https://www.enable-javascript.com/" target="_blank">Read more</a>
    </p>
</noscript>
<section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-12 col-md-12 d-flex align-items-center">
        <div class="col-xl-4 col-md-3">
        <h1 class="logo mr-auto">
			  <a href="{{ route('Abakhome') }}">
			  <img src="{{ asset('img/logo.svg') }}" alt="">
			</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->
        </div>
        <div class="col-xl-4 col-md-5">
        <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="drop-down"><a href="{{ route('members') }}">@lang('front.About us')</a>
                <ul>
                  <li><a href="{{ route('members') }}">@lang('front.in lines')</a></li>
                  <li><a href="{{ route('members') }}">@lang('front.The General Assembly')</a></li>
                  <li><a href="{{ route('members') }}">@lang('front.Structure of the Board of Directors')</a></li>
                </ul>
              </li>
			  <li class="drop-down"><a href="{{ route('policies') }}">@lang('front.Governance')</a>
                <ul>
                  <li><a href="{{ route('policies') }}">@lang('front.Bylaw of the Board of Directors')</a></li>
                  <li><a href="{{ route('policies') }}">@lang('front.Bylaw for appointing the CEO')</a></li>
                  <li><a href="{{ route('policies') }}">@lang('front.Bylaw of administrative and financial affairs')</a></li>
                </ul>
              </li>
			  <li class="drop-down"><a href="{{ route('initiative') }}">@lang('front.Our initiative')</a>
                <ul>
                  <li><a href="{{ route('initiative') }}">@lang('front.Our activities')</a></li>
                  <li><a href="{{ route('initiative') }}">@lang('front.Our fields')</a></li>
                  <li><a href="{{ route('initiative') }}">@lang('front.Our programs')</a></li>
                </ul>
              </li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
        <div class="col-xl-4 col-md-4">
          <div class="searchmobile" style="display:flex;">
            <div>
              <img src="{{ asset('img/vision.svg') }}" alt="">
            </div>
            <div class="search-box">
              <button class="search-btn"><span class="lnr lnr-magnifier"></span></button>
              <input class="search-input" type="text" placeholder="@lang('front.Search')">
            </div>
          </div>
        </div>
        </div>
      </div>

    </div>
  </header><!-- End Header -->
</section>

<div class="container-fluid" style="padding:0;">
	@yield('content')
  @include('layouts.front.footer',['contactus' => $contactus])
	</div>
</div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('vendor/aos/aos.js') }}"></script>
<script src="{{ asset('js/gmap3.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/particles.js') }}"></script>
@yield('js')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booking Kamar Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="{{ asset('assets/cashier/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cashier/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cashier/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cashier/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cashier/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cashier/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cashier/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cashier/css/bootstrap-datepicker.css') }}">
  </head>
  <body>
		
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="{{ route('home') }}">Logo<span>Company</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav">
	            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Beranda</a></li>
	            <li class="nav-item"><a href="{{ route('history-transaction') }}" class="nav-link">Riwayat Transaksi</a></li>
	        </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item text-capitalize"><div class="nav-link">arifin habibi | <a href="{{ route('logout-processing') }}">Logout</a></div></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    {{-- main component --}}
    @yield('main')

  <!-- loader -->
  {{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> --}}

  

  <script src="{{ asset('assets/cashier/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/cashier/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('assets/cashier/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/cashier/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/cashier/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/cashier/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets/cashier/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('assets/cashier/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('assets/cashier/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/cashier/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/cashier/js/scrollax.min.js') }}"></script>
  <script src="{{ asset('assets/cashier/js/google-map.js') }}"></script>
  <script src="{{ asset('assets/cashier/js/main.js') }}"></script>
  </body>
</html>
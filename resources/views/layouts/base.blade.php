<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <title>Academics &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}">
  <link href="{{ asset('assets/css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/skil.css')}}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">
    <div class="header">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


      @include('includes._header')
    </div>

    <div class="main-content">
      @yield('content')
    </div>
    <footer>
      @include('includes._footer')
    </footer>
  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#51be78" />
    </svg></div>

  <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery-ui.js')}}"></script>
  <script src="{{ asset('assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.countdown.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('assets/js/aos.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>




  <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>
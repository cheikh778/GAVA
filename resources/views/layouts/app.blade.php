<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GAVA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('storage/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('storage/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('storage/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('storage/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('storage/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('storage/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/service.css') }}">
    
    
    <style>

  </style>
  </head>
  <body>



    @include('partials.menu')

    <!-- Contenu de la page -->
    {{-- <div class="container"> --}}
        @yield('content')
    {{-- </div> --}}


    <!-- Inclure le footer -->
    @include('partials.footer')



  <script src="{{ asset('storage/js/jquery.min.js') }}"></script>
  <script src="{{ asset('storage/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('storage/js/popper.min.js') }}"></script>
  <script src="{{ asset('storage/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('storage/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('storage/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('storage/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('storage/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('storage/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('storage/js/aos.js') }}"></script>
  <script src="{{ asset('storage/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('storage/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('storage/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('storage/js/scrollax.min.js') }}"></script>
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
  {{-- <script src="{{ asset('storage/js/google-map.js') }}"></script> --}}
  <script src="{{ asset('storage/js/main.js') }}"></script>
  <script type="text/javascript" src="{{ asset('storage/js/jquery-1.10.2.js') }}"></script>
  <script type="text/javascript" src="{{ asset('storage/js/jquery.mixitup.min.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('storage/js/jquery-1.10.2.min.js') }}"> </script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


  </body>
</html>


<!doctype html>
<html lang="en">
  <head>
      <title>Home | Sambanggo</title>
      <!-- /SEO Ultimate -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <meta charset="utf-8">
      <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicon/apple-icon-57x57.png') }}">
      <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicon/apple-icon-60x60.png') }}">
      <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon/apple-icon-72x72.png') }}">
      <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/apple-icon-76x76.png') }}">
      <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon/apple-icon-114x114.png') }}">
      <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/apple-icon-120x120.png') }}">
      <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicon/apple-icon-144x144.png') }}">
      <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/apple-icon-152x152.png') }}">
      <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-icon-180x180.png') }}">
      <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/logo_title.png') }}">
      <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo_title.png') }}">
      <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/logo_title.png') }}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo_title.png') }}">
      <link rel="manifest" href="{{ asset('images/favicon/manifest.json') }}">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <!-- Latest compiled and minified CSS -->
      <link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}">
      <!-- Font Awesome link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <!-- StyleSheet link CSS -->
      <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/mediaqueries.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
  <body>
    
      {{-- @include('partials.navbar') --}}

      {{-- <div class="container mt-4"> --}}
        @yield('container')
      {{-- </div> --}}
    
     <!-- Latest compiled JavaScript -->
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset('js/owl.carousel.js') }}"></script>
        <script src="{{ asset('js/carousel.js') }}"></script>
        <script src="{{ asset('js/counter.js') }}"></script>
        <script src="{{ asset('js/animation.js') }}"></script>

  </body>
</html>


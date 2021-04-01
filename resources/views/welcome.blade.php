<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ config('app.name') }}</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('vendor') }}/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('vendor') }}/fontawesome-free/css/font-awesome.min.css">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css') }}/cover.css" rel="stylesheet">

  <style media="screen">
  .bg-img {
    background-image: url("{{ asset ('theme2/img/bg1.jpg') }}");
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: -1;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
  }
  </style>

</head>

<body class="text-center bg-img">

  <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner">
        <h3 class="masthead-brand"></h3>
        <nav class="nav nav-masthead justify-content-center">
          @auth
          <a class="nav-link active" href="{{ url('/home') }}">Utama</a>
          @else
          <a class="nav-link" href="{{ route('login') }}">Login</a>
          @if (Route::has('register'))
          <a class="nav-link" href="{{ route('register') }}">Register</a>
          @endif
          @endauth
        </nav>
      </div>
    </header>

    <main role="main" class="inner cover">
      <h1 class="cover-heading">{{ config('app.name') }}</h1>
      <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
    </main>

    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>
          @php
          $copyYear = 2021;
          $curYear = date('Y');
          @endphp
          &copy; {{ $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '') }} {{ config('app.name') }}
        </p>
      </div>
    </footer>
  </div>


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('vendor') }}/jquery/jquery.min.js"></script>
  <script src="{{ asset('vendor') }}/bootstrap/js/bootstrap.js"></script>
</body>
</html>

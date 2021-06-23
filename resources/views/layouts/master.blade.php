<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <title>{{ config('app.name') }}</title>
  <link href="{{ asset('/') }}vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('/') }}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('/') }}css/ruang-admin.min.css" rel="stylesheet">
  <link href="{{ asset('/') }}vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- fullcalendar 3102 -->
  <link href="{{ asset('/') }}vendor/fullcalendar3102/fullcalendar.min.css" rel="stylesheet" />
  <link href="{{ asset('/') }}vendor/fullcalendar3102/fullcalendar.print.min.css" rel="stylesheet" media="print" />
  <link href="{{ asset('/') }}vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" >
  @yield('css')
</head>

<style media="screen">
  body {
    font-size: 14px !important;
  }

  .fc-title, .fc-time {
    color: #fff;
  }

  .card .table td, .card .table th {
    padding-left: 0.5rem !important;
  }

  .borderless td, .borderless th {
    border: none !important;
  }
</style>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('components.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('components.topbar')
        <!-- Topbar -->

        <!-- Container Fluid-->
        @yield('content')
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      @include('components.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Modal Logout -->
  @include('components.logout')
  <!-- Modal Logout -->

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset('/') }}vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('/') }}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('/') }}vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="{{ asset('/') }}js/ruang-admin.min.js"></script>
  <script src="{{ asset('/') }}vendor/datatables/jquery.dataTables.js"></script>
  <script src="{{ asset('/') }}vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- fullcalendar 3102 -->
  <script src="{{ asset('/') }}vendor/fullcalendar3102/lib/moment.min.js"></script>
  <script src="{{ asset('/') }}vendor/fullcalendar3102/fullcalendar.min.js"></script>
  <script src="{{ asset('/') }}vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  @yield('script')

</body>

</html>

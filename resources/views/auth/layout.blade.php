<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('web/css/fontawesome.all.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('web/css/adminlte.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    </head>
    <body class="hold-transition login-page">

        @yield('main')

    <!-- jQuery -->
    <script src="{{ asset('web/js/jquery.js') }}"></script>
    <!-- Bootstrap 4 -->
    {{-- <script src="{{ asset('web/js/bootstrap.bundle.js') }}"></script> --}}
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('web/js/adminlte.js') }}"></script>
    </body>
</html>
        
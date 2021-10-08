<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('home/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">
    </head>

    <body>
        
        @yield('main')
        
        <script src="{{ asset('home/js/jquery.min.js') }}"></script>
        <script src="{{ asset('home/js/popper.min.js') }}"></script>
        <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('home/js/all.min.js') }}"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="{{ asset('home/js/slick.min.js') }}"></script>
        <script src="{{ asset('home/js/main.js') }}"></script>
    </body>
</html>
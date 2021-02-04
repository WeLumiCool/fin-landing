<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Rubik:wght@400;500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
@include('layouts.header')
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
    <script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();
            if (scrollTop >= 50) {
                $('.menuse').removeClass('shadow-none');
                $('.menuse').addClass('solid-nav');
                $('.menuse').addClass('py-0');
                $('.menuse').removeClass('pt-3');
            }
            else
            {
                $('.menuse').addClass('shadow-none');
                $('.menuse').removeClass('solid-nav');
                $('.menuse').removeClass('py-0');
                $('.menuse').addClass('pt-3');
            }
        });
    });

    $(document).on('click', '.navbar-toggler', function (e) {

        var original = window.location.origin + '/';
        var btn = $(e.currentTarget);
        var scrollTop = $(window).scrollTop();
        if (scrollTop < 50 && btn.hasClass('collapsed') == false) {
            $('.menuse').removeClass('shadow-none');
            $('.menuse').addClass('solid-nav');
            $('.menuse').removeClass('pt-3');

        } else if (scrollTop < 50 && btn.hasClass('collapsed') == true) {
            $('.menuse').removeClass('solid-nav');
            $('.menuse').addClass('shadow-none');
            $('.menuse').addClass('pt-3');
        }
    });
</script>
</html>

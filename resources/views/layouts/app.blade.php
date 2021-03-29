<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M9C8K9N');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('main.title') }}</title>

    <!-- Scripts -->

    <link rel="icon" type="image/png" href="{{ asset('image/icons/fav.webp') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Rubik:wght@400;500&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>
    <script type="text/javascript">!function () {
            var t = document.createElement("script");
            t.type = "text/javascript", t.async = !0, t.src = "https://vk.com/js/api/openapi.js?168", t.onload = function () {
                VK.Retargeting.Init("VK-RTRG-866554-gJ1UZ"), VK.Retargeting.Hit()
            }, document.head.appendChild(t)
        }();</script>
    <noscript><img src="https://vk.com/rtrg?p=VK-RTRG-866554-gJ1UZ" style="position:fixed; left:-999px;" alt=""/>
    </noscript>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9C8K9N"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
@include('layouts.header')
<div id="app">
    <main>
        @yield('content')
    </main>
</div>
@include('layouts.footer')
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"
        integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg=="
        crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop >= 50) {
                $('.menuse').removeClass('shadow-none');
                $('.menuse').addClass('solid-nav');
                $('.menuse').addClass('py-0');
                $('.menuse').removeClass('pt-3');
            }
            else {
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
<script type="text/javascript">!function () {
        var t = document.createElement("script");
        t.type = "text/javascript", t.async = !0, t.src = "https://vk.com/js/api/openapi.js?168",
            t.onload = function () {
                VK.Retargeting.Init("VK-RTRG-866554-gJ1UZ"), VK.Retargeting.Hit()
            },
            document.head.appendChild(t)
    }();</script>
<noscript><img src="https://vk.com/rtrg?p=VK-RTRG-866554-gJ1UZ" style="position:fixed; left:-999px;" alt=""/></noscript>
<script type="text/javascript">
    $(document).ready(function () {
        $("#pick").on("click", "a", function (event) {
            event.preventDefault();
            var id = $(this).attr('href'),
                top = $(id).offset().top - 100;
            $('body,html').animate({scrollTop: top}, 700);
        });
    });
</script>
</html>

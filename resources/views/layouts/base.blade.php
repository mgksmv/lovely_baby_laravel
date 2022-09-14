<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Lovely Baby')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>

    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    <div class="js">
        <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script>
            tns({
                container: '.main-screen__products',
                mode: 'gallery',
                autoplay: true,
                items: 1,
                rewind: true,
                autoplayTimeout: 10000,
                arrowKeys: false,
                speed: 1000,
                autoplayButtonOutput: false,
                mouseDrag: true,
                controlsPosition: 'bottom',
                controls: false,
                nav: true,
                navPosition: 'right',

            });

            tns({
                container: '.main-collection__slider-block',
                mode: 'gallery',
                autoplay: true,
                items: 1,
                rewind: true,
                autoplayTimeout: 10000,
                arrowKeys: false,
                speed: 1000,
                autoplayButtonOutput: false,
                mouseDrag: true,
                controlsPosition: 'bottom',
                controls: true,
                controlsContainer: '.main-collection__header-nav',
                nav: false,
                navPosition: 'right',
            });
        </script>
    </div>

</body>

</html>

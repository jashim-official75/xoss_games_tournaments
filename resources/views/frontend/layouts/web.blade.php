<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
     <meta name="twitter:title" content="Xoss Games | Enjoy a Wide Range of Online Games on Xoss Games">
    <meta name="twitter:description" content="Xoss Games | Enjoy a Wide Range of Online Games on Xoss Games">
    <meta name="twitter:url" content="https://xoss.games/xoss_games-og-image.jpg">
    <meta name="twitter:card" content="Xoss Games | Enjoy a Wide Range of Online Games on Xoss Games">
    <!-----head ------->
    @yield('frontend_header')

    <link rel="shortcut icon" href="{{ asset('assets/frontend/img/favicon.png') }}" type="image/x-icon">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/Bootstrap/css/bootstrap.min.css') }}" />
    <!-- Slick Slider-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/slick-slider/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/frontend/plugins/slick-slider/css/slick-theme.css') }}" />
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
    <!-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />-->
    <!-- FANCYBOX CSS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    @yield('pageCSS')
    @livewireStyles
    <!-- Default Styles -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}" />

    <meta name="p:domain_verify" content="abfbfd5fa799b08e3e52d00b02313651" />

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('icon.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>

<body>

    <!-- Google Tag Manager (noscript) body -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSDLM28" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) →--->

    @include('frontend.inc.header')

    @yield('content')

    @include('frontend.inc.footer')
    <!-- Bootstrap 4 Scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <!-- Slick Slider -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <!-- Slick JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- Js -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Fancybox Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script> -->
    <script src="{{ asset('assets/frontend/js/app.js') }}"></script>
    <!------pwa ---->
    <script src="{{ asset('/sw.js') }}"></script>
    
    @if (session('success'))
        <script>
            Swal.fire(
                'success!',
                '{{ session('success') }}',
                'success'
            )
        </script>
        {{ Session::forget('success') }}
    @endif
    @if (session('error'))
        <script>
            Swal.fire(
                'Error!',
                '{{ session('error') }}',
                'error'
            )
        </script>
        {{ Session::forget('error') }}
    @endif

    @yield('pageJS')
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrfToken" content="{{ csrf_token() }}" >


    <title>{{config('app.name', 'Social Network')}}</title>

    <script src="{{asset('js/webfontloader.min.js')}}"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>

    <link rel="stylesheet" href="{{asset('Bootstrap/dist/css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="{{asset('Bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('Bootstrap/dist/css/bootstrap-grid.css')}}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
     <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <!-- JS Scripts -->
    <script src="{{asset('js/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('js/jquery.appear.js')}}"></script>
    <script src="{{asset('js/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('js/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('js/jquery.matchHeight.js')}}"></script>
    <script src="{{asset('js/svgxuse.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.js')}}"></script>
    <script src="{{asset('js/Headroom.js')}}"></script>
    <script src="{{asset('js/velocity.js')}}"></script>
    <script src="{{asset('js/ScrollMagic.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.js')}}"></script>
    <script src="{{asset('js/jquery.countTo.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/material.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.js')}}"></script>
    <script src="{{asset('js/smooth-scroll.js')}}"></script>
    <script src="{{asset('js/selectize.js')}}"></script>
    <script src="{{asset('js/swiper.jquery.js')}}"></script>
    <script src="{{asset('js/moment.js')}}"></script>
    <script src="{{asset('js/daterangepicker.js')}}"></script>
    <script src="{{asset('js/simplecalendar.js')}}"></script>
    <script src="{{asset('js/fullcalendar.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.js')}}"></script>
    <script src="{{asset('js/ajax-pagination.js')}}"></script>
    <script src="{{asset('js/Chart.js')}}"></script>
    <script src="{{asset('js/chartjs-plugin-deferred.js')}}"></script>
    <script src="{{asset('js/circle-progress.js')}}"></script>
    <script src="{{asset('js/loader.js')}}"></script>
    <script src="{{asset('js/run-chart.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('js/jquery.gifplayer.js')}}"></script>
    <script src="{{asset('js/mediaelement-and-player.js')}}"></script>
    <script src="{{asset('js/mediaelement-playlist-plugin.min.js')}}"></script>
    <script src="{{asset('js/uploadPreview.js')}}"></script>
    <script src="{{asset('js/like.js')}}"></script>

    <script src="{{asset('js/base-init.js')}}"></script>
    <script defer src="{{asset('fonts/fontawesome-all.js')}}"></script>

    <script src="{{asset('Bootstrap/dist/js/bootstrap.bundle.js')}}"></script>
</body>
</html>
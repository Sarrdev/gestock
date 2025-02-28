
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webstrot Admin : Creative Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ url ('assets/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ url ('assets/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{ url('assets/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{ url ('assets/css/lib/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{ url('assets/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{url ('assets/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url ('assets/css/lib/unix.css')}}" rel="stylesheet">
    <link href="{{url ('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    @include('pages.layouts._sidebar')
    @include('pages.layouts._navbar')
    <div class="content-wrap">
        <div class="main">
            @yield('content')
        </div>
    </div>


    <script src="{{url('assets/js/lib/jquery.min.js')}}"></script>
    <!-- jquery vendor -->
    <script src="{{url('assets/js/lib/jquery.nanoscroller.min.js')}}"></script>
    <!-- nano scroller -->
    <script src="{{url('assets/js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{url('assets/js/lib/preloader/pace.min.js')}}"></script>
    <!-- sidebar -->
    <script src="{{url('assets/js/lib/bootstrap.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{url('assets/js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{url('assets/js/lib/weather/weather-init.js')}}"></script>
    <script src="{{url('assets/js/lib/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{url('assets/js/lib/circle-progress/circle-progress-init.js')}}"></script>
    <script src="{{url('assets/js/lib/chartist/chartist.min.js')}}"></script>
    <script src="{{url('assets/js/lib/chartist/chartist-init.js')}}"></script>
    <script src="{{url('assets/js/lib/sparklinechart/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('assets/js/lib/sparklinechart/sparkline.init.js')}}"></script>
    <script src="{{url('assets/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
    <script src="{{url('assets/js/scripts.js')}}"></script>
</body>
</html>
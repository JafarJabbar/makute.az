<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$configs['title']}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{{$configs['keywords']}}">


    <meta charset="UTF-8">
    <meta name="description" content="{{$configs['description']}}">
    <meta name="author" content="{{$configs['author']}}">

    <link rel="icon" href="{{asset($configs['favicon'])}}" type="image/x-icon" />
    <!-- Icon css link -->
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">


    <!-- Vendors-->
    <link href="{{asset('vendor/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    @yield('extraCSS')


</head>
<body>
@include('widgets.header')

@yield('content')

<!--================Footer Area =================-->
@include('widgets.footer')
<!--================End Footer Area =================-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery-2.2.4.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
<script src="{{ asset('vendor/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('vendor/counterup/waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/flex-slider/jquery.flexslider-min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
<script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
@yield('extraJS')
</body>
</html>

@extends('layouts.layout')

@section('content')
    @include('widgets.jumbotron',['bgImage'=>asset('img/banner/store.jpg'),'name'=>'Mağazalarımız',"url"=>route('store.index')])
    <ul class="cd-gallery">
        @foreach($stores as $store)
            <li style="height: 650px; ">
                <a href="#">
                    <ul class="cd-item-wrapper">
                        <li class="selected">
                            <img STYLE="width: 100% !important; object-fit: cover; height: 300px !important;"  src="{{asset($store['image_1'])}}" alt="Preview image">
                        </li>
                        <li   class="move-right" >
                            <img STYLE="width: 100% !important; object-fit: cover; height: 300px !important;"   src="{{asset($store['image_2'])}}" alt="Preview image">
                        </li>
                        <li >
                            <img STYLE="width: 100% !important; object-fit: cover; height: 300px !important;"  src="{{asset($store['image_3'])}}" alt="Preview image">
                        </li>
                    </ul> <!-- cd-item-wrapper -->
                </a>

                <div class="cd-item-info" style="text-align: left">
                     <i class="fa fa-map-marker"></i><a href="">{{$store['address']}}</a>
                </div> <!-- cd-item-info -->
                <div class="cd-item-info" style="text-align: left">
                    <i class="fa fa-phone"></i> <a href="">{{$store['phone_2']}}</a>
                </div> <!-- cd-item-info -->
                <div class="cd-item-info" style="text-align: left">
                    <i class="fa fa-clock-o"></i> <a href="">{{$store['work_hour']}}</a>
                </div> <!-- cd-item-info -->
            </li>
        @endforeach
    </ul> <!-- cd-gallery -->

@endsection

@section('extraCSS')

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleSlider.css') }}" rel="stylesheet">

@endsection

@section('extraJS')
    <script src="{{ asset('js/jquery.mobile.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
@endsection

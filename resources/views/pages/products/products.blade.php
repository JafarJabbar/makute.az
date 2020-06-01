@extends('layouts.layout')

@section('content')

    @include('widgets.jumbotron',['bgImage'=>asset('img/banner/product.jpg'),'name'=>'Məhsullarımız',"url"=>route('product.index')])
    @include('widgets.fav-categories')

@if(count($products) > 0)
    <div class="container main-products" >
        <div class="row">
            @foreach($products as $product)
               <div class="col-md-4 col-sm-6">
                   <div class="card product-card p-5">
                       <img width="100%" height="180" style="object-fit: cover; padding: 5px;" class="card-img-top" src="{{$product['image_1']?asset($product['image_1']):asset('img/Products/default.jpg')}}" alt="Card image cap">
                       <div class="card-body">
                           <h4 class="card-title">{{$product['title']}}</h4><br>
                           <h5 class="card-title">{{$product['name']}}</h5><br>
                           <p class="card-text">{{substr($product['description'],0,50)}}</p><br>
                           <a href="{{route('product.show.one',['url'=>$product['url']])}}" class="product-button btn btn-primary">Ətraflı</a>
                       </div>
                   </div>
               </div>

                {{--                    <div class="product w-100" >--}}
                {{--                        <img style="width: 250px; height: 200px; object-fit: cover" src="{{$product['image_1']?asset($product['image_1']):asset('img/Products/default.jpg')}}"/>--}}
                {{--                        <label style="font-size: 14px" class="price">{{substr($product['title'],0,15)}}</label>--}}
                {{--                        <hr>--}}
                {{--                        <div class="description" >--}}
                {{--                            <h2>{{$product['name']}}</h2>--}}
                {{--                            <p>{{substr($product['description'],0,100)}}...</p>--}}
                {{--                            <a href="{{route('product.show.one',['url'=>$product['url']])}}" class="m-2  btn btn-primary btn-block">Ətraflı... </a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
            @endforeach
        </div>

        <div class="row category-div">
            <div class="card" style="width: 25rem;">
                <div class="card-header">
                    <h2><b>Kateqoriyalar</b></h2>
                    <hr>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item {{request()->routeIs('product.index')?'active-category':''}}"><a href="{{route('product.index')}}">Bütün məhsullar</a></li>
                    @foreach($categories as $category)
                        {{request()->input('category')}}
                        <li  class="list-group-item "  ><a href="{{route('product.category',['category'=>$category['id']])}}">{{$category['title']}}</a></li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>

    @else
    <div class=" alert alert-info text-center" role="alert">
        Bu kateqoriyaya uyğun məlumat yoxdur!
    </div>

    @endif

@endsection


@section('extraCSS')
    <link href="{{asset('css/allProducts.css')}}" rel="stylesheet">
@endsection

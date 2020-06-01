@extends('layouts.layout')

@section('content')
    @include('widgets.jumbotron',['bgImage'=>asset('img/banner/product.jpg'),'name'=>'  '.$product['url'],"url"=>route('product.index')])


    @include('widgets.fav-categories')
    <main>
        <div class="container">
            <hr>
            <div class="card">
                <div class="row">
                    <aside class="col-sm-5 border-right">
                        <article class="gallery-wrap">
                            <div class="img-big-wrap">
                                <div class="product-image"> <a href="#"><img src="{{$product['image_1']?asset($product['image_1']) : asset('img/default.jpg')}}"></a></div>
                            </div> <!-- slider-product.// -->
                            <div class="img-small-wrap">
                                <div class="item-gallery"> <img src="{{$product['image_1']?asset($product['image_1']) : asset('img/Products/default.jpg')}}"> </div>

                                @if(@$product['image_2'])
                                    <div class="item-gallery"> <img src="{{$product['image_2']?asset($product['image_2']) : asset('img/Products/default.jpg')}}"> </div>
                                @endif
                                @if(@$product['image_3'])
                                <div class="item-gallery"> <img src="{{$product['image_3']?asset($product['image_3']) : asset('img/Products/default.jpg')}}"> </div>
                                @endif
                            </div> <!-- slider-nav.// -->
                        </article> <!-- gallery-wrap .end// -->
                    </aside>
                    <aside class="col-sm-7">
                        <article class="card-body p-5">
                            <h3 class="title mb-3">{{$product['name']}}</h3>

                            <p class="price-detail-wrap">
                                <!--<span class="price h3 text-warning"> -->
                                <!--	<span class="currency">US $</span><span class="num">1299</span>-->
                                <!--</span> -->
                                <!--<span>/per kg</span> -->
                            </p> <!-- price-detail-wrap .// -->
                            <hr>
                            <dl class="item-property">
                                <dt><h3>{{$product['title']}}</h3></dt>
                                <hr>
                                <dd><p>{{$product['description']}}</p></dd>
                            </dl>
                            <hr>
                            <div class="properties">
                                <div class="property-item" style="flex-direction: row">
                                    <label for="model">Model</label>
                                    <p class="float-left">{{@$product['model']}}</p>
                                </div>
                                <div class="property-item d-flex" style="flex-direction: row">
                                    <label for="model">Giriş gücü</label>
                                    <p class="float-left">{{@$product['input_power']}}</p>
                                </div>
                                <div class="property-item d-flex" style="flex-direction: row">
                                    <label for="model">Tezlik</label>
                                    <p class="float-left">{{@$product['no_load_speed']}}</p>
                                </div>

                                 @if(@$product['disc_dia'])
                                <div class="property-item d-flex" style="flex-direction: row">
                                    <label for="model">Diskinin diametri</label>
                                    <p class="float-left">{{@$product['disc_dia']}}</p>
                                </div>
                                @endif

                                 @if(@$product['chuch_size'])
                                <div class="property-item d-flex" style="flex-direction: row">
                                    <label for="model">Başlığının ölçüsü</label>
                                    <p class="float-left">{{@$product['chuch_size']}}</p>
                                </div>
                                @endif

                                @if(@$product['clindir_size'])
                                <div class="property-item d-flex" style="flex-direction: row">
                                    <label for="model">Silindirinin ölçüsü</label>
                                    <p class="float-left">{{@$product['clindir_size']}}</p>
                                </div>
                                @endif

                            </div>
                            <hr>
{{--                            <a href="#" class="btn btn-lg btn-primary text-uppercase"> Buy now </a>--}}
{{--                            <a href="#" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i> Add to cart </a>--}}
                        </article> <!-- card-body.// -->
                    </aside> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- card.// -->
        </div>
        <!--container.//-->

    </main>
@endsection


@section('extraCSS')
    <link href="{{asset('css/productSlider.css')}}" rel="stylesheet">
@endsection

@section('extraJS')
    <script src="{{ asset('js/productSlider.js') }}"></script>
@endsection



@extends('layouts.layout')
@section('content')
    <!--================Main Slider Area =================-->
    @include('widgets.slider')
    <!--================End Main Slider Area =================-->

        @include('widgets.fav-categories')
    <!--================Who We Are Area =================-->
    <section class="who_we_are_area">
        <div class="container">
            <div class="row who_we_inner">
                <div class="col-md-12">
                    <div class="who_we_left_content">
                        <div class="main_w_title">
                            <h2>Bİz <br class="title_br" /> Kİmİk?</h2>
                            <h6>Bizim haqqımızda hər şey</h6>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================End Who We Are Area =================-->

    <!--================Feature Content Area =================-->
    <section class="feature_content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="f_content_item">
                        <i class="fa fa-rss"></i>
                        <h4>İNNOVATİV</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="f_content_item">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <h4>GENİŞ SEÇİM</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="f_content_item">
                        <i class="fa fa-dollar" aria-hidden="true"></i>
                        <h4>QƏNAƏTCİL</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Feature Content Area =================-->




{{--    <div class="container m-t-50 m-b-50">--}}
{{--        <div class="clients_slider owl-carousel">--}}
{{--            <div class="item">--}}
{{--                <img src="{{asset('img/clients/bosch.png')}}" alt="">--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <img src="{{asset('img/clients/makita.png')}}" alt="">--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <img src="{{asset('img/clients/mkute.png')}}" alt="">--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <img src="{{asset('img/clients/stihl.png')}}" alt="">--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <img src="{{asset('img/clients/zenit.png')}}" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

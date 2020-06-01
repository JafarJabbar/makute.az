@extends('layouts.layout')

@section('content')
    @include('widgets.jumbotron',['bgImage'=>asset('img/banner/about.jpg'),'name'=>'Haqqımızda',"url"=>route('about')])
    @include('widgets.fav-categories')

    <section class="chose_video_area">
        <div class="chose_left_text">
            <div class="chose_text_inner">
                <div class="main_b_title">
                    <h2>Why <br class="title_br"> Choose Us?</h2>
                    <h6>Play Welcome Video</h6>
                </div>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                <ul>
                    <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>We Are Creative</a></li>
                    <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Honest And Dependable</a></li>
                    <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Quality Commitment</a></li>
                    <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>We Are Always Improving</a></li>
                </ul>
            </div>
        </div>
        <div class="chose_video_right">
            <div class="chose_video_inner">
                <img src="img/video-1.jpg" alt="">
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=5GL9JoH4Sws"><img src="img/icon/video-puse.png" alt=""></a>
            </div>
        </div>
    </section>
    <section class="service_single_area">
        <div class="container">
            <div class="service_single_inner">
                    <div class="row s_text_inner">
                    <div class="col-md-6">
                        <div class="left_service_desc">
                            <h4 class="project_title">Makute haqqında</h4>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed semper, lacus sed feugiat dictum, tellus ipsum auctor quam, non faucibus dui nisl et elit. Morbi eu interdum velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit consequatur?</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>İşimizdə məsuliyyətliyik</a></li>
                                <li><a href="#"><i class="fa fa-wrench" aria-hidden="true"></i>Məhsullarımızın texniki servisi</a></li>
                                <li><a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>26 ölkədə fillialımız</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="service_brochure">
                            <h4 class=" project_title">Məhsullarımız</h4>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed semper, lacus sed feugiat dictum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                            <a href="{{asset('img/Products/catalog.pdf')}}" download><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Makute kataloqunu yüklə</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

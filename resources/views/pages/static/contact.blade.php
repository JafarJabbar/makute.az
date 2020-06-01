@extends('layouts.layout')

@section('content')
    @include('widgets.jumbotron',['bgImage'=>asset('img/banner/contact.jpg'),'name'=>'Əlaqə',"url"=>route('contact')])
    @include('widgets.fav-categories')

    <div class="container">
        <section class="contact-page-section">
            <div class="container">
                <div class="sec-title">
                    <div class="title">Bizimlə əlaqə</div>
                    <h2>Bir toxunuşla qədər yaxın.</h2>
                </div>
                <div class="inner-container">
                    <div class="row clearfix">

                        <!--Form Column-->
                        <div class="form-column col-md-8 col-sm-12 col-xs-12">
                            <div class="inner-column">

                                <!--Contact Form-->
                                <div class="contact-form">
                                    <form method="post" action="sendemail.php" id="contact-form">
                                        <div class="row clearfix">
                                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                                <input type="text" name="name" value="" placeholder="Adınız" required>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                                <input type="email" name="email" value="" placeholder="Emailiniz" required>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                                <input type="text" name="subject" value="" placeholder="Mövzu" required>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                                <input type="text" name="phone" value="" placeholder="Telefonunuz" required>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                                <textarea name="message" placeholder="Mesajınız"></textarea>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                                <button type="submit" class="theme-btn btn-style-one">Göndər</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--End Contact Form-->

                            </div>
                        </div>

                        <!--Info Column-->
                        <div style="font-size: 14px !important;" class="info-column col-md-4 col-sm-12 col-xs-12">
                            <div class="inner-column">
                                <h2>Əlaqə məlumatları</h2>
                                <ul  class="list-info">
                                    <li><i  class="fa fa-globe"></i>{{$configs['address']}}</li>
                                    <li><i  class="fa fa-envelope"></i>{{$configs['mail']}}</li>
                                    <li><i  class="fa fa-phone"></i>{{$configs['phone_1']}} <br>{{$configs['phone_2']}}</li>
                                </ul>
                                <ul class="social-icon-four text-center">
                                    <li  class="follow">Bizi izləyin: </li>
                                    <li><a target="_blank" href="{{$configs['facebook']}}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="{{$configs['instagram']}}"><i class="fa fa-instagram"></i></a></li>
                                    <li><a target="_blank" href="{{$configs['whatsapp']}}"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a target="_blank" href="{{$configs['mail']}}"><i class="fa fa-envelope"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('extraCSS')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endsection

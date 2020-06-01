<footer class="footer_area text-center">
    <div class="footer_widgets_area">
        <div class="container">
            <div class="row footer_widgets_inner">
                <div class="col-md-4 col-sm-6 text-left">
                    <aside class="f_widget address_widget">
                        <div class="f_w_title text-center">
                            <h3>BİZİMLƏ ƏLAQƏ</h3>
                        </div>
                        <div class="address_w_inner">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="media-body">
                                    <a class="text-white" target="_blank" href="{{$configs['google_maps']}}">{{$configs['address']}}</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <a class="text-white" target="_blank" href="tel:{{$configs['phone_1']}}">{{$configs['phone_1']}}</a>
                                    <br>
                                    <br>
                                    <a class="text-white" target="_blank" href="tel:{{$configs['phone_2']}}">{{$configs['phone_2']}}</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <a class="text-white" target="_blank" href="mailto:{{$configs['mail']}}"> {{$configs['mail']}}</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-4 col-sm-6 float-left">
                    <div >
                        <ul class="nav navbar-nav">
                            @foreach($menu as $key => $val)
                                <li style="float: none" class="{{request()->routeIs($val['url'])? 'active':null}} ">
                                    <a style="color: darkgray" href="{{route($val['url'])}}" >{{$val['title']}}</a>
                                </li>
                        @endforeach
                        <!-- <li class="icon_search"><a href="#"><i class="mdi mdi-cart"></i></a></li> -->
                        </ul>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6">
                    <aside class="f_widget about_widget">
                        <img width="200" src="{{asset('img/clients/makute4.webp')}}" alt="">
                        <ul>
                            <li><a target="_blank" href="{{$configs['facebook']}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="{{$configs['instagram']}}"><i class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" href="{{$configs['whatsapp']}}"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a target="_blank" href="{{$configs['mail']}}"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </aside>
                </div>

            </div>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
    <style>
        #myBtn {
            display: none; /* Hidden by default */
            position: fixed; /* Fixed/sticky position */
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 99; /* Make sure it does not overlap */
            border: none; /* Remove borders */
            outline: none; /* Remove outline */
            background-color: #285f8f; /* Set a background color */
            color: white; /* Text color */
            cursor: pointer; /* Add a mouse pointer on hover */
            padding: 15px; /* Some padding */
            border-radius: 10px; /* Rounded corners */
            font-size: 18px; /* Increase font size */
        }

        #myBtn:hover {
            background-color: #555; /* Add a dark-grey background on hover */
        }
    </style>
    <script !src="">
        //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

    </script>
    @include('widgets.copyright')
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery-2.2.4.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/theme.js') }}"></script>
<script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendor/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('vendor/counterup/waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/flex-slider/jquery.flexslider-min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>

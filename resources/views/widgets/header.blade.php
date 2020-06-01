
<header >
    <div  class="header_top_area" >
        <div class="container">
            <div class="pull-left">

                <a href="tel:{{$configs['phone_1']}}"><i  class="fa fa-phone"></i>{{$configs['phone_1']}}</a>
                <a href="tel:{{$configs['phone_2']}}"><i class="fa fa-phone"></i>{{$configs['phone_2']}}</a>
                <a class="marker" href="{{$configs['google_maps']}}"><i class="fa fa-map-marker"></i>{{$configs['address']}}</a>
                <a href="#"><i class="mdi mdi-clock"></i>{{$configs['work_hour']}}</a>
            </div>
            <div class="pull-right">
                <ul class="header_social">
                    <li><a target="_blank" href="{{$configs['facebook']}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" href="{{$configs['instagram']}}"><i class="fa fa-instagram"></i></a></li>
                    <li><a target="_blank" href="{{$configs['whatsapp']}}"><i class="fa fa-whatsapp"></i></a></li>
                    <li><a target="_blank" href="{{$configs['mail']}}"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div style="background: #14419c" class=" main_menu_area">
        <div class="container ">
            <nav class="navbar navbar-default text-white">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand"  href="{{route('home')}}"><img width="250" style="margin: 10px auto" src="{{asset('/img/clients/makute4.png')}}" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height:1px;margin: 10px 0">
                    <ul class="nav navbar-nav navbar-right">
                        @foreach($menu as $key => $val)
                            <li class="{{request()->routeIs($val['url'])? 'active':null}} ">
                                <a style="color: whitesmoke" href="{{route($val['url'])}}" >{{$val['title']}}</a>
                            </li>
                        @endforeach
                        <!-- <li class="icon_search"><a href="#"><i class="mdi mdi-cart"></i></a></li> -->
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

            </nav>
        </div>
    </div>
</header>
<!--================Header Area =================-->

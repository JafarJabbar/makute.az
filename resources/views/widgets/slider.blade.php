
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" >
            @foreach($sliders as $slider)
            <div class="item {{$slider['id']==2 ? 'active':null}}">
                <img  style="height:100% !important;object-fit: cover" src="{{asset('/img/slider/'.$slider['photo'])}}">
                <div class="carousel-caption">
                    <h1 style="font-size: 2rem" class="p-b-50">{{$slider['headerText']}}</h1>
                    <p style="font-size: 1.5rem" class="p-b-50">{{$slider['text']}}</p>
                </div>
            </div>
        @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

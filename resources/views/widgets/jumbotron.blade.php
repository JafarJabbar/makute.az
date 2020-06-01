<section class="banner_area" style="height:400px;background: url('{{$bgImage}}'); background-size:cover">
    <div class="container">
        <div class="banner_inner_text" style="margin-top: 50px">
            <h4>{{$name}}</h4>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active"><a href="{{$url}}">{{$name}}</a></li>
            </ul>
        </div>
    </div>
</section>


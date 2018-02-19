@include('header', ['title' => 'ACTORS|MOVIEDB'])

    <!-- Main -->
    <div id="main">
        <!-- Content -->
        <div id="content">

            <!-- Box -->
            <div class="box">
                <div class="head">
                    <h2>ALL ACTORS</h2>
                    <p class="text-right"><a href="#">See all</a></p>
                </div>

                <!-- Movie -->
                @foreach($show as $s)
                <div class="movie">

                    <div class="movie-image">

                        <a href="{{route('single')}}"><span class="play"><span class="name">{{$s->name}}</span></span><img src="{{URL::asset('css/ThemeCSS/images/actor1.jpg')}}" alt="movie" /></a>
                    </div>

                    <div class="rating">
                        <p>RATING</p>
                        <div class="stars">
                            <div class="stars-in">

                            </div>
                        </div>
                        <span class="comments">12</span>
                    </div>
                </div>
                @endforeach
                <!-- end Movie -->
                <div class="cl">&nbsp;</div>
            </div>
            <!-- end Box -->
        </div>
        <!-- end Content -->


        <div class="cl">&nbsp;</div>
    </div>
    <!-- end Main -->
@include('footer')
@include('header', ['title' => 'MOVIES|MOVIEDB'])

<!-- Main -->
<div id="main">
    <!-- Content -->
    <div id="content">

        <!-- Box -->
        <div class="box">
            <div class="head">
                <p class="text-right"><a href="#">See all</a></p>
            </div>

            <!-- Movie -->
            @foreach($showMovies as $sM)
                <div class="movie">
                    <div class="movie-image">
                        <a href="{{route('singleMovie',$sM->id)}}"><img src="{{URL::asset('storage/' . $sM->images()->first()->filename)}}" />{{$sM->name}}</a>
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
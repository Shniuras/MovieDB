@include('header', ['title' => 'ACTORS|MOVIEDB'])

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
                @foreach($showActors as $sA)
                <div class="movie">
                    <div class="movie-image">
                        <a href="{{route('singleActor',$sA->id)}}">
                            <img src="{{URL::asset('storage/' . $sA->images()->first()->filename)}}" />
                            {{$sA->name}}
                        </a>
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
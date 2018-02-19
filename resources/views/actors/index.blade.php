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
                        <a href="{{route('single',$sA->id)}}">{{$sA->name}}</a>


                    </div>
                    <a href="{{route('delete',$sA->id)}}">Delete</a>
                    <a href="{{route('edit',$sA->id)}}">Edit</a>
                </div>


                <!-- end Movie -->
                <div class="cl">&nbsp;</div>
            </div>
        @endforeach
            <!-- end Box -->
        </div>
        <!-- end Content -->


        <div class="cl">&nbsp;</div>
    </div>
    <!-- end Main -->
@include('footer')
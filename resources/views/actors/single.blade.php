@include('header', ['title' => 'SINGLE|MOVIEDB'])
<!-- Main -->
<div id="main">
    <!-- Content -->
    <div id="content">
        <!-- Box -->
        <div class="box">
            <div class="head">
                <h2></h2>
                <p class="text-right"><a href="#"></a></p>
            </div>
            <!-- Movie -->
            <div class="movie">
                <div class="movie-image">
                    <span class=""></span><img src="{{URL::asset('storage/' . $single->images()->first()->filename)}}" />

                </div>
            </div>
            <div>
                <div>
                    <p>Name:  {{$single->name}}</p>
                    <p>Birthday: {{$single->birthday}}</p>
                    <p>Movies:
                    @foreach($showMovies as $sM)
                            <a href="{{route('singleMovie',$sM->id)}}">
                            {{$sM->name . " "}}
                            </a>
                    @endforeach
                </div>
                <br>
                <br>
                @auth
                    <a href="{{route('deleteActor',$single->id)}}">Delete</a>
                    <a href="{{route('editActor',$single->id)}}">Edit</a>
                @endauth
            </div>
            <!-- end Movie -->
            <div class="cl">&nbsp;</div>
        </div>
        <!-- end Box -->
    </div>
    <!-- end Content -->
</div>
@include('footer')

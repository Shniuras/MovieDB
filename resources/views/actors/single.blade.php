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
            @foreach($showImages as $sI)
            <div class="movie">
                <div class="movie-image">
                        <span class=""></span><img src="{{URL::asset('storage/' . $sI->filename)}}" />
                </div>
            </div>
            <div>
            @endforeach
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
                @auth
                <br>
                <p>Add More Pictures:</p>
                <form action="{{route('storePicture', $single->id)}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="file" name="file">
                    <br>
                    <input type="submit">
                </form>
                <br>
                <br>
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

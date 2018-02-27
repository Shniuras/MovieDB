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
            @foreach($showImage as $sI)
            <div class="movie">
                <div class="movie-image">
                    <span class=""></span><img src="{{URL::asset('storage/' . $sI->filename)}}" />
                </div>
            </div>
            <div>
            @endforeach
                <div>
                    <p>Name:  {{$showSingle->name}}</p>
                    <p>Year: {{$showSingle->year}}</p>
                    <p>Description: {{$showSingle->description}}</p>
                    <p>Rating: {{$showSingle->rating}}</p>
                    <p>Category: {{$showCategory->name}}</p>
                    <p>Actors: @foreach($showActors as $sA)<a href="{{route('singleActor',$sA->id)}}">{{$sA->name . " "}}@endforeach</a></p>
                </div>
                <br>
                <br>
                @auth
                    <label>Add More Movie Pictures:</label>
                    <form action="{{route('storeMoviePicture', $showSingle->id)}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="file" name="file">
                        <br>
                        <input type="submit">
                    </form>
                    <br>
                    <br>
                    <a href="{{route('deleteMovie',$showSingle->id)}}">Delete</a>
                    <a href="{{route('editMovie',$showSingle->id)}}">Edit</a>
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
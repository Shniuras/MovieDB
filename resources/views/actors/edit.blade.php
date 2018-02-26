@include('header',['title' => 'EDIT|MOVIEDB'])

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
                    <form action="{{route('updateActor',$edit->id)}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="text" name="name" value="{{$edit->name}}">
                        <input type="text" name="birthday" value="{{$edit->birthday}}">
                        @foreach($showMovies as $sM)
                            @if($editMovie->contains($sM))
                                <input type="checkbox" checked name="movie_id[]" value="{{$sM->id}}">{{$sM->name}}
                            @else
                                <input type="checkbox" name="movie_id[]" value="{{$sM->id}}">{{$sM->name}}
                            @endif
                        @endforeach
                        <input type="file" name="file">
                        <input type="submit" value="Edit">
                    </form>
                </div>
            </div>
            <!-- end Movie -->
        </div>
        <!-- end Box -->
    </div>
    <!-- end Content -->
</div>
@include('footer')
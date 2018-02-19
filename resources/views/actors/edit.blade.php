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
                    <form action="{{route('update',$edit->id)}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="text" name="name" value="{{$edit->name}}">
                        <input type="text" name="birthday" value="{{$edit->birthday}}">
                        <input type="submit">
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
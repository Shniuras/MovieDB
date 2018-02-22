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
            @foreach($showUsers as $sU)
                <div class="movie">
                    <div class="movie-image">
                        <a href="{{route('singleUser',$sU->id)}}">
                            {{$sU->name}}
                        </a>
                    </div>
                    <a href="{{route('deleteUser',$sU->id)}}">Delete</a>
                    <a href="{{route('editUser',$sU->id)}}">Edit</a>
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

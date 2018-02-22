@include('header', ['title' => 'CATEGORIES|MOVIEDB'])

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
            @foreach($showCategories as $sC)
                <div class="movie">
                    <div class="movie-image">
                        <a href="{{route('singleCategory',$sC->id)}}">{{$sC->name}}</a>
                    </div>
                    @auth
                    <a href="{{route('deleteCategory',$sC->id)}}">Delete</a>
                    <a href="{{route('editCategory', $sC->id)}}">Edit</a>
                        @endauth
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
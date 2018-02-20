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

                </div>

            </div>

            <div class="movie">

                <div class="movie-image">

                    <p>Name:  {{$showSingle->name}}</p>
                    <p>Year: {{$showSingle->year}}</p>
                    <p>Description: {{$showSingle->description}}</p>
                    <p>Rating: {{$showSingle->rating}}</p>
                    <p>Category: {{$showCategory->name}}</p>
                    <p>Actors: @foreach($showActors as $sA){{$sA->name . " "}}@endforeach</p>


                </div>
            </div>
            <!-- end Movie -->





            <div class="cl">&nbsp;</div>
        </div>
        <!-- end Box -->
    </div>
    <!-- end Content -->
</div>
@include('footer')
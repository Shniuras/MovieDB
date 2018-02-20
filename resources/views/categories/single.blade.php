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

                    <p>Name:  {{$showCategory->name}}</p>
                    <p>Description: {{$showCategory->description}}</p>

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
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

                    <span class=""></span><img src="{{URL::asset('css/ThemeCSS/images/actor1.jpg')}}" />
                </div>

            </div>

            <div class="movie">

                <div class="movie-image">

                    <p>Name: Saoirse </p>
                    <p>Surname: Ronan</p>
                    <p>Birthday: 1994 April 12</p>
                    <p>Movies: </p>
                    <div class="rating">
                        <p>RATING</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Movie -->





            <div class="cl">&nbsp;</div>
        </div>
        <!-- end Box -->
    </div>
    <!-- end Content -->
@include('footer')

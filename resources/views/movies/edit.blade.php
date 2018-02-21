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
                    <form action="{{route('updateMovie',$editMovie->id)}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="text" name="name" value="{{$editMovie->name}}">
                        <input type="text" name="description" value="{{$editMovie->description}}">
                        <input type="text" name="year" value="{{$editMovie->year}}">
                        <input type="text" name="rating" value="{{$editMovie->rating}}">
                        <p>Categories:</p>
                        <select name="category_id">
                        @foreach($showCategories as $sC)
                            @if($editCategory->select($sC))
                                <option selected value="{{$sC->id}}">{{$sC->name}}</option>
                                <br>
                            @else
                                <option value="{{$sC->id}}">{{$sC->name}}</option>
                                <br>
                            @endif
                        @endforeach
                        </select>
                        <p>Actors:</p>
                        @foreach($showActors as $sA)
                            @if($editActor->contains($sA))
                                <input type="checkbox" checked name="actor_id[]" value="{{$sA->id}}">{{$sA->name}}
                                <br>
                            @else
                                <input type="checkbox"  name="actor_id[]" value="{{$sA->id}}">{{$sA->name}}
                                <br>
                            @endif
                        @endforeach
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
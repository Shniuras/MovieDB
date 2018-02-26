@include('header', ['title' => 'ADD|MOVIEDB'])
<form action="{{route('storeActor')}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="text" name="name">
    <input type="date" name="birthday">
    @foreach($showMovie as $sM)
        <input type="checkbox" name="movie_id[]" value="{{$sM->id}}">{{$sM->name}}
    @endforeach
    <input type="file" name="file">
    <input type="submit">
</form>
@include('footer')
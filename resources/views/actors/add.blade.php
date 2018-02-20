@include('header', ['title' => 'ADD|MOVIEDB'])
<form action="{{route('storeActor')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="text" name="name">
    <input type="date" name="birthday">
    {{--<input type="file" name="file">--}}
    <input type="submit">
</form>
@include('footer')
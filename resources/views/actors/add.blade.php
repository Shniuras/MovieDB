@include('header', ['title' => 'ADD|MOVIEDB'])
<form action="{{route('store')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="text" name="name">
    <input type="date" name="birthday">
    <input type="text" name="user_id">
    <input type="submit">
</form>
@include('footer')
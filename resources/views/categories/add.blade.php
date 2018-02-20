@include('header', ['title' => 'ADD|MOVIEDB'])
<form action="{{route('storeCategory')}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="text" name="name" placeholder="Category name">
    <input type="text" name="description" placeholder="Category description">
    {{--<input type="file" name="file">--}}
    <input type="submit">
</form>
@include('footer')
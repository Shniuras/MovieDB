@include('header', ['title' => 'ADD|MOVIEDB'])
<form action="{{route('store')}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="description" placeholder="description">
    <input type="text" name="year" placeholder="year">
    <input type="text" name="rating" placeholder="rating">
    <input type="text" name="category_id" placeholder="category_id">
    {{--<input type="file" name="file">--}}
    <input type="submit">
</form>
@include('footer')


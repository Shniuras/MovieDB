@include('header', ['title' => 'ADD|MOVIEDB'])
<form action="{{route('storeMovie')}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="description" placeholder="description">
    <input type="text" name="year" placeholder="year">
    <input type="text" name="rating" placeholder="rating">
    <select name="category_id">@foreach($showCategories as $sC)<option value="{{$sC->id}}"> {{$sC->name}} </option>@endforeach</select>
    @foreach($showActors as $sA)<input type="checkbox" name="actor_id[]" value="{{$sA->id}}">{{$sA->name}}@endforeach

    <input type="file" name="file">
    <input type="submit">
</form>
@include('footer')


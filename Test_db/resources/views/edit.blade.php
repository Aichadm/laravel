<form action="{{route('promotion.update',$name->id)}}" method="post">
    @csrf
    <input type="text" name="name" value="{{$name->name}}">
    <button type="submit">Modifier</button>
</form>
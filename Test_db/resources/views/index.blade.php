<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- {{-- <script src="{{asset('js/search.js')}}"></script> --}} -->
    <title>home</title>
</head>
<body>
<a href="/create">Ajouter</a>
<ul>
    @foreach ($promotions as $promotion)
    <li>
        {{ $promotion->name }}
    </li>
@endforeach
</ul> 
@foreach ($promotions as $item)
    <p>{{$item->name}}</p>
     <!-- $modi={{route('promotion.edit',$item->id)}} -->
    <a href="{{route('promotion.edit',$item->id)}}">edit</a>
        <form action="{{route('promotion.delete',$item->id)}}"  method="post">
        @csrf
        <button type="submit">Supprimer</button>
    </form>
@endforeach
<!-- ////////////////////////////////////////////////////// -->

 <!-- ////////////////////////////////////////////////////////////////////////////// --> 


 <h1>Table promotion</h1>
<a href="create">Ajouter promotion</a>
<div>

    <input type="text" id="search">

</div>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name promotion</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="tbody">
        @foreach ($promotions as $value)

        <tr>
            
            <td>{{$value->name}}</td>
            <td>
                <a href="edit/{{$value->id}}">Modifier</a>
                <a href="delete/{{$value->id}}">Supprimer</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>




<script type="text/javascript" >
$('#search').on('keyup',function(){
        $value=$(this).val();
        
        $.ajax({
        type : 'get',
        //url : 'search',
         url : '{{URL::to("search")}}',
        data:{'key':$value},
        success:function(data){
        $('#tbody').html(data);
        }
        });
        })
</script>



</body>
</html>

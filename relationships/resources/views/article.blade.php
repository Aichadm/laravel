


   @forelse($Post as $value)
 <span>{{$value->nameT}} </span>
   @empty
   <span>Aucun tag pour ce post</span>
   @endforelse
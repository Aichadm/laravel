@include('layout/head')

<form  action="{{route('tache.update',$tache->id)}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-row">
      <div class="form-group col-md-2">
        Nom tache :<input type="text" class="form-control" value="{{$tache->Nom_Tache}}" name="Nom_Tache" >
      </div>
      <div class="form-group col-md-2">
        Début tache:<input  class="form-control" value="{{$tache->Date_debut}}" name="Date_debut" >
      </div>
      <div class="form-group col-md-2">
        Fin de la tache:<input  class="form-control" value="{{$tache->Date_fin}}" name="Date_fin" >
      </div>
      <div class="form-group col-md-2">
        Descripyin du tache:<input type="TEXT" class="form-control" value="{{$tache->Description}}" name="Description" >
      </div>
      <input type="hidden" value="{{$tache->Brief_id}}" name="Brief_id">

    </div>

    <button type="submit" class="btn btn-warning">Modifier</button>
  </form>

@include('layout/head')

<form   action="{{route('tache.store')}}" method="POST" >
    @csrf
    <div class="form-row">
      <div class="form-group col-md-2">
        Nom tache :<input type="text" class="form-control" name="Nom_Tache" >
      </div>
      <div class="form-group col-md-2">
        Début tache:<input type="date" class="form-control"  name="Date_debut" >
      </div>
      <div class="form-group col-md-2">
        Fin tache:<input type="date" class="form-control" name="Date_fin" >
      </div>
      <div class="form-group col-md-2">
        Description tache:<input type="text" class="form-control" name="Description" >
      </div>
      <input type="hidden" value="{{$id}}" name="Brief_id">

    </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
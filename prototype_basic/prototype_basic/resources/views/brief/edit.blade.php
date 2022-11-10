@include('layout/head')

<form  action="{{route('brief.update',$brief->id)}}" method="POST"  >
    @csrf
    @method("PUT")
    <div class="form-row">
      <div class="form-group col-md-2">
        Nom brief :<input type="text" class="form-control"  value="{{$brief->Nom_Brief}}" name="Nom_Brief" >
      </div>
      <div class="form-group col-md-2">
        Date/heure de livraison :<input type="datetime-local" class="form-control" value="{{$brief->Date_livraison}}" name="Date_livraison" >
      </div>
      <div class="form-group col-md-2">
        Date/heure de récupération :<input type="datetime-local" class="form-control" value="{{$brief->Date_recuperation}}" name="Date_recuperation" >
      </div>
    </div>

    <button type="submit" class="btn btn-warning">Modifier</button>
  </form>
<!-- //////////////////////////////////////////////////////////////////////////////////// -->
<form action="{{route('tache.create')}}" method="get" >

<button type="submit" class="btn btn-primary">Ajouter tache</button>
<input type="hidden" value="{{$brief->id}}" name="Brief_id">
</form>

<table class="table">
    <thead class="thead-dark" style="background-color:black ;color:azure">
      <tr>

            <th scope="col">id</th>
            <th scope="col">Nom de tache</th>
            <th scope="col">Debut du tache</th>
            <th scope="col">Fin du tache</th>
            <th scope="col">Description du tache</th>
            <th scope="col">Action</th>
            <th></th>
           
      </tr>
    </thead>
    <tbody>
        @foreach ($tache as $value)
      <tr>
        <td scope="row">{{$value->id}}</td>
        <td>{{$value->Nom_Tache}}</td>
        <td>{{$value->Date_debut}}</td>
        <td>{{$value->Date_fin}}</td>
        <td>{{$value->Description}}</td>
     
        <td>
            <form action="{{route('tache.edit',$value->id)}}">
                <button type="submit" class="btn btn-success">Modifier</button>

            </form>
            </td>
            <td>
            <form action="{{route('tache.destroy',$value->id)}}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
           </td>
      </tr>
      @endforeach

    </tbody>

  </table>

<form action="{{route('brief.index')}}">
  <button type="submit" class="btn btn-dark">Retour</button>
</form>
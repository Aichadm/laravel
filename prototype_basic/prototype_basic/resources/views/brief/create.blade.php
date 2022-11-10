@include('layout/head')


<form  action="{{route('brief.store')}}"method="POST" >
    @csrf
    <div class="form-row">
      <div class="form-group col-md-2">
        Nom brief :<input type="text" class="form-control"name="Nom_Brief" >
      </div>
      <div class="form-group col-md-2">
        Date/heure de livraison :<input type="datetime-local" class="form-control"  name="Date_livraison" >
      </div>
      <div class="form-group col-md-2">
        Date/heure de récupération :<input type="datetime-local" class="form-control" name="Date_recuperation" >
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
  <a href="{{route('brief.index')}}">retourn</a>
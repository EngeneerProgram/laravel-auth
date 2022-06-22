@extends('Admin.admin')

@section('content')

<h2>Crea un nuovo post</h2>

<form action="{{route('admin.posts.store')}}" method="post">
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Titolo</label>
    <input name= type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Inserisci un titolo</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Descrizione</label>
    <input name="Descrizione" type="text"row="3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Inserisci una descrizione</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Immagine</label>
    <input name="img" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Inserisci una immagine</small>
  </div>

 <button type="submit" class="btn btn-primary">Aggiungi Post</button>
</form>
@endsection
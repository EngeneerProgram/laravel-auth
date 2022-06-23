@extends('Admin.admin')


@section('content')

<h2>Modifica post</h2>

<form action="{{route('Admin.posts.update', '$post->id')}}" method="post">
@csrf
@method('PUT');
<div class="form-group">
    <label for="exampleInputEmail1">Titolo</label>
    <input name='titolo' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Inserisci un titolo</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Descrizione</label>
    <input name="descrizione" type="text"row="3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Inserisci una descrizione</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Immagine</label>
    <input name="img" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Inserisci una immagine</small>
  </div>

 <button type="submit" class="btn btn-primary">Modifica Post</button>
</form>
@endsection
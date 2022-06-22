@extends('Admin.admin')

@section('content')
<table class="table">
    <thead >
      <tr>
        <th scope="col">id</th>
        <th scope="col">titolo</th>
        <th scope="col">descrizione</th>
        <th scope="col">img</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse($posts as $post)
      <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->titolo}}</td>
        <td>{{$post->descrizione}}</td>
        <td><img width="100px" src="{{$post->img}}" alt=""></td>
        <td>view - edit - delete</td>
      </tr>

      @empty
      <tr>
        <th scope="row">Non ci sono post da mostrare <a href="#">Crea un post</a></th>
        
      </tr>

      @endforelse
          
     
      
    </tbody>
  </table>

@endsection
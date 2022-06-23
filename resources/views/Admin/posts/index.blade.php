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
        <td>
         <a class="btn btn-primary text-white" href="{{route('admin.posts.show', $post->id)}}">View</a>
         <a class="btn btn-secondary text-white" href="{{route('admin.posts.edit', $post->id)}}">Edit</a>
         <a class="btn btn-danger text-white" href="{{route('admin.posts.destroy', $post->id)}}">Delete</a>
         
         <div class="modal fade" id="delete-post-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitle-{{$post->id}}" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Elimina post corrente</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      Sei sicuro di voler eliminare il post
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>


                      <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                          @csrf
                          @method('DELETE')

                          <button type="submit" class="btn btn-danger">Conferma</button>
                      </form>

                  </div>
              </div>
          </div>
          

        
          </td>
      </tr>
      

      @empty
      <tr>
        <th scope="row">Non ci sono post da mostrare <a href="#">Crea un post</a></th>
        
      </tr>

      @endforelse
          
     
      
    </tbody>
  </table>

@endsection
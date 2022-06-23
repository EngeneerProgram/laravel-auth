@extends('Admin.admin')

@section('content')
<div class="container pt-5">
    <img src="{{$post->img}}" alt="{{$post->title}}">
<h1>{{$post->titolo}}</h1>
<p>{{$post->descrizione}}</p>
</div>


@endsection
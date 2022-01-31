@extends('layouts.main')


@section('content')

<div class="container">

  <div class="card mr-3 mb-5" style="width: 18rem;">
    <img src="{{$comic->image}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Title: {{$comic->title}}</h5>
      <p class="card-text">Series: {{$comic->series}}</p>
      <p class="card-text">Price: {{$comic->price}} &euro; </p>
      <p class="card-text">Type: {{$comic->type}}</p>
      <p class="card-text">Type: {{$comic->description}}</p>

      <button class="btn btn-primary"><a class="text-white" href="{{route ('comics.index')}}">Torna indietro</a></button>
      <button class="btn btn-secondary"><a class="text-white" href="{{route ('comics.edit', $comic)}}">Edit</a></button>
  </div>



  



</div>
    
@endsection
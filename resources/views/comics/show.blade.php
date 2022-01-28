@extends('layouts.main')


@section('content')

<div class="container">

  <h2>{{$comic->title}}</h2>
  <p>{{$comic->description}}</p>
  <img src="{{$comic->image}}" alt="image-url">
  <p>{{$comic->price}} &euro;</p>
  <p>{{$comic->series}}</p>
  <p>{{$comic->type}}</p>



  <button class="btn btn-primary"><a class="text-white" href="{{route ('comics.index')}}">Torna indietro</a></button>
  <button class="btn btn-secondary"><a class="text-white" href="{{route ('comics.edit', $comic)}}">Edit</a></button>



</div>
    
@endsection
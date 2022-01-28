@extends('layouts.main')


@section('content')

<div class="container">

  <h2>{{$comic->title}}</h2>
  <p>{{$comic->description}}</p>
  <img src="{{$comic->image}}" alt="image-url">
  <p>{{$comic->price}} &euro;</p>
  <p>{{$comic->series}}</p>
  <p>{{$comic->type}}</p>
  <p>{{$comic->slug}}</p>


  
  <a href="{{route ('comics.index')}}">Torna indietro</a>

</div>
    
@endsection
@extends('layouts.main')


@section('content')

<div class="container">

  <h1>Comics</h1>

  @foreach ($comicList as $comic)

    <div class="card" style="width: 18rem;">
      <img src="{{$comic->image}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Title: {{$comic->title}}</h5>
        <p class="card-text">Series: {{$comic->series}}</p>
        <p class="card-text">Price: {{$comic->price}} &euro; </p>
        <p class="card-text">Type: {{$comic->type}}</p>
        <a href="{{route('comics.show', $comic)}}"type="button" class="btn btn-primary">Description</a>
      </div>
    </div>
      
  @endforeach


  <div class="py-3">
    {{$comicList->links()}}
  </div>

</div>
    
@endsection
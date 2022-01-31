@extends('layouts.main')


@section('content')

<div class="container">

  @if (session('deleted'))
    <div class="alert alert-danger" role="alert">
      {{ session('deleted') }}
    </div>
  @endif

  <h1>Comics</h1>

  <div class="row">

      @foreach ($comicList as $comic)

        <div class="card mr-3 mb-5" style="width: 18rem;">
          <img src="{{$comic->image}}" class="card-img-top h-50" alt="...">
          <div class="card-body">
            <h5 class="card-title">Title: {{$comic->title}}</h5>
            <p class="card-text">Series: {{$comic->series}}</p>
            <p class="card-text">Price: {{$comic->price}} &euro; </p>
            <p class="card-text">Type: {{$comic->type}}</p>
            <a href="{{route('comics.show', $comic)}}"type="button" class="btn btn-primary">INFO</a>
            
            <form onsubmit="return confirm('Confermi eliminazione di: {{$comic->title}}')" action="{{ route('comics.destroy', $comic) }}" method="POST">
              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn-danger">DELETE</button></td>
            </form>

          </div>
        </div>  
      @endforeach

  </div>

  <div class="py-3">
    {{$comicList->links()}}
  </div>

</div>
    
@endsection
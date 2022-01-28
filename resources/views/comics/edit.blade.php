@extends('layouts.main')


@section('content')

<div class="container">

  <h1>Edit: {{$comic->title}}</h1>

  <form action="{{route('comics.update', $comic)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" value="{{$comic->title}}" id="title" placeholder="title">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description" >{{$comic->description}}</textarea>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="text" class="form-control" name="image" value="{{$comic->image}}" id="image" placeholder="image-url">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" name="price" value="{{$comic->price}}" id="price" placeholder="price">
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" name="series" value="{{$comic->series}}" id="series" placeholder="series">
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Tipo</label>
      <input type="text" class="form-control" name="type" value="{{$comic->type}}" id="type" placeholder="type">
    </div>

    <button type="submit" class="btn btn-primary">INVIA</button>
    <button type="reset" class="btn btn-danger">RESET</button>

  </form>

</div>
    
@endsection
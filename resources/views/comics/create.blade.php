@extends('layouts.main')


@section('content')

<div class="container">

  <h1>Inserisci un fumetto</h1>

  <form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" id="title" placeholder="title">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description" placeholder=""></textarea>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="text" class="form-control" name="image" id="image" placeholder="image-url">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" name="price" id="price" placeholder="price">
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" name="series" id="series" placeholder="series">
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Tipo</label>
      <input type="text" class="form-control" name="type" id="type" placeholder="type">
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control" name="slug" id="slug" placeholder="slug">
    </div>

    <button type="submit" class="btn btn-primary">INVIA</button>
    <button type="reset" class="btn btn-danger">RESET</button>

  </form>

</div>
    
@endsection
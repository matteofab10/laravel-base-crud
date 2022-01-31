@extends('layouts.main')


@section('content')

<div class="container">


  @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
  @endif

  <h1>Inserisci un fumetto</h1>

  <form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text"
      class="form-control @error('title') is-invalid @enderror"
      value="{{ old('title') }}"
      name="title"
      id="title"
      placeholder="title">
      @error('title')
        <p class="invalid-feedback">
          {{ $message }}
        </p>
      @enderror
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea
      class="form-control @error('description') is-invalid @enderror"
      name="description" 
      id="description"
      placeholder="">{{ old('description') }}</textarea>
      @error('description')
        <p class="invalid-feedback">
          {{ $message }}
        </p>
      @enderror
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input 
      type="text" 
      class="form-control @error('image') is-invalid @enderror"
      value="{{ old('image') }}"
      name="image" 
      id="image" 
      placeholder="image-url">
      @error('image')
        <p class="invalid-feedback">
          {{ $message }}
        </p>
      @enderror
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input 
      type="number" 
      class="form-control @error('price') is-invalid @enderror" 
      value="{{ old('price') }}"
      name="price" 
      id="price" 
      placeholder="price">
      @error('price')
        <p class="invalid-feedback">
          {{ $message }}
        </p>
      @enderror
    </div>

    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input 
      type="text" 
      class="form-control @error('series') is-invalid @enderror"
      value="{{ old('series') }}"
      name="series" 
      id="series" 
      placeholder="series">
      @error('series')
        <p class="invalid-feedback">
          {{ $message }}
        </p>
      @enderror
    </div>

    <div class="mb-3">
      <label for="type" class="form-label">Tipo</label>
      <input 
      type="text" 
      class="form-control @error('type') is-invalid @enderror" 
      value="{{ old('type') }}"
      name="type" 
      id="type" 
      placeholder="type">
      @error('type')
        <p class="invalid-feedback">
          {{ $message }}
        </p>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">INVIA</button>
    <button type="reset" class="btn btn-danger">RESET</button>

  </form>

</div>
    
@endsection
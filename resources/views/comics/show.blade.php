@extends('layouts.main')


@section('content')

<div class="container">

  <h1>{{$comic->description}}</h1>


  <a href="{{route ('comics.index')}}">Torna indietro</a>

</div>
    
@endsection
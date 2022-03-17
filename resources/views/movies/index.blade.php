@extends('movies')
@section('content')
<div class="d-flex">

  @foreach($movies as $movie)
  <div class="card border border-primary" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$movie->title}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">Titolo originale: {{$movie->original_title}}</h6>
      <p>Data: {{$movie->date}}</p>
      
    </div>
  </div>
  @endforeach
</div>
@endsection
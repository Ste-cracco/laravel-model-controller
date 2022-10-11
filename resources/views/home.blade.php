@extends('layout.app')

@section('headText', 'Homepage Movies')
    
@section('content')
    <h1>Movies</h1>
    @forelse ($movies as $movie)
    <div class="container_card">
        <h3 class="title"> {{ $movie->title }} </h3>
        <h4 class="original_title"> {{ $movie->original_title }} </h4>
        <p> {{ $movie->nationality }} </p>
        <p> {{ $movie->date }} </p>
        <p> {{ $movie->vote }} </p>
    </div>
        
    @empty
        
    @endforelse
@endsection
@extends('layouts.app')

@section('title', 'Featured Movie - ' . $movie['title'])

@section('content')
    <h2>Featured Movie</h2>

    <div class="card border-warning shadow-sm">
        <div class="card-body">
        <h2>{{ $movie['title'] }}</h2>
        <p><strong>ID:</strong> {{ $movie['id'] }}</p>
        <p><strong>Genre:</strong> {{ $movie['genre'] }}</p>
        <p><strong>Rating:</strong> {{ $movie['rating'] }} / 10</p>
        <p><strong>Year:</strong> {{ $movie['year'] }}</p>
        <p><em>Check out this amazing film!</em></p>
        </div>
    </div>

    <p><a href="{{ route('movies.index') }}">Back to Movie List</a> | <a href="{{ route('movies.show', $movie['id']) }}">Full Details</a></p>
@endsection

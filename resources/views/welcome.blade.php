@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title">Welcome to My Movie List</h2>
            <p class="card-text">Browse the movie collection, explore the featured title, or filter movies by genre.</p>
            <a class="btn btn-primary" href="{{ route('movies.index') }}">Browse Movies</a>
        </div>
    </div>
@endsection

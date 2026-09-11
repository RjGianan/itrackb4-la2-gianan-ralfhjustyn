@extends('layouts.app')

@section('title', 'Filter Movies')

@section('content')
    <h2>Filter Movies by Genre</h2>

    @if ($activeGenre)
        <p><strong>Showing:</strong> {{ $activeGenre }} movies only | <a href="{{ route('movies.filter') }}">Clear Filter</a></p>
    @else
        <p><strong>Showing:</strong> All movies</p>
    @endif

    <table class="table table-striped table-bordered">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Rating</th>
            <th>Year</th>
        </tr>

        @forelse ($movies as $movie)
            <tr>
                <td><a href="{{ route('movies.show', $movie['id']) }}">{{ $movie['title'] }}</a></td>
                <td>{{ $movie['genre'] }}</td>
                <td>{{ $movie['rating'] }}</td>
                <td>{{ $movie['year'] }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No movies found for this genre.</td>
            </tr>
        @endforelse
    </table>

    <p><a href="{{ route('movies.index') }}">Back to Movie List</a></p>
@endsection

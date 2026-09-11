@extends('layouts.app')

@section('title', 'Movie List')

@section('content')
    <h2>Movie List</h2>

    <table class="table table-striped table-bordered align-middle">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Rating</th>
            <th>Year</th>
        </tr>

        @forelse ($movies as $movie)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a href="{{ route('movies.show', $movie['id']) }}">{{ $movie['title'] }}</a></td>
                <td>{{ $movie['genre'] }}</td>
                <td>
                    {{ $movie['rating'] }}
                    @if ($movie['rating'] >= 8.7)
                        <span class="badge text-bg-success">Top Rated</span>
                    @endif
                </td>
                <td>{{ $movie['year'] }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">There are no movies to display right now.</td>
            </tr>
        @endforelse
    </table>
@endsection

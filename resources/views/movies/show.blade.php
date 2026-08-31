<!DOCTYPE html>
<html>
<head>
    <title>{{ $movie['title'] }} - Movie Detail</title>
</head>
<body>
    <h1>{{ $movie['title'] }}</h1>
    <p>Prepared by: Ralfh Justyn V. Gianan</p>

    <div>
        <p><strong>ID:</strong> {{ $movie['id'] }}</p>
        <p><strong>Title:</strong> {{ $movie['title'] }}</p>
        <p><strong>Genre:</strong> {{ $movie['genre'] }}</p>
        <p><strong>Rating:</strong> {{ $movie['rating'] }}</p>
        <p><strong>Year:</strong> {{ $movie['year'] }}</p>
    </div>

    <p><a href="{{ route('movies.index') }}">Back to Movie List</a></p>
</body>
</html>

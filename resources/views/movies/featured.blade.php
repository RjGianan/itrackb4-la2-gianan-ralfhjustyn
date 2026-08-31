<!DOCTYPE html>
<html>
<head>
    <title>Featured Movie - {{ $movie['title'] }}</title>
</head>
<body>
    <h1>Featured Movie</h1>
    <p>Prepared by: Ralfh Justyn V. Gianan</p>

    <div style="border: 2px solid gold; padding: 15px; background-color: #fffacd;">
        <h2>⭐ {{ $movie['title'] }}</h2>
        <p><strong>ID:</strong> {{ $movie['id'] }}</p>
        <p><strong>Genre:</strong> {{ $movie['genre'] }}</p>
        <p><strong>Rating:</strong> {{ $movie['rating'] }} / 10</p>
        <p><strong>Year:</strong> {{ $movie['year'] }}</p>
        <p><em>Check out this amazing film!</em></p>
    </div>

    <p><a href="{{ route('movies.index') }}">Back to Movie List</a> | <a href="{{ route('movies.show', $movie['id']) }}">Full Details</a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>{{ $movie['title'] }} - Movie Detail</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f9f9f9; }
        .container { background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        .detail-row { margin: 15px 0; }
        .detail-row strong { color: #555; display: inline-block; width: 120px; }
        a { color: #0066cc; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .back-link { margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $movie['title'] }}</h1>
        <p>Prepared by: Ralfh Justyn V. Gianan</p>

        <div>
            <div class="detail-row"><strong>ID:</strong> {{ $movie['id'] }}</div>
            <div class="detail-row"><strong>Title:</strong> {{ $movie['title'] }}</div>
            <div class="detail-row"><strong>Genre:</strong> {{ $movie['genre'] }}</div>
            <div class="detail-row"><strong>Rating:</strong> {{ $movie['rating'] }} / 10</div>
            <div class="detail-row"><strong>Year:</strong> {{ $movie['year'] }}</div>
        </div>

        <div class="back-link">
            <a href="{{ route('movies.index') }}">← Back to Movie List</a>
        </div>
    </div>
</body>
</html>

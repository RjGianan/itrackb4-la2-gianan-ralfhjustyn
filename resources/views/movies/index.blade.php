<!DOCTYPE html>
<html>
<head>
    <title>My Movie List</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        tr:hover { background-color: #f5f5f5; }
        a { color: #0066cc; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .nav { margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>My Movie List</h1>
    <p>Prepared by: Ralfh Justyn V. Gianan</p>
    
    <div class="nav">
        <a href="{{ route('movies.featured') }}">View Featured Movie</a> | 
        <a href="{{ route('movies.filter') }}">All Genres</a>
    </div>

    <table>
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Rating</th>
            <th>Year</th>
        </tr>

        @foreach ($movies as $movie)
            <tr>
                <td><a href="{{ route('movies.show', $movie['id']) }}">{{ $movie['title'] }}</a></td>
                <td>{{ $movie['genre'] }}</td>
                <td>{{ $movie['rating'] }}</td>
                <td>{{ $movie['year'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>

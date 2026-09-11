<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | My Movie List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <header class="bg-dark text-white py-3 mb-4">
        <div class="container">
            <h1 class="h3 mb-2">My Movie List</h1>
            @include('partials._nav')
        </div>
    </header>

    <main class="container pb-4">
        <p class="text-muted">Prepared by: Ralfh Justyn V. Gianan</p>
        @yield('content')
    </main>
</body>
</html>
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Private helper method to get all movies
     */
    private function getMovies()
    {
        return [
            1 => ['id' => 1, 'title' => 'Your Name', 'genre' => 'Animation', 'rating' => 8.8, 'year' => 2016],
            2 => ['id' => 2, 'title' => 'I Want To Eat Your Pancreas', 'genre' => 'Slice of Life', 'rating' => 8.1, 'year' => 2018],
            3 => ['id' => 3, 'title' => 'How to Train Your Dragon 3', 'genre' => 'Fantasy', 'rating' => 8.1, 'year' => 2019],
            4 => ['id' => 4, 'title' => 'Avengers: Endgame', 'genre' => 'Action', 'rating' => 8.4, 'year' => 2019],
            5 => ['id' => 5, 'title' => 'Haikyuu!! The Movie', 'genre' => 'Sports', 'rating' => 8.6, 'year' => 2016],
            6 => ['id' => 6, 'title' => 'A Silent Voice', 'genre' => 'Animation', 'rating' => 8.5, 'year' => 2016],
            7 => ['id' => 7, 'title' => 'Demon Slayer: Kimetsu no Yaiba', 'genre' => 'Action', 'rating' => 8.7, 'year' => 2020],
        ];
    }

    public function index()
    {
        $movies = $this->getMovies();
        return view('movies.index', ['movies' => $movies]);
    }

    public function show($id)
    {
        $movies = $this->getMovies();
        
        if (!isset($movies[$id])) {
            abort(404);
        }

        $movie = $movies[$id];
        return view('movies.show', ['movie' => $movie]);
    }

    public function featured()
    {
        $movies = $this->getMovies();
        $movie = $movies[1]; // Featured item is "Your Name"
        return view('movies.featured', ['movie' => $movie]);
    }

    public function filter($genre = null)
    {
        $movies = $this->getMovies();

        if ($genre !== null) {
            $filtered = [];
            foreach ($movies as $movie) {
                if ($movie['genre'] === $genre) {
                    $filtered[$movie['id']] = $movie;
                }
            }
            $movies = $filtered;
        }

        return view('movies.filter', ['movies' => $movies, 'activeGenre' => $genre]);
    }
}

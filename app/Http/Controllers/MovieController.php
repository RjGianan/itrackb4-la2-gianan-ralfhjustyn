<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $activeGenre = $request->query('activeGenre', 'all');
        $year = $request->query('year', 'all');

        $all = $this->movies();

            foreach ($all as $movie) {
                $MacthGenre = $activeGenre === 'all' || $movie['genre'] === $activeGenre;
                $MacthYear = $year === 'all' || (int)$movie['year'] === (int)$year;

                if ($MacthGenre && $MacthYear) {
                    $movies[] = $movie;
                }
            }

        return view('movies.index', ['movies' => $movies, 'activeGenre' => $activeGenre, 'year' => $year]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
          $movies = $this->movies();
        
        if (!isset($movies[$id])) {
            abort(404);
        }

        $movie = $movies[$id];
        return view('movies.show', ['movie' => $movie]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

     public function filter($genre = null)
    {
        $movies = $this->movies();

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

     private function Movies()
    {
        return [
            1 => ['id' => 1, 'title' => 'Your Name', 'genre' => 'Animation', 'rating' => 8.8, 'year' => 2016],
            2 => ['id' => 2, 'title' => 'I Want To Eat Your Pancreas', 'genre' => 'Drama', 'rating' => 8.1, 'year' => 2018],
            3 => ['id' => 3, 'title' => 'How to Train Your Dragon 3', 'genre' => 'Fantasy', 'rating' => 8.1, 'year' => 2019],
            4 => ['id' => 4, 'title' => 'Avengers: Endgame', 'genre' => 'Action', 'rating' => 8.4, 'year' => 2019],
            5 => ['id' => 5, 'title' => 'Haikyuu!! The Movie', 'genre' => 'Sports', 'rating' => 8.6, 'year' => 2016],
            6 => ['id' => 6, 'title' => 'A Silent Voice', 'genre' => 'Animation', 'rating' => 8.5, 'year' => 2016],
            7 => ['id' => 7, 'title' => 'Demon Slayer: Mugen Train', 'genre' => 'Action', 'rating' => 8.7, 'year' => 2020],
            8 => ['id' => 8, 'title' => 'Jujutsu Kaisen 0', 'genre' => 'Action', 'rating' => 7.8, 'year' => 2021],
            9 => ['id' => 9, 'title' => 'Spy x Family', 'genre' => 'Action', 'rating' => 7.5, 'year' => 2021],
            10 => ['id' => 10, 'title' => 'Anohana: The Flower We Saw That Day', 'genre' => 'Drama', 'rating' => 8.1, 'year' => 2011],
        ];
    }

}

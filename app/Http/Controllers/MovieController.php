<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = [
            ['title' => 'Your Name', 'genre' => 'Animation', 'rating' => 8.8],
            ['title' => 'I Want To Eat Your Pancreas ', 'genre' => 'Slice of Life', 'rating' => 8.1],
            ['title' => 'How to Train Your Dragon 3', 'genre' => 'Fantasy Epic', 'rating' => 8.1],
            ['title' => 'Avengers: Endgame', 'genre' => 'Action', 'rating' => 8.4],
            ['title' => 'Haikyuu!! The Movie', 'genre' => 'Sports', 'rating' => 8.6],
        ];

        return view('movies.index', ['movies' => $movies]);
    }
}

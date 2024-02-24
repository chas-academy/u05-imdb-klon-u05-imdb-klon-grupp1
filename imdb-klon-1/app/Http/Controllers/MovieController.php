<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::get();
        return view('movies.index', ['movies' => $movies]);
    }



    public function create()
    {
        // Implement your logic for displaying the create form
    }

    public function store(Request $request)
    {
        // Implement your logic for storing a new movie
    }

    public function show(Movie $movie)
    {

        return view('movies.show', compact('movie'));
    }

    public function showFromWatchlist($id)
    {
        // Implement your logic for displaying a movie from the watchlist
    }

    public function edit(Movie $movie)
    {
        // Implement your logic for displaying the edit form
    }

    public function update(Movie $movie, Request $request)
    {
        // Implement your logic for updating a movie
    }

    public function destroy(Movie $movie)
    {
        // Implement your logic for deleting a movie
    }
}

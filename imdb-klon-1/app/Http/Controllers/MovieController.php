<?php
#178
#Removed comments and debugging code

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $genreName = $request->input('genre');

    // Initially, filter movies by genre if a genre is selected.
    $moviesQuery = Movie::when($genreName, function ($query, $genreName) {
        return $query->whereHas('genres', function ($query) use ($genreName) {
            $query->where('name', '=', $genreName);
        });
    });

    $moviesQuery->orderBy('genre');

    $movies = $moviesQuery->paginate(10);

    $genres = Genre::all();

    return view('movies.index', compact('movies', 'genres'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Implement your logic for displaying the create form
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Implement your logic for storing a new movie
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {

        return view('movies.show', compact('movie'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        // Implement your logic for displaying the edit form
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Movie $movie, Request $request)
    {
        // Implement your logic for updating a movie
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        // Implement your logic for deleting a movie
    }
}

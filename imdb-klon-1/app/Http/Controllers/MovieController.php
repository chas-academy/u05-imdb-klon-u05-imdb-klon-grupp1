<?php
#178
#Removed comments and debugging code

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Check if the user is not authenticated
        $movies = Movie::paginate(10); // Adjust the number as needed

        return view('movies.index', ['movies' => $movies]);
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

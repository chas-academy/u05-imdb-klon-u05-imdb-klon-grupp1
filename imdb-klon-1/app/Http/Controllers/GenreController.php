<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Movie;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function index()
     {
         $genres = Genre::get();
         return view('showGenre', ['genres' => $genres]);
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
     * Display movies based on a random genre
     */
    public function showRandomGenre(Request $request)
    {
        // Retrieve all genres
        $genres = Genre::all();
        // Select a random genre:
        $randomGenre = $genres->shuffle()->first();
        // Filter movies based on the chosen genre id
        $movies = Movie::with('genre')->where('genre_id', $randomGenre->id)->get();

        dd($genres, $movies, $randomGenre);
        return view('genres.index', compact('movies', 'randomGenre'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $genre = Genre::with('movies')->findOrFail($id);

        return view('genres.index', compact('genre'));
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
}
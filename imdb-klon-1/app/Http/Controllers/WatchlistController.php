<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Watchlist;
use App\Models\Movie;
use App\Models\User;

class WatchlistController extends Controller
{
    public function index()
    {
        //TODO Is this needed? //Dennis
        // auths user's watchlist
        $watchlist = Auth::user()->watchlist;

        // Retrieve the movies
        $watchlistMovies = $watchlist->movies;

        return view('watchlist.index', compact('watchlist'));
    }


    public function create()
    {
        //creating in registratedusercontroller
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $watchlist = $user->watchlist;
        $movies = $watchlist->movies;

        return view('watchlist.index', compact('movies'));
    }

    public function store(Request $request, Movie $movie)
    {
        $user = auth()->user();
        $user->watchlist->movies()->attach($movie->id);

        return redirect()->back()->with('success', 'Movie added to watchlist successfully');
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

    /**
     * Filter by genre
     */
    public function filterByGenre(string $id) {
        $watchlist = Watchlist::whereHas('movie', function ($query) {
            $query->where('gernre', 'Action');
        })->get();
    }
}

<?php
#169
#Removed the logic in the 'show' method to view the watchlist based on the user who is logged in.
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Watchlist;
use App\Models\Movie;
use App\Models\User;

class WatchlistController extends Controller
{
    /**
     * Display the users watchlist on a single page
     */
    public function index()
    {
        $watchlist = Auth::user()->watchlist; // ...finds the user 
        
        return view('watchlist.index', compact('watchlist')); // ...returns the content in a view
    }


    public function create()
    {
        //creating in registratedusercontroller
    }

    /**
     * Display the watchlist on the front page if logged in
     */
    public function show(int $userId)
    {
        $watchlist = Watchlist::where('user_id', $userId)->firstOrFail();
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

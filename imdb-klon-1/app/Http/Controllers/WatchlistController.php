<?php
#21/02
#Created a WatchlistController and rewrote the index. 
#Deleted the ListController.
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watchlist;

class WatchlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $watchlists = Watchlist::all();
        return view('watchlist.index', compact('watchlist'));
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
        $request->validate([
            'name' => 'Watchlist'
        ]);

        Watchlist::create([
            'name' => $request->name,
            // Add any other fields you want to store
        ]);

        return redirect()->route('watchlist.index')->with('success', 'Watchlist created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Watchlist $watchlist)
    {
        return view('watchlists.show', compact('watchlist'));
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

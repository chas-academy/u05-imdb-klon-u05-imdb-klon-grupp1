<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        return view('reviews', ['reviews' => $reviews]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
{
    
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
     
}
    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        return view('reviews.show', ['review' => $review]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        return view('reviews.edit', ['review' => $review]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
{
   
}

public function destroy(Review $review)
{
    // Delete the review
    $review->delete();

    // Redirect the user
    return redirect('/reviews');
}
}

<?php
namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
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
        return view('reviews.index', ['reviews' => $reviews]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
{
    return view('reviews.create');
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $validatedData = $request->validate([
            'rating' => 'required|numeric', // Rating är obligatoriskt och måste vara numeriskt
            'comment' => 'required|string', // Kommentar är obligatorisk och måste vara en sträng
        ]);
    
        $review = new Review();
        $review->rating = $validatedData['rating'];
        $review->comment = $validatedData['comment'];
        $review->user_id = 1; // omvandla till faktiskt user_id 
        $review->movie_id = 1; // -- movie_id <- får du via URI för filmen som kommentaren skrivs i
    
        $review->save();

        return back();
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
   //Validate data
   $request->validate([
    // 'title' => 'required',
    'rating' => 'required|integer|min:1|max:10', //Rating from 1 to 10.
    'comment' => 'required', //Not sure about this one
    // 'movie_id' => 'required|exists:movies,id',
]);
 //Update review
//  $review->title = $request->input('title');
//  $review->movie_id = $request->input('movie_id');
 $review->rating = $request->input('rating');
 $review->comment = $request->input('comment');
 $review->save();
 //Redirect user to review page
 return redirect()->route('reviews.index', ['review' => $review->id]);
}

public function destroy(Review $review)
{
    // Delete the review
    $review->delete();
    // Redirect the user
    return view('/reviews');
}
}

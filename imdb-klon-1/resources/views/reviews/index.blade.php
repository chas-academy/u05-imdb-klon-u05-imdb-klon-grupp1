@extends('layouts.app')




    @section('title')
    Review index - Show all Reviews
    @endsection
    @section('content')
<div>
        <h2>Create New Review</h2>
        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            <!-- <label for="title">Title:</label>
        <input type="text" name="title" id="title"> -->
<label for="rating">Rating:</label>
            <input type="number" name="rating" id="rating" min="1" max="10">
            <label for="comment">Comment:</label>
            <textarea name="comment" id="comment"></textarea>
            <button type="submit">Submit Review</button>
        </form>
    </div>
    <!-- Display all reviews -->
    @foreach($reviews as $review)
    <div>
        <h2>{{ $review->title }}</h2>
        <p>Rating: {{ $review->rating }}</p>
        <p>{{ $review->comment }}</p>
        <!-- Form for editing review -->
        <form action="{{ route('reviews.update', $review->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $review->title }}"> -->
            <label for="rating">Rating:</label>
            <input type="number" name="rating" id="rating" min="1" max="10" value="{{ $review->rating }}">
            <label for="comment">Comment:</label>
            <textarea name="comment" id="comment">{{ $review->comment }}</textarea>
            <button type="submit">Update Review</button>
        </form> <br>
        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Review</button>
        </form>
    </div>
    @endforeach
</div>
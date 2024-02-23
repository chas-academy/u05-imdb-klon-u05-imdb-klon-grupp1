<div>
    <!-- resources/views/reviews/reviews.blade.php -->

    @extends('layouts.app')

    @section('title')
        Review index - Show all Reviews
    @endsectiony

    @section('content')
    <div class="reviews">
        <ul>
            @foreach (explode(',', $reviews) as $review)
            <li class="mb-4 p-4 border border-gray-300 rounded">
                <strong class="text-green-600">Review: </strong> {{ $review }}<br>
            </li>
            @endforeach
        </ul>
    </div>
    @endsection
</div>
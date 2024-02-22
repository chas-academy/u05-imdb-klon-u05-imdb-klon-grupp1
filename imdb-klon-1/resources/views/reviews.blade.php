<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Reviews Table</title>
</head>
<body>
    <h1>Test Reviews Table</h1>
    <div class="reviews">
        <ul>
            @foreach (explode(',', $reviews) as $review)
            <li class="mb-4 p-4 border border-gray-300 rounded">
                <strong class="text-green-600">Review: </strong> {{ $review }}<br>
            </li>
            @endforeach
        </ul>
    </div>
    
</body>
</html>
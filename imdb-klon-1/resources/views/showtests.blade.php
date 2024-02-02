<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Tests</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-200">

    <div class="container mx-auto p-4">

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold mb-4 text-blue-600">All Tests</h1>

            @if(count($tests) > 0)
            <ul>
                @foreach($tests as $test)
                <li class="mb-4 p-4 border border-gray-300 rounded">
                    <strong class="text-green-600">Test Fillable String:</strong> {{ $test->fillable_string }}<br>
                    <strong class="text-purple-600">Test Fillable Int:</strong> {{ $test->fillable_int }}
                </li>
                @endforeach
            </ul>
            @else
            <p class="text-red-600">No tests available.</p>
            @endif
        </div>

    </div>
</body>

</html>
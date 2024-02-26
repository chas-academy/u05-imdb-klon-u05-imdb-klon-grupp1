

    @extends('layouts.app')

    @section('content')
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white dark:bg-gray-800">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Description</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Release Date</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Image Path</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Trailer Path</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Top Rating</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800">
                @foreach($movies as $movie)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">{{ $movie->id }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">{{ $movie->title }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">{{ $movie->description }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">{{ $movie->release_date }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">{{ $movie->img_path }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">{{ $movie->trailer_path }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">{{ $movie->top_rating }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
   


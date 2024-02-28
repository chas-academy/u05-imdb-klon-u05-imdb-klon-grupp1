<x-app-layout>

  @section('content')
  <div class="border-b border-gray-900/10 pb-12 mb-4">
    <h1 class="text-center">Dashboard</h1>
    <div class="max-w-2xl mx-auto px-4 py-8">
      <h2 class="text-xl font-semibold mb-4">Add a Movie</h2>
      <form action="{{ route('dashboard.movies.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
          <label for="title" class="block text-sm font-medium text-700">Title</label>
          <input type="text" name="title" id="title" autocomplete="off" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
        </div>

        <div>
          <label for="description" class="block text-sm font-medium text-700">Description</label>
          <textarea name="description" id="description" rows="4" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"></textarea>
        </div>

        <div>
          <label for="release_date" class="block text-sm font-medium text-700">Release Date</label>
          <input type="text" name="release_date" id="release_date" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
        </div>

        <div>
          <label for="img_path" class="block text-sm font-medium text-700">Image Path</label>
          <input type="text" name="img_path" id="img_path" autocomplete="off" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
        </div>

        <div>
          <label for="trailer_path" class="block text-sm font-medium text-700">Trailer Path</label>
          <input type="text" name="trailer_path" id="trailer_path" autocomplete="off" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
        </div>

        <div>
          <label for="top_rating" class="block text-sm font-medium text-700">Top Rating</label>
          <input type="number" name="top_rating" id="top_rating" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
        </div>

        <div class="flex justify-end">
          <x-primary-button>
            Add Movie
          </x-primary-button>
        </div>
      </form>
    </div>

    <h2 class="text-2xl font-semibold mb-4 text-center">Update or Delete a movie</h2>

    @foreach ($movies as $movie)
    <div class="bg-white p-4 rounded-lg shadow mb-4 mx-auto" style="width: 60%;">
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm font-semibold">Title:</span>
        <form action="{{ route('dashboard.movies.updateTitle', $movie) }}" method="POST" class="flex">
          @csrf
          @method('patch')
          <input type="text" name="title" value="{{ $movie->title }}" class="text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 flex-grow">
          <button type="submit" class="flex items-center px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
            </svg>
          </button>
        </form>
      </div>
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm font-semibold">Desc:</span>
        <form action="{{ route('dashboard.movies.updateDescription', $movie) }}" method="POST" class="flex">
          @csrf
          @method('patch')
          <input type="text" name="description" value="{{ $movie->description }}" class="text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 flex-grow">
          <button type="submit" class="flex items-center px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
            </svg>
          </button>
        </form>
      </div>
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm font-semibold">Date:</span>
        <form action="{{ route('dashboard.movies.updateDate', $movie) }}" method="POST" class="flex">
          @csrf
          @method('patch')
          <input type="text" name="release_year" value="{{ $movie->release_date }}" min="1900" max="{{ date('Y') }}" class="text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 flex-grow">
          <button type="submit" class="flex items-center px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
            </svg>
          </button>
        </form>
      </div>
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm font-semibold">Genre:</span>
        <form action="{{ route('dashboard.movies.updateGenre', $movie) }}" method="POST" class="flex">
          @csrf
          @method('patch')
          <input type="text" name="genre" value="{{ $movie->genre }}" class="text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 flex-grow">
          <button type="submit" class="flex items-center px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
            </svg>
          </button>
        </form>
      </div>
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm font-semibold">Trailer Path:</span>
        <form action="{{ route('dashboard.movies.updateTrailer', $movie) }}" method="POST" class="flex">
          @csrf
          @method('patch')
          <input type="text" name="trailer_path" value="{{ $movie->trailer_path }}" class="text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 flex-grow">
          <button type="submit" class="flex items-center px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
            </svg>
          </button>
        </form>
      </div>
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm font-semibold">Image Path:</span>
        <form action="{{ route('dashboard.movies.updateImg', $movie) }}" method="POST" class="flex">
          @csrf
          @method('patch')
          <input type="text" name="img_path" value="{{ $movie->img_path }}" class="text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 flex-grow">
          <button type="submit" class="flex items-center px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
            </svg>
          </button>
        </form>
      </div>
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm font-semibold">Top Rating:</span>
        <form action="{{ route('dashboard.movies.updateRating', $movie) }}" method="POST" class="flex">
          @csrf
          @method('patch')
          <input type="text" name="top_rating" value="{{ $movie->top_rating }}" class="text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 flex-grow">
          <button type="submit" class="flex items-center px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
            </svg>
          </button>
        </form>
      </div>
      <form action="{{ route('dashboard.movies.destroy', $movie) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
          Delete
        </button>
      </form>
    </div>
    @endforeach



    <h2 class="text-2xl font-semibold mb-4 text-center">Users</h2>
    @foreach ($users as $user)
    <div class="bg-white p-4 rounded-lg shadow mb-4 mx-auto" style="width: 70%;">
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm font-semibold">ID:</span>
        <span>{{ $user->id }}</span>
      </div>
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm font-semibold">Username:</span>
        <form action="{{ route('dashboard.users.updateUsername', $user) }}" method="POST">
          @csrf
          @method('patch')
          <input type="text" name="username" value="{{ $user->username }}" class="text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
          <input type="submit" value="Update" class="px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600">
        </form>
      </div>
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm font-semibold">E-mail:</span>
        <span>{{ $user->email }}</span>
      </div>
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm font-semibold">Role:</span>
        <form action="{{ route('dashboard.users.updateRole', $user) }}" method="POST">
          @csrf
          @method('patch')
          <select name="role" class="text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
            <option value="{{ $user->role }}">{{ $user->role }}</option>
            <option value="{{ $user->role === 'user' ? 'admin' : 'user' }}">{{ $user->role === 'user' ? 'admin' : 'user'}}</option>
          </select>
          <input type="submit" value="Update" class="px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600">
        </form>
      </div>
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm font-semibold">Created at:</span>
        <span>{{ $user->created_at->format('Y-m-d H:i:s') }}</span>
      </div>
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm font-semibold">Updated at:</span>
        <span>{{ $user->updated_at->format('Y-m-d H:i:s') }}</span>
      </div>
      <form action="{{ route('users.destroy', $user) }}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
      </form>
    </div>
    @endforeach
</x-app-layout>
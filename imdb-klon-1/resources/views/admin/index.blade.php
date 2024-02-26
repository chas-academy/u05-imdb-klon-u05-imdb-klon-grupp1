@extends('layouts.app') 

@section('content')
<div class="border-b border-gray-900/10 pb-12 mb-4">
<h1>Dashboard</h1> 
<div class="max-w-2xl mx-auto px-4 py-8">
    <h2 class="text-xl font-semibold mb-4">Add a Movie</h2>
    <form action="{{ route('dashboard.movies.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" autocomplete="off" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="4" required
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"></textarea>
        </div>

        <div>
            <label for="release_date" class="block text-sm font-medium text-gray-700">Release Date</label>
            <input type="date" name="release_date" id="release_date" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
        </div>

        <div>
            <label for="img_path" class="block text-sm font-medium text-gray-700">Image Path</label>
            <input type="text" name="img_path" id="img_path" autocomplete="off" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
        </div>

        <div>
            <label for="trailer_path" class="block text-sm font-medium text-gray-700">Trailer Path</label>
            <input type="text" name="trailer_path" id="trailer_path" autocomplete="off" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
        </div>

        <div>
            <label for="top_rating" class="block text-sm font-medium text-gray-700">Top Rating</label>
            <input type="number" name="top_rating" id="top_rating" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
        </div>

        <div class="flex justify-end">
            <button type="submit"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Add Movie
            </button>
        </div>
    </form>
</div>

<h2>Update or Delete a movie</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Release date</th>
            <th>Image path</th>
            <th>Trailer path</th>
            <th>Top rating</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($movies as $movie)
  <tr>
    <td>{{ $movie->id }}</td>
    <td>
      <form action="{{ route('dashboard.movies.updateTitle', $movie) }}" method="POST">
        @csrf
        @method('patch')
        <input type="text" name="title" value="{{ $movie->title }}" class="text-black">
        <input type="submit" value="Update">
      </form>
    </td>
    <td>{{ $movie->id }}</td>
    <td>
      <form action="{{ route('dashboard.movies.updateDescription', $movie) }}" method="POST">
        @csrf
        @method('patch')
        <input type="text" name="description" value="{{ $movie->description }}" class="text-black">
        <input type="submit" value="Update">
      </form>
    </td>
    <td>
      <form action="{{ route('dashboard.movies.updateDate', $movie) }}" method="POST">
        @csrf
        @method('patch')
        <input type="date" name="release_date" value="{{ $movie->release_date }}" class="text-black">
        <input type="submit" value="Update">
      </form>
    </td>
    <td>
    <form action="{{ route('dashboard.movies.updateImg', $movie) }}" method="POST">
        @csrf
        @method('patch')
        <input type="text" name="img_path" value="{{ $movie->img_path }}" class="text-black">
        <input type="submit" value="Update">
      </form>
    </td>
    <td>
    <form action="{{ route('dashboard.movies.updateTrailer', $movie) }}" method="POST">
        @csrf
        @method('patch')
        <input type="text" name="trailer_path" value="{{ $movie->trailer_path }}" class="text-black">
        <input type="submit" value="Update">
      </form>
    </td>
    <td>
    <form action="{{ route('dashboard.movies.updateRating', $movie) }}" method="POST">
        @csrf
        @method('patch')
        <input type="text" name="top_rating" value="{{ $movie->top_rating }}" class="text-black">
        <input type="submit" value="Update">
      </form>
    </td>
    <td>{{ $movie->created_at->format('Y-m-d H:i:s') }}</td>
    <td>{{ $movie->updated_at->format('Y-m-d H:i:s') }}</td>
    <td>
        <form action="{{ route('dashboard.movies.destroy', $movie) }}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
    </td>
  </tr>
@endforeach

    </tbody>
</table>
<h2>Users</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>E-mail</th>
            <th>Role</th>
            <th>Created at</th>
            <th>Uppdated at</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
  <tr>
    <td>{{ $user->id }}</td>
    <td>
      <form action="{{ route('dashboard.users.updateUsername', $user) }}" method="POST">
        @csrf
        @method('patch')
        <input type="text" name="username" value="{{ $user->username }}" class="text-black">
        <input type="submit" value="Update">
      </form>
    </td>
    <td>{{ $user->email }}</td>
    <td>
      <form action="{{ route('dashboard.users.updateRole', $user) }}" method="POST">
        @csrf
        @method('patch')
        <select name="role">
          <option value="{{ $user->role }}">{{ $user->role }}</option>
          <option value="{{ $user->role === 'user' ? 'admin' : 'user' }}">{{ $user->role === 'user' ? 'admin' : 'user'}}</option>
        </select>
        <input type="submit" value="Update">
      </form>
    </td>
    <td>{{ $user->created_at->format('Y-m-d H:i:s') }}</td>
    <td>{{ $user->updated_at->format('Y-m-d H:i:s') }}</td>
    <td>
        <form action="{{ route('users.destroy', $user) }}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
    </td>
  </tr>
@endforeach

    </tbody>
</table>
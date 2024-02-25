<!-- resources/views/admin/index.blade.php -->
@extends('layouts.app') 

@section('content')
<h2>Add New Movie</h2>
<form method="POST" action="">  
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>
    <br>
    <!-- Add other fields for movie details -->
    <button type="submit">Add Movie</button>
</form>

<h1>Admin Dashboard</h1>

<h2>Movies</h2>
<ul>
    @foreach($movies as $movie)
        <li>{{ $movie->title }}</li>
    @endforeach
</ul>

<h2>Users</h2>
<ul>
    @foreach($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</ul>
@endsection

<!-- Additional features can be added here -->
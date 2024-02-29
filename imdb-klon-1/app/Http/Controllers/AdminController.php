<?php

namespace App\Http\Controllers;


use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Authorize that the current user is an admin. If not, this might throw an exception or handle it based on your authorization logic.
        // $this->authorize('isAdmin');
    
        // Display all movies from the Movie model
        $movies = Movie::all();
    
        // Display all users from the User model
        $users = User::all();
    
        // Return the 'dashboard' view with the retrieved data
        return view('admin.index', compact('movies', 'users'));
    }
      


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'release_date' => ['required', 'date'],
            'img_path' => ['required', 'string', 'max:255'],
            'trailer_path' => ['required', 'string', 'max:255'],
            'top_rating' => ['required', 'numeric'],
        ]);

        // Create a new movie record
        $movie = Movie::create($request->all());

        // Redirect back to the create form with a success message
        return redirect()->route('dashboard.index')->with('success', 'Movie created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateTitle(Request $request, Movie $movie)
    {

        $request->validate([
            'title' => 'required|string|max:255|unique:movies,title,' . $movie->id,
        ]);

        $movie->title = $request->title;
        $movie->save();

        return redirect()->route('dashboard.index')->with('Success', 'Title has been updated');
    }

    public function updateDescription(Request $request, Movie $movie)
    {

        $request->validate([
            'description' => 'required|string|max:255|unique:movies,description,' . $movie->id,
        ]);

        $movie->description = $request->description;
        $movie->save();

        return redirect()->route('dashboard.index')->with('Success', 'Description has been updated');
    }


    public function updateGenre(Request $request, Movie $movie)
    {
        $request->validate([
            'genre' => [
                'required',
                'string',
                'max:255',
                Rule::exists('movie_genre', 'genre')->where(function ($query) use ($movie) {
                    $query->where('movie_id', $movie->id);
                }),
            ],
        ]);

        // Assuming you have a many-to-many relationship defined in your Movie model
        $movie->genres()->sync([$request->genre]);

        return redirect()->route('dashboard.index')->with('Success', 'Genre has been updated!');
    }


    public function updateDate(Request $request, Movie $movie)
    {

        $request->validate([
            'release_date' => 'required|date|unique:movies,release_date,' . $movie->id,
        ]);

        $movie->release_date = $request->release_date;
        $movie->save();

        return redirect()->route('dashboard.index')->with('Success', 'Release_date has been updated');
    }

    public function updateImg(Request $request, Movie $movie)
    {

        $request->validate([
            'img_path' => 'required|string|max:255|unique:movies,img_path,' . $movie->id,
        ]);

        $movie->img_path = $request->img_path;
        $movie->save();

        return redirect()->route('dashboard.index')->with('Success', 'Img_path has been updated');
    }

    public function updateTrailer(Request $request, Movie $movie)
    {

        $request->validate([
            'trailer_path' => 'required|string|max:255|unique:movies,trailer_path,' . $movie->id,
        ]);

        $movie->trailer_path = $request->trailer_path;
        $movie->save();

        return redirect()->route('dashboard.index')->with('Success', 'Trailer_path has been updated');
    }

    public function updateRating(Request $request, Movie $movie)
    {

        $request->validate([
            'top_rating' => 'required|string|max:255|unique:movies,top_rating,' . $movie->id,
        ]);

        $movie->top_rating = $request->top_rating;
        $movie->save();

        return redirect()->route('dashboard.index')->with('Success', 'Top_rating has been updated');
    }


    /**
     * USERS
     */
    public function updateUsername(Request $request, User $user)
    {

        $request->validate([
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
        ]);

        $user->username = $request->username;
        $user->save();

        return redirect()->route('dashboard.index')->with('Success', 'User has been updated');
    }

    /**
     * Update the specified users [role] in the users table.
     */
    public function updateRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:user,admin',
        ]);

        $user->role = $request->role;
        $user->save();

        return redirect()->route('dashboard.index')->with('Success', 'User role has been updated!');
    }

    /**
     * Remove the specified resource from table-view (soft delete).
     */
    public function destroyUser(User $user)
    {
        $user->delete();
        return redirect()->route('dashboard.index')->with('Success', 'User has been deleted!');
    }

    public function destroyMovie(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('dashboard.index')->with('Success', 'Movie has been deleted!');
    }
}

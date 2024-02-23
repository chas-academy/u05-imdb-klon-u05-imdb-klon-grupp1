<?php

namespace App\Http\Controllers;


use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardadminController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            // Authorize that the current user is an admin. If not, this might throw an exception or handle it based on your authorization logic.
            $this->authorize('isAdmin');
        
            // Display all movies from the Movie model
            $movies = Movie::all();
        
            // Display all users from the User model
            $users = User::all();
        
            // Return the 'dashboardadmin.index' view with the retrieved data
            return view('dashboardadmin.index', compact('movies', 'users'));
        }
        
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

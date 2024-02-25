<?php
#115
#Added the following methods to the UserController:
#->index - View all users
#->updateUsername - Change a users username
#->updateRole - Change a users role
#->delete - softDelete a user from the list (they will be recoverable)

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    
        /**
         * Update the specified users [username] in users table.
         */
        public function updateUsername(Request $request, User $user)
        {
    
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username,'.$user->id,
        ]);

        $user->username = $request->username;
        $user->save();

        return redirect()->route('users.index')->with('Success', 'User has been updated');
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

        return redirect()->route('users.index')->with('Success', 'User role has been updated!');
    }

    /**
     * Remove the specified resource from table-view (soft delete).
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('Success', 'User has been deleted!');
    }

    public function deletedUsers(User $user)
    {
        $user = User::withTrashed()->get();
        //return redirect()->route('deleted.users');

    }

    /**
     * Remove the specified resource from the database (force delete).
     * 
     * //TODO This method is never called, use as admin if you want.
     */
    public function forceDestroy(User $user)
    {
        $user->forceDelete();
        return redirect()->route('users.index')->with('Success', 'User was permanently deleted!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // This method is not needed as breeze makes it possible via other controllers.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // This method is not needed as breeze makes it possible via other controllers.
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // This method is not needed as breeze makes it possible via other controllers.
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // This method is not needed as breeze makes it possible via other controllers.
    }
}

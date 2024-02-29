<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RoleController extends Controller
{
    /**
     * Redirect to the appropriate dashboard based on the user's role.
     */
    /*   public function redirectToDashboard()
    {
        $user = Auth::user();

        if ($user && $user->hasRole('admin')) {
            return redirect()->route('dashboard.index');
        } else {
            return redirect()->route('profile.edit');
        }
    } */
}

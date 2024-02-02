<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestWebController extends Controller
{
    public function index()
    {
        // logic to get all orders goes here
        $tests = Test::get();
        return view('showtests', ['tests' => $tests]);
    }
}

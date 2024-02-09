<?php

namespace App\Http\Controllers;

use App\Models\CategoryList;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        $lists = CategoryList::get();
        return view('showlists', ['CategoryList' => $lists]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPostsController extends Controller
{
    public function index()
    {
        return view('layouts.userposts');
    }
}

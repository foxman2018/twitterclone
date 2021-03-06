<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('layouts.posts', [
            'posts' => $posts
        ]);
    }

    public function store()
    {
        return view('layouts.posts');   
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AddPostController extends Controller
{
    public function index()
    {
        return view('layouts.addpost');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'text' => 'required'
        ]);

        Post::create([
            'title' => $request->title,
            'text' => $request->text,
            'image' => $request->image,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('posts');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function index(Post $post) 
    {
        $post = Post::get()->where('id', $post->id)->first();
        $comments = Comment::get()->where('post_id', $post->id);

        return view('layouts.post', [
            'post' => $post,
            'comments' => $comments
        ]);
    }

    public function store(Post $post, Request $request)
    {
        $post = Post::get()->where('id', $post->id)->first();
        $comments = Comment::get()->where('post_id', $post->id);

        return view('layouts.post', [
            'post' => $post,
            'comments' => $comments
        ]);
    }
}

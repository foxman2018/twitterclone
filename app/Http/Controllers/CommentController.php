<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Post $post, Request $request)
    {
        $post->comment()->create([
            'user_id' => $request->user()->id,
            'comment' => $request->comment
        ]);
        return back()->with('return', 'Redirect return');
    }
}

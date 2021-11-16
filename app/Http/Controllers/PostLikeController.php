<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostLikeController extends Controller
{
    public function store(Post $post, Request $request)
    {
        if ($post->likedBy($request->user())) {
            $post->likes()->delete([
                'user_id' => $request->user()->id
            ]);
            return back()->with('return', 'Redirect return');
        } else {
            $request->user()->likes()->where('post_id', $post->id)->delete();
            return back()->with('return', 'Redirect return');
        }
    }
}
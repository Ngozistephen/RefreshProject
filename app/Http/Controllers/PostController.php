<?php

namespace App\Http\Controllers;

use App\Models\Post;


class PostController extends Controller
{
    public function Show (Post $post)
    {
        

        return view('post', compact('post'));
    }
}

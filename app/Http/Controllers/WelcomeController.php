<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $posts = Post::latest()->paginate(9);
        return view('welcome', compact('posts'));
    }
}

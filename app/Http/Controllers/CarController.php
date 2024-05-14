<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(9);
        return view('car', compact('posts'));
    }
}

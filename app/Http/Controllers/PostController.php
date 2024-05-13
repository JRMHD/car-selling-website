<?php

// app/Http/Controllers/PostController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('user.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
        ]);

        $postData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $postData['image'] = $imagePath;
        }

        Post::create($postData);

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('user.cardisp', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'price' => 'numeric|nullable',
        ]);

        $postData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $postData['image'] = $imagePath;
        }

        $post = Post::findOrFail($id);
        $post->update($postData);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }
}

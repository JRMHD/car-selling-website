<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(9); // Paginate the posts
        return view('user.index', compact('posts'));
    }






    public function create()
    {
        if (auth()->check()) {
            return view('posts.create');
        } else {
            return redirect()->route('login')->withErrors(['You must be logged in to access this page.']);
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'model' => 'required',
            'transmission' => 'required',
            'drive' => 'required',
            'engine_type' => 'required',
            'engine_size' => 'required',
            'fuel' => 'required',
            'year' => 'required',
            'chessis' => 'required',
            'color' => 'required',
            'doors' => 'required',
            'seats' => 'required',
            'price' => 'required',
            'body_type' => 'required',
            'mileage' => 'required',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:100000',
        ], [
            // Custom error messages
        ]);

        $postData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $postData['image'] = $imagePath;
        }

        $post = Post::create($postData);

        if ($post) {
            return redirect()->route('posts.create')->with('success', 'Post created successfully!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to create post. Please try again.');
        }
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
        $validatedData = $request->validate([
            'name' => 'required',
            'model' => 'required',
            'transmission' => 'required',
            'drive' => 'required',
            'engine_type' => 'required',
            'engine_size' => 'required',
            'fuel' => 'required',
            'year' => 'required',
            'color' => 'required',
            'doors' => 'required',
            'seats' => 'required',
            'price' => 'required',
            'body_type' => 'required',
            'mileage' => 'required',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ], [
            // Custom error messages
        ]);

        $postData = $request->all();

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            $post = Post::findOrFail($id);
            if ($post->image) {
                Storage::delete($post->image);
            }

            $imagePath = $request->file('image')->store('images', 'public');
            $postData['image'] = $imagePath;
        }

        $post = Post::findOrFail($id);
        $updated = $post->update($postData);

        if ($updated) {
            return redirect()->route('posts.create')->with('success', 'Post updated successfully!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to update post. Please try again.');
        }
    }
}

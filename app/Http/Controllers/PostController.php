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
            'transmission' => 'nullable',
            'drive' => 'nullable',
            'engine_type' => 'nullable',
            'engine_size' => 'nullable',
            'fuel' => 'nullable',
            'year' => 'nullable',
            'chessis' => 'nullable',
            'color' => 'nullable',
            'doors' => 'nullable',
            'seats' => 'nullable',
            'price' => 'required',
            'body_type' => 'nullable',
            'mileage' => 'nullable',
            'status' => 'required',
            'condition' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000', // Validate each image file
        ]);

        $postData = $request->except('image'); // Exclude image data from $postData

        if ($request->hasFile('image')) {
            $imagePaths = [];
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('images', 'public');
                $imagePaths[] = $imagePath;
            }
            $postData['image'] = $imagePaths;
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
            'transmission' => 'nullable',
            'drive' => 'nullable',
            'engine_type' => 'nullable',
            'engine_size' => 'nullable',
            'fuel' => 'nullable',
            'year' => 'nullable',
            'color' => 'nullable',
            'doors' => 'nullable',
            'seats' => 'nullable',
            'price' => 'required',
            'body_type' => 'nullable',
            'mileage' => 'nullable',
            'status' => 'required',
            'condition' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000', // Validate each image file
        ]);

        $postData = $request->except('image'); // Exclude image data from $postData
        $post = Post::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete the old images if they exist
            if ($post->image) {
                foreach ($post->image as $imagePath) {
                    Storage::delete($imagePath);
                }
            }

            $imagePaths = [];
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('images', 'public');
                $imagePaths[] = $imagePath;
            }
            $postData['image'] = $imagePaths;
        }

        $updated = $post->update($postData);

        if ($updated) {
            return redirect()->route('posts.create')->with('success', 'Post updated successfully!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to update post. Please try again.');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Config;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $make = $request->input('make');
        $model = $request->input('model');
        $startYear = $request->input('start_year');
        $endYear = $request->input('end_year');
        $condition = $request->input('condition');
        $color = $request->input('color');
        $priceRange = $request->input('price_range');
        $name = $request->input('name');
        $model = $request->input('model');

        $posts = Post::query();

        if ($query) {
            $posts->where('name', 'LIKE', "%$query%")
                ->orWhere('model', 'LIKE', "%$query%");
        }

        if ($name) {
            $posts->where('name', 'LIKE', "%$name%");
        }

        if ($model) {
            $posts->where('model', 'LIKE', "%$model%");
        }

        if ($startYear && $endYear) {
            $posts->whereBetween('year', [$startYear, $endYear]);
        } elseif ($startYear) {
            $posts->where('year', '>=', $startYear);
        } elseif ($endYear) {
            $posts->where('year', '<=', $endYear);
        }

        if ($condition) {
            $posts->where('condition', $condition);
        }

        if ($color) {
            $posts->where('color', $color);
        }

        if ($priceRange) {
            $range = explode('-', $priceRange);
            $min = (int) $range[0];
            $max = (int) $range[1];
            $posts->whereBetween('price', [$min, $max]);
        }

        $posts = $posts->paginate(150);

        $carData = Config::get('carData');
        $carMakes = array_keys($carData);
        $carModels = [];

        if ($make) {
            $carModels = $carData[$make] ?? [];
        }

        return view('welcome', compact('posts', 'query', 'make', 'model', 'startYear', 'endYear',  'condition', 'color', 'priceRange', 'carMakes', 'carModels'));
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
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:50000', // Validate each image file
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
        return view('user.index', compact('post'));
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

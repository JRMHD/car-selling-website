@extends('layouts.app')

@section('content')
    <h2>Posts</h2>
    <div>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
    </div>

    @foreach ($posts as $post)
        <div>
            <h3>{{ $post->name }}</h3>
            <p><strong>Model:</strong> {{ $post->model }}</p>
            <p><strong>Transmission:</strong> {{ $post->transmission }}</p>
            <p><strong>Drive:</strong> {{ $post->drive }}</p>
            <p><strong>Engine Type:</strong> {{ $post->engine_type }}</p>
            <p><strong>Engine Size:</strong> {{ $post->engine_size }}</p>
            <p><strong>Fuel:</strong> {{ $post->fuel }}</p>
            <p><strong>Year:</strong> {{ $post->year }}</p>
            <p><strong>Chessis/Frame Number:</strong> {{ $post->chessis }}</p>
            <p><strong>Color:</strong> {{ $post->color }}</p>
            <p><strong>Doors:</strong> {{ $post->doors }}</p>
            <p><strong>Seats:</strong> {{ $post->seats }}</p>
            <p><strong>Body Type:</strong> {{ $post->body_type }}</p>
            <p><strong>Mileage:</strong> {{ $post->mileage }}</p>
            <p><strong>Price:</strong> {{ $post->price }}</p>
            <p><strong>Status:</strong> {{ $post->status }}</p>

            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->name }}" width="300">
            @endif
        </div>
    @endforeach
@endsection

@extends('layouts.app')

@section('content')
    <h2>Posts</h2>

    <div>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
    </div>

    @foreach ($posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" width="300">
            @endif
        </div>
    @endforeach
@endsection

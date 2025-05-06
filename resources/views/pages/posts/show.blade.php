@extends('layouts.app')
@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.edit', $post) }}" class="button">Edit</a>
    <a href="{{ route('posts.index') }}" class="button small">Back to Posts</a>
@endsection

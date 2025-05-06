@extends('layouts.app')
@section('title', 'Edit Post')

@section('content')
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title', $post->title) }}" required>

        <label for="content">Content</label>
        <textarea name="content" rows="5" required>{{ old('content', $post->content) }}</textarea>

        <button type="submit" class="button primary">Update</button>
    </form>
@endsection

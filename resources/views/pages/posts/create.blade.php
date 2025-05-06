@extends('layouts.app')
@section('title', 'Create Post')

@section('content')
  <section>
    <header class="major">
      <h1>Create New Post</h1>
    </header>

    <form
      action="{{ route('posts.store') }}"
      method="POST"
      class="form"
    >
      @csrf
      <div class="row gtr-50 gtr-uniform">
        <div class="col-12">
          <label for="title">Title</label>
          <input
            type="text"
            name="title"
            id="title"
            value="{{ old('title') }}"
            required
          />
        </div>

        <div class="col-12">
          <label for="content">Content</label>
          <textarea
            name="content"
            id="content"
            rows="6"
            required
          >{{ old('content') }}</textarea>
        </div>

        <div class="col-12">
          <ul class="actions">
            <li><button
                type="submit"
                class="button primary"
              >Create</button></li>
            <li><a
                href="{{ route('posts.index') }}"
                class="button alt"
              >Cancel</a></li>
          </ul>
        </div>
      </div>
    </form>
  </section>
@endsection

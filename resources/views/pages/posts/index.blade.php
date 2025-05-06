@extends('layouts.app')
@section('title', 'All Posts')

@section('content')
  <section>
    <header class="major">
      <h1>All Posts</h1>
    </header>

    <ul class="actions">
      <li>
        <a
          href="{{ route('posts.create') }}"
          class="button primary"
        >Create New Post</a>
      </li>
      <ul>

        <div class="box">
          @forelse ($posts as $post)
            <article style="margin-bottom: 1.5rem;">
              <h3 style="margin-bottom: 0.25em;">
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
              </h3>

              <div class="actions">
                <a
                  href="{{ route('posts.edit', $post) }}"
                  class="button small"
                >Edit</a>

                <form
                  action="{{ route('posts.destroy', $post) }}"
                  method="POST"
                  style="display:inline;"
                >
                  @csrf
                  @method('DELETE')
                  <button
                    type="submit"
                    class="button small alt"
                  >Delete</button>
                </form>
              </div>
            </article>
          @empty
            <p>No posts found.</p>
          @endforelse
        </div>
  </section>
@endsection

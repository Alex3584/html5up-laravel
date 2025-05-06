@extends('layouts.app')

@section('title', 'Elements')

@section('content')

  <section>
    <header class="main">
      <h1>Elements</h1>
    </header>

    @include('partials.elements.content')

    <hr class="major" />

    <!-- Elements -->
    <h2 id="elements">Elements</h2>
    <div class="row gtr-200">
      <div class="col-6 col-12-medium">
        @include('partials.elements.textstuff')
        @include('partials.elements.lists')
        @include('partials.elements.blockquote')
        @include('partials.elements.table')
        @include('partials.elements.buttons')
        @include('partials.elements.form')
        @include('partials.elements.image')
        @include('partials.elements.box')
        @include('partials.elements.code')
      </div>
    </div>
  </section>

@endsection

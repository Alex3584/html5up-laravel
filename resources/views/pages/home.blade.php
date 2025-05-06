@extends('layouts.app')

@section('title', 'Home')
@section('content')

    @include('partials.home.banner')
    @include('partials.home.features')
    @include('partials.home.posts')

@endsection

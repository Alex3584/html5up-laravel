<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Editorial')</title>
    @vite(['resources/sass/main.scss'])
    @stack('styles')
</head>

<body class="is-preload">

    <div id="wrapper">

        <div id="main">
            <div class="inner">
                @include('partials.header')

                @yield('content')
            </div>
        </div>

        @include('partials.sidebar')

    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/util.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>

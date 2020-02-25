<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Dev Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Laravel Dev Test</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{ request()->segment(1) == null ? 'active' : ''}}">
                        <a class="nav-link" href="#">Home </span></a>
                    </li>
                    <li class="nav-item {{ request()->segment(1) == 'group' ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('group.index') }}">Group</a>
                    </li>
                    <li class="nav-item {{ request()->segment(1) == 'contact' ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="flex-center position-ref full-height">
            <div class="container-fluid mt-3">
                @include('flash::message')
                @include('layouts.partials.validation')
                @yield('content')
            </div>
        </div>

    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

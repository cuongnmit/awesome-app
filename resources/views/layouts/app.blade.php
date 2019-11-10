<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon-32x32.png') }}">
    <link href="{{ asset('semantic/dist/semantic.min.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="{{ asset('semantic/dist/semantic.min.js') }}"></script>

    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/main.js') }}"></script>
</head>
<body>
    @includeIf('includes.sidebar')
    <div class="pusher">
        <header class="header">
            @includeIf('includes.header')
        </header>
        <div class="wrapper">
            <img src="{{ asset('img/landing.svg') }}" class="landing-img" alt="landing page">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>

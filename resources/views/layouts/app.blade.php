<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon-32x32.png') }}">
    <link href="{{ asset('semantic/semantic.css') }}" rel="stylesheet">
    <link href="{{ mix('css/main.css') }}" rel="stylesheet">
</head>
<body>
@includeIf('layouts.sidebar')
<div class="pusher">
    <header class="header">
        @includeIf('layouts.header')
    </header>
    <div class="wrapper">
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('semantic/semantic.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

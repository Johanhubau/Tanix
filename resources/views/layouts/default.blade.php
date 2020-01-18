<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tanix') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <v-app>
        @if (Auth::check())
        @section('header')
            @include('layouts.header')
        @show
        @endif

        <v-content
            class="justify-center min-vh-100">
            @yield('content')
        </v-content>

        @if (Auth::check())
        @section('footer')
            @include('layouts.footer')
        @show
        @endif

    </v-app>
</div>
@section('javascripts')
    <script src="{{ asset('js/app.js') }}"></script>
@show
</body>
</html>

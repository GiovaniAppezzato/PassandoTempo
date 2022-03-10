<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imagens/favicon.ico') }}">

    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>

    <div class="flex flex-col min-h-screen" id="app">

        <div class="relative" id="wrapper-header">
            <!-- *** MENU MOBILE *** -->
            <x-sidebar itemActive="{{ $navbarActive }}" class="lg:hidden" />

            <!-- *** HEADER *** -->
            <x-layouts.header />
        </div>

        <div class="grow bg-gray-50">
            <!-- *** CONTEÚDO *** -->
            {{ $slot }}
        </div>
    </div>

    <!-- Frontend JS -->
    <script src="{{ asset('js/template.js') }}" type="module"></script>

    <!-- Dependencies -->
    <script src="{{ asset('js/jquery-360.js') }}"></script>
    <script defer src="{{ asset('assets/fontawesome/js/fontawesome.min.js') }}"></script>
    <script defer src="{{ asset('assets/fontawesome/js/solid.min.js') }}"></script>
    <script defer src="{{ asset('assets/fontawesome/js/brands.min.js') }}"></script>
    @stack('scripts')
</body>
</html>

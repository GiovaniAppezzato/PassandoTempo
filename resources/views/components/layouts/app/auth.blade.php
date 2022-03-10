<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Projeto Acadêmico - Técnico em informática para internet pelo IFSP Caraguatatuba">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
    @stack('styles')
</head>
<body class="bg-gray-100">

    <div class="w-full h-screen px-3 flex flex-wrap justify-center items-center">
        {{ $slot }}
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

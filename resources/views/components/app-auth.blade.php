<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Projeto Acadêmico - Técnico em informática para internet pelo IFSP Caraguatatuba">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $titulo }}</title>

    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
</head>
<body class="bg-gray-100"> {{-- bg-[#F9F8F8] --}}

    <div class="w-full h-screen px-3 flex flex-wrap justify-center items-center">
        {{ $slot }}
    </div>

    <script type="module" src="{{ asset('js/frontend.js')}}" charset="utf-8"></script>
    <script defer src="{{ asset('fontawesome/js/fontawesome.min.js') }}"></script>
    <script defer src="{{ asset('fontawesome/js/solid.min.js') }}"></script>
    <script defer src="{{ asset('fontawesome/js/brands.min.js') }}"></script>
</body>
</html>

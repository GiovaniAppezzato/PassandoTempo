<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $titulo }}</title>

    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
    <link rel="stylesheet" href="{{ asset('imagens/icons/i-awesome/all.min.css') }}">
</head>
<body class="bg-gray-100 bg-[#F4F4F4]"> {{-- bg-[#F9F8F8] --}}

    <div class="w-full h-screen px-3 flex flex-wrap justify-center items-center">
        {{ $slot }}
    </div>

    <script src="{{ url(mix('js/app.js')) }}" defer></script>
    <script src="{{ asset('js/jquery-360.js') }}"></script>
    <script type="module" src="{{ asset('js/frontend.js')}}" charset="utf-8"></script>
</body>
</html>

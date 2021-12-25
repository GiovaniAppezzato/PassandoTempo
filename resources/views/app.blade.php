<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PassandoTempo</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('imagens/icons/i-awesome/all.min.css') }}">
</head>
<body>

    {{-- Conteúdo aqui --}}

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-360.js') }}"></script>
    <script src="" charset="utf-8"></script>
</body>
</html>

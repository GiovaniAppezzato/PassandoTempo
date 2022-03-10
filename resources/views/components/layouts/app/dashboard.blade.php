<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="PassandoTempo">
    <meta name="description" content="Projeto Acadêmico - Técnico em informática para internet pelo IFSP Caraguatatuba">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imagens/favicon.ico') }}">

    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body class="bg-gray-50">

    <div id="app">
        <x-sidebar class="xl:left-0" itemActive="{{ $navbarActive }}" />

        <div class="min-h-[100vh] xl:ml-72">
            <!-- *** HEADER *** -->
            <x-layouts.header-dashboard />

            <main class="pt-16 xl:pt-[70px]">
                <!-- *** CONTEÚDO *** -->
                {{ $slot }}
            </main>
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

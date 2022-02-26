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
    <title>{{ $titulo }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{ $css ?? '' }}
</head>
<body>

    @include('layouts.header')

    <main class="pt-[60px] min-h-[100vh] max-w-[100vw] relative">
        <x-sidebar sidebarLoaded="{{ $sidebarLoaded }}" sidebarActive="{{ $sidebarActive }}" />

        <div class="lg:ml-[16rem] xl:ml-[18rem] {{ $sidebarLoaded == 'collapse' ? 'content-page--expand' : '' }}" id="contentPage">

            {{-- Conteúdo da página aqui --}}
            {{ $slot }}


        </div>

        {{-- Noticações do Back-end --}}
        @foreach (\App\View\Components\Toast::getTypes() as $type)
            @if (session()->has($type))
                <x-toast type="{{ $type }}" message="{{ session($type) }}" />
            @endif
        @endforeach
    </main>

    <script src="{{ asset('js/frontend.js')}}"></script>
    <script src="{{ asset('js/jquery-360.js') }}"></script>

    {{ $script ?? '' }}

    <script defer src="{{ asset('fontawesome/js/fontawesome.min.js') }}"></script>
    <script defer src="{{ asset('fontawesome/js/solid.min.js') }}"></script>
    <script defer src="{{ asset('fontawesome/js/brands.min.js') }}"></script>
</body>
</html>

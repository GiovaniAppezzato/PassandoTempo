<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="PassandoTempo">
    <meta name="description" content="Além de ficar sabendo sobre tudo o que está por vir, converse e compartilhe sobre suas experiências de filmes, séries, jogos e muito mais.">
    <meta name="keywords" content="Blog, Filmes, Jogos, PassandoTempo, Experiências, Compartilhe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $titulo }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('imagens/icons/i-awesome/all.min.css') }}">
    {{ $extrasCSS ?? '' }}
</head>
<body>

    @include('layouts.header')

    <main class="pt-[60px] min-h-[100vh] relative">
        <x-sidebar sidebarLoaded="{{ $sidebarLoaded }}" sidebarActive="{{ $sidebarActive }}" />

        <div class="min-h-[calc(100vh-60px)] lg:ml-[16rem] xl:ml-[18rem] {{ $sidebarLoaded == 'collapse' ? 'content-page--expand' : '' }}" id="contentPage">

            {{-- Conteúdo da página aqui --}}
            {{ $slot }}

        </div>

        {{-- Resposta do back-end --}}
        @foreach (\App\View\Components\Toast::getTypes() as $type)
            @if (session()->has($type))
                <x-toast type="{{ $type }}" message="{{ session($type) }}" />
            @endif
        @endforeach
    </main>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-360.js') }}"></script>
    <script type="module" src="{{ asset('js/frontend.js')}}" charset="utf-8"></script>
    {{ $extrasScripts ?? '' }}
</body>
</html>

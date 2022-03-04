{{--
    Layout headeer:

    Dark: bg-gradient-to-b from-[#292626] to-[#211F1F], dropdown: bg-zinc-800, hover: #312f2f
    Azul escuro: bg-gradient-to-b from-[#373b54] to-[#272a3a], hover: #484d6c

 --}}
<header class="fixed top-0 z-20 flex items-center justify-between w-full h-16 shadow drop-shadow
               bg-gradient-to-b from-[#292626] to-[#211F1F] xl:bg-none xl:bg-gray-100 xl:w-[calc(100%-18rem)] xl:h-[70px]">

    <div class="flex items-center h-full xl:hidden">

        <label class="mx-4" for="checkboxMenu">
            <input class="hidden" type="checkbox" id="checkboxMenu">
            <svg class="stroke-white cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
            <line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </label>
    </div>

    <div class="grow h-full flex justify-end items-center pr-4
                                 lg:justify-between xl:px-6">

        <div class="hidden lg:block lg:w-[400px] xl:w-[500px]">
            <x-search method="GET" name="search" placeholder="Busque uma publicação" />
        </div>

        <div class="flex items-center gap-x-2">
            @guest
                <a class="button hidden sm:block" href="{{ route('register') }}">Criar conta</a>
                <a class="button" href="{{ route('login') }}">Fazer login <i class="ml-2 fa-solid fa-arrow-right-to-bracket"></i></a>
            @else
                <div class="relative">
                    <div class="flex items-center gap-2 text-white xl:text-gray-600 cursor-pointer"
                         data-toggle="dropdown" data-dropdown="animate" data-dropdown-sensible>

                        <span class="hidden lg:inline-block font-medium select-none">
                            {{ Auth::user()->name }}
                        </span>

                        @if(Auth::user()->perfil->imagem_perfil !== null)
                            <img class="w-8 h-8 object-cover rounded-full shadow-lg cursor-pointer select-none" src="{{ asset('storage/perfil/' . Auth::user()->perfil->imagem_perfil) }}" alt="Imagem">
                        @else
                            <div class="flex justify-center items-center w-8 h-8 bg-white rounded-full shadow-lg xl:bg-gray-200">
                                <i class="text-xs text-gray-800 fas fa-user"></i>
                            </div>
                        @endif

                        <svg xmlns="http://www.w3.org/2000/svg" id="down-user" width="16" height="16" stroke="currentColor" fill="currentColor" class="ionicon" viewBox="0 0 512 512"><title>Caret Down</title><path
                        d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"/></svg>
                    </div>

                    <div class="absolute right-0 top-[calc(100%+1.6rem)] p-2 bg-zinc-800 w-max translate-x-[20px]
                                text-white rounded shadow-md select-none hidden opacity-0">

                        <a class="flex items-center justify-end px-6 py-2 font-medium
                                  rounded cursor-pointer hover:bg-[#312f2f] active:bg-[#2d2a2a]" href="{{ route('perfil.show', Auth::user()->name) }}">
                            Seu perfil
                            <i class="ml-2 fa-solid fa-user"></i>
                        </a>

                        <div class="flex items-center justify-end px-4 py-2 font-medium
                                    rounded cursor-pointer hover:bg-[#312f2f] cursor-not-allowed">
                            Configurações
                            <i class="ml-2 fa-solid fa-gear"></i>
                        </div>
                        <div class="flex items-center justify-end px-4 py-2 font-medium
                                    rounded cursor-pointer hover:bg-[#312f2f] active:bg-[#2d2a2a]" data-target="logout">
                            Sair da conta
                            <i class="ml-2 fa-solid fa-right-from-bracket"></i>
                        </div>
                    </div>
                </div>
            @endguest
        </div>
    </div>
</header>

{{--
    Modal logout:
 --}}
@auth
<x-modal modal="logout" type="danger" position="top">
    <p>
        Você está quase saindo da sua conta, tem certeza disso?
    </p>

    <x-slot name="actions">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="button button-danger" type="button">
                Tenho Certeza
            </button>
        </form>
    </x-slot>
</x-modal>
@endauth

<header class="fixed w-full max-h-[60px] shadow-md z-30 flex justify-between items-center p-4 bg-gradient-to-b from-[#292626] to-dark lg:px-6">
    <div class="font-bold text-lg text-white select-none lg:pr-4">
        <a href="{{ route('index') }}">{{ env('APP_NAME') }}</a>
    </div>

    <label class="lg:hidden cursor-pointer" for="checkbox-menu">
        <input class="hidden" type="checkbox" id="checkbox-menu">
        <svg class="stroke-white" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
    </label>

    <nav class="fixed z-30 top-0 right-[-100%] w-[calc(100%-4rem)] h-full bg-zinc-800 drop-shadow-lg shadow sm:w-96 lg:initial lg:w-full lg:grow lg:bg-transparent lg:shadow-none select-none" id="menu">
        <div class="w-full h-[60px] p-4 flex justify-between items-center lg:hidden">
            <span class="text-white">Menu</span>

            <label for="checkbox-menu">
                <svg class="stroke-white cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </label>
        </div>

        <div class="h-[3px] mx-4 mb-1 bg-white rounded-md lg:hidden"></div>

        <div class="h-[calc(100%-60px)] pb-4 overflow-y-auto lg:flex lg:justify-between lg:items-center lg:pb-0 lg:overflow-y-visible">
            <ul class="text-center capitalize mx-4 mt-2 lg:mt-0 lg:mx-0 lg:flex lg:items-center lg:gap-2">
                @auth
                    {{-- imagem perfil MOBILE --}}
                    <li class="lg:hidden mt-4 mb-8">
                        @if(Auth::user()->perfil->imagem_perfil !== null)
                                <div class="w-24 h-24 bg-cover bg-center mx-auto rounded-full shadow-lg md:w-28 md:h-28 lg:hidden" style="background: url({{ asset('storage/perfil/' . Auth::user()->perfil->imagem_perfil) }}) center/cover no-repeat;"></div>
                        @else
                            <div class="w-24 h-24 mx-auto bg-gray-100 rounded-full flex justify-center items-center shadow-lg md:w-28 md:h-28 lg:hidden">
                                <i class="text-2xl text-zinc-800 fas fa-user"></i>
                            </div>
                        @endif
                        <h1 class="text-center text-white font-medium truncate mt-2 lg:hidden">
                            <a href="{{ route('perfil.show', Auth::user()->name) }}">{{ Auth::user()->name }}</a>
                        </h1>
                    </li>
                @endauth

                <li class="mb-2 lg:mb-0 lg:hidden">
                    <a class="block w-full py-2 text-white rounded hover:bg-zinc-900 hover:bg-opacity-30 lg:m-0 lg:p-0 lg:hover:bg-transparent lg:text-gray-300 lg:hover:text-white lg:focus:outline-none lg:focus:text-white" href="{{ route('index') }}">Biblioteca</a>
                </li>
                <li class="mb-2 lg:mb-0 lg:hidden">
                    <div class="block w-full py-2 text-white rounded cursor-pointer hover:bg-zinc-900 hover:bg-opacity-30 lg:m-0 lg:p-0 lg:hover:bg-transparent lg:text-gray-300 lg:hover:text-white lg:focus:outline-none lg:focus:text-white" href="#" data-sidebar="link-collapse">
                        Usuário
                    </div>
                    <ul class="hidden mx-2 mt-1 text-sm" data-sidebar="sublinks">
                        @auth
                            <a class="block text-sm text-gray-200 py-2 rounded" href="{{ route('perfil.show', Auth::user()->name) }}">Meu perfil</a>
                            <a class="block text-sm text-gray-200 py-2 rounded" href="{{ route('postagem.create') }}">Adicionar postagem</a>
                        @else
                            <div class="block text-gray-200 py-2">Nenhuma conta autenticada</dov>
                        @endauth
                    </ul>
                </li>
                <li class="mb-2 lg:mb-0 lg:hidden">
                    <a class="block w-full py-2  text-white rounded hover:bg-zinc-900 hover:bg-opacity-30 lg:m-0 lg:p-0 lg:hover:bg-transparent lg:text-gray-300 lg:hover:text-white lg:focus:outline-none lg:focus:text-white" href="#">
                        Aleatório
                    </a>
                </li>
                {{-- <li class="mb-2 lg:mb-0 lg:hidden">
                    <a class="block w-full py-2  text-white rounded hover:bg-zinc-900 hover:bg-opacity-30 lg:m-0 lg:p-0 lg:hover:bg-transparent lg:text-gray-300 lg:hover:text-white lg:focus:outline-none lg:focus:text-white" href="#">
                        Notificações
                    </a>
                </li> --}}
                {{-- <li class="mb-2 lg:mb-0 lg:hidden">
                    <a class="block w-full py-2 text-white rounded hover:bg-zinc-900 hover:bg-opacity-30 lg:m-0 lg:p-0 lg:hover:bg-transparent lg:text-gray-300 lg:hover:text-white lg:focus:outline-none lg:focus:text-white" href="#">
                        Configurações
                    </a>
                </li> --}}
            </ul>

            <ul class="text-center mx-4 lg:mx-0 lg:flex lg:items-center lg:gap-2">
            @guest
                <li class="mb-2 lg:mb-0">
                    <a class="block py-2 font-medium text-white bg-indigo-500 rounded hover:bg-indigo-600 lg:m-0 lg:px-5 lg:py-1 lg:font-semibold lg:bg-indigo-600 lg:hover:bg-indigo-700 lg:rounded-full lg:shadow-inner lg:transition lg:duration-200 lg:ease-out lg:focus:ring-3 lg:ring-indigo-500 lg:focus:outline-none" href="{{ route('login') }}">
                        Fazer Login
                    </a>
                </li>
                <li class="mb-2 lg:mb-0">
                    <a class="block py-2 font-medium text-white bg-indigo-500 rounded hover:bg-indigo-600 lg:m-0 lg:px-5 lg:py-1 lg:font-semibold lg:bg-indigo-600 lg:hover:bg-indigo-700 lg:rounded-full lg:shadow-inner lg:transition lg:duration-200 lg:ease-out lg:focus:ring-3 lg:ring-indigo-500 lg:focus:outline-none" href="{{ route('register') }}">
                        Criar conta
                    </a>
                </li>
            @endguest
            @auth
                <li class="mb-2 lg:mb-0">
                    <button class="block w-full py-2 font-medium text-white bg-red-500 rounded lg:m-0 lg:p-0 lg:bg-transparent lg:text-gray-300 lg:hover:text-white lg:focus:text-red-500 focus:outline-none box-border" data-target="logout">Desconectar</button>
                </li>

                {{-- imagem perfil DESKTOP --}}
                <li class="hidden lg:flex justify-center items-center gap-2 ml-1">
                    <a class="text-white lg:font-semibold" href="{{ route('perfil.show', Auth::user()->name) }}">{{ Auth::user()->name }}</a>

                    @if(Auth::user()->perfil->imagem_perfil !== null)
                        <img class="w-10 h-10 object-cover rounded-full shadow-lg shadow-inner cursor-pointer" src="{{ asset('storage/perfil/' . Auth::user()->perfil->imagem_perfil) }}" alt="Imagem">
                    @else
                        <div class="w-10 h-10 bg-white rounded-full shadow-lg shadow-inner flex justify-center items-center cursor-pointer">
                            <i class="text-dark fas fa-user"></i>
                        </div>
                    @endif
                </li>
            @endauth
                <li class="lg:hidden text-sm font-bold text-zinc-700">Feito com muito <i class="fas fa-mug-hot"></i></li>
            </ul>
        </div>
    </nav>
    <label for="checkbox-menu" class="fixed top-0 left-0 w-full h-full bg-stone-900 bg-opacity-50 z-20 lg:hidden invisible opacity-0 transition duration-300" id="bg-menu-mobile"></label>

    @auth
        <x-modal modal="logout" type="danger" position="top">
            <p class="text-gray-700">Você está quase desconectando da sua conta, tem certeza disso?</p>

            <x-slot name="actions">
                <form class="" action="{{ route('logout') }}" method="POST"> @csrf
                    <button type="submit" class="button button-danger" type="button">Tenho Certeza</button>
                </form>
            </x-slot>
        </x-modal>
    @endauth
</header>

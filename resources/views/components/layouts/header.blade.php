{{-- Layout header

    Dark: bg-gradient-to-b from-[#292626] to-[#211F1F], dropdown: bg-zinc-800, hover: #312f2f
    Azul: bg-[#3d5d7e] xl:bg-gradient-to-b from-[#4f78a4] to-[#486d94], hover: #3d5d7d
    Azul escuro: bg-gradient-to-b from-[#373b54] to-[#272a3a], hover: #484d6c --}}

<header class="w-full bg-white bg-[#3d5d7e] bg-gradient-to-b from-[#292626] to-[#211F1F] shadow drop-shadow">
    <div class="container h-16 flex items-center">

        <div class="flex items-center h-full">
            <label class="lg:hidden mx-4" for="checkboxMenu">
                <svg xmlns="http://www.w3.org/2000/svg"
                     width="26" height="26" viewBox="0 0 24 24" fill="none"
                     stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="cursor-pointer feather feather-menu">

                     <line x1="3" y1="12" x2="21" y2="12"></line>
                     <line x1="3" y1="6" x2="21" y2="6"></line>
                     <line x1="3" y1="18" x2="21" y2="18"></line>
                 </svg>

                 <input class="hidden" type="checkbox" id="checkboxMenu">
            </label>

            <a class="hidden mx-4 text-white select-none lg:block" href="{{ route('index') }}">
                <img class="h-8" src="{{ asset('assets/imagens/Logo_completa_white.svg') }}" alt="Logo">
            </a>
        </div>

        <div class="grow flex justify-end items-center h-full pr-4 lg:justify-between xl:pr-6">

            <!-- *** MENU DESKTOP *** -->
            <nav class="hidden items-center space-x-1 lg:flex">
                <div>
                    <a class="flex items-center p-2 text-gray-100 text-sm transition duration-200 ease-out focus:outline-none
                                cursor-pointer rounded hover:bg-[#312f2f]" href="">
                        Biblioteca
                    </a>
                </div>

                <div class="relative">
                    <button class="flex items-center gap-0.5 p-2 text-gray-100 text-sm transition duration-200 ease-out focus:outline-none
                                   cursor-pointer rounded hover:bg-[#312f2f]" data-toggle="dropdown" data-dropdown="animate" data-dropdown-sensible>
                        Categorias

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="ionicon" id="down-user"
                             width="16" height="16"
                             stroke="currentColor" fill="currentColor"  viewBox="0 0 512 512">

                             <path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"/>
                         </svg>
                    </button>

                    <div class="hidden absolute left-0 top-14 w-96 h-max p-2
                                scale-110 transition duration-200 text-white shadow-md rounded select-none bg-zinc-800">

                        <div class="flex flex-wrap">
                            <a class="w-1/2 flex items-center gap-2 px-3 py-2 rounded
                                      hover:bg-[#312f2f] text-sm" href="#">

                                <div class="w-6 h-6 flex-centered text-sm rounded bg-gray-400">
                                    <i class="fa-solid fa-newspaper"></i>
                                </div>

                                <span>Notícias</span>
                            </a>

                            <a class="w-1/2 flex items-center gap-2 px-3 py-2 rounded
                                      hover:bg-[#312f2f] text-sm" href="#">

                                <div class="w-6 h-6 flex-centered text-sm rounded bg-indigo-400">
                                    <i class="fa-solid fa-gamepad"></i>
                                </div>

                                <span>Jogos</span>
                            </a>

                            <a class="w-1/2 flex items-center gap-2 px-3 py-2 rounded
                                      hover:bg-[#312f2f] text-sm" href="#">

                                <div class="w-6 h-6 flex-centered text-sm rounded bg-red-400">
                                    <i class="fa-solid fa-film"></i>
                                </div>

                                <span>Filmes</span>
                            </a>

                            <a class="w-1/2 flex items-center gap-2 px-3 py-2 rounded
                                      hover:bg-[#312f2f] text-sm" href="#">

                                <div class="w-6 h-6 flex-centered text-sm rounded bg-orange-400">
                                    <i class="fa-solid fa-dragon"></i>
                                </div>

                                <span>Animes</span>
                            </a>

                            <a class="w-1/2 flex items-center gap-2 px-3 py-2 rounded
                                      hover:bg-[#312f2f] text-sm" href="#">

                                <div class="w-6 h-6 flex-centered text-sm rounded bg-zinc-700">
                                    <i class="fa-solid fa-code"></i>
                                </div>

                                <span>Programação</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <a class="flex items-center p-2 text-gray-100 text-sm transition duration-200 ease-out focus:outline-none
                              cursor-pointer rounded hover:bg-[#312f2f]" href="">
                        Sobre o blog
                    </a>
                </div>

                <!-- *** MORE-ITENS COLLAPSE *** -->
                <div class="relative xl:hidden">
                    <button class="flex items-center p-2 text-gray-100 text-sm transition duration-200 ease-out focus:outline-none
                                   cursor-pointer rounded hover:bg-[#312f2f]" data-toggle="dropdown" data-dropdown="animate" data-dropdown-sensible>

                        <i class="text-lg fa-solid fa-ellipsis"></i>
                    </button>

                    <div class="hidden absolute left-0 top-14 w-64 p-2 scale-110 transition duration-200
                                text-white shadow-md rounded select-none bg-zinc-800">

                        <a class="flex items-center p-2 font-medium text-sm
                                  rounded cursor-pointer hover:bg-[#312f2f] active:bg-[#2d2a2a]" href="#">
                            Aleatório
                        </a>
                    </div>
                </div>

                <!-- *** FULL ITENS *** -->
                <div class="hidden items-center space-x-1 xl:flex">

                    <div>
                        <a class="flex items-center p-2 text-gray-100 text-sm transition duration-200 ease-out focus:outline-none
                                  cursor-pointer rounded hover:bg-[#312f2f]" href="">
                            Aleatório
                        </a>
                    </div>
                </div>
            </nav>

            <!-- *** ITEMS AUTH *** -->
            <div class="flex flex-row-reverse flex-row-reverse items-center gap-x-2">
                @guest
                    <a class="button hidden sm:block" href="{{ route('register') }}">Criar conta</a>
                    <a class="button" href="{{ route('login') }}">Fazer login <i class="ml-2 fa-solid fa-arrow-right-to-bracket"></i></a>
                @else
                    <div class="relative">
                        <div class="flex items-center gap-2 text-white cursor-pointer"
                             data-toggle="dropdown" data-dropdown-sensible>

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

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="ionicon" id="down-user"
                                 width="16" height="16"
                                 stroke="currentColor" fill="currentColor"  viewBox="0 0 512 512">

                                 <path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"/>
                             </svg>
                        </div>

                        <div class="hidden absolute right-0 top-[calc(100%+1.6rem)] w-max h-max p-2
                                    text-white rounded shadow-md select-none bg-zinc-800">

                            <a class="flex items-center justify-end px-4 py-2 font-medium
                                      rounded cursor-pointer hover:bg-[#312f2f] active:bg-[#2d2a2a]" href="{{ route('perfil.show', Auth::user()->name) }}">
                                Seu perfil
                                <i class="ml-2 fa-solid fa-user"></i>
                            </a>

                            <div class="flex items-center justify-end px-4 py-2 font-medium
                                        rounded cursor-pointer hover:bg-[#312f2f] active:bg-[#2d2a2a]" data-target="logout">
                                Sair da conta
                                <i class="ml-2 fa-solid fa-right-from-bracket"></i>
                            </div>
                        </div>
                    </div>

                    <div class="sm:relative">
                        <button class="text-gray-100 text-xl cursor-pointer px-2 py-1 rounded-md focus:outline-none
                                       hover:bg-[#312f2f]" data-toggle="dropdown" data-dropdown-sensible>

                            <i class="fa-solid fa-bell"></i>
                        </button>

                        <div class="hidden absolute right-[50%] translate-x-[50%] top-20 w-[calc(100%-1rem)] h-max px-2 py-4
                                    text-white rounded shadow-md select-none bg-zinc-800
                                    sm:w-96 sm:right-[-3.5rem] sm:translate-x-0 sm:top-[calc(100%+1.6rem)]">

                            <div class="flex justify-between items-center text-sm px-2 mb-4">
                                Notificações

                                <button class="button button-danger p-2" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         width="18" height="18"
                                         stroke="currentColor" fill="currentColor"
                                         class="ionicon" id="" viewBox="0 0 512 512">

                                         <title>Limpar tudo</title>

                                         <path d="M296 64h-80a7.91 7.91 0 00-8 8v24h96V72a7.91 7.91 0 00-8-8z" fill="none"/>
                                         <path d="M292 64h-72a4 4 0 00-4 4v28h80V68a4 4 0 00-4-4z" fill="none"/>
                                         <path d="M447.55 96H336V48a16 16 0 00-16-16H192a16 16 0 00-16 16v48H64.45L64 136h33l20.09 314A32 32 0 00149 480h214a32 32 0 0031.93-29.95L415 136h33zM176 416l-9-256h33l9 256zm96 0h-32V160h32zm24-320h-80V68a4 4 0 014-4h72a4 4 0 014 4zm40 320h-33l9-256h33z"/>
                                     </svg>
                                </button>
                            </div>

                            <div class="overflow-y-auto max-h-56">
                                @for ($i=1; $i <= 4; $i++)
                                    <div class="flex flex-wrap w-full h-max p-2 mb-2 rounded cursor-pointer
                                                hover:bg-[#312f2f] active:bg-[#2d2a2a]">

                                        <div class="flex justify-center items-center w-6 h-6 bg-white rounded-full shadow">
                                            <i class="text-[8px] text-dark fas fa-user"></i>
                                        </div>

                                        <div class="w-[calc(100%-1.5rem)] pl-2 text-white text-xs">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <button class="hidden text-gray-100 cursor-pointer px-2 py-1 rounded-md focus:outline-none
                                   hover:bg-[#312f2f] lg:block" id="">

                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                @endif
            </div>
        </div>
    </div>
</header>


@auth
    <!-- *** MODAL LOGOUT *** -->
    <x-modal modal="logout" type="danger" position="top">
        <p>
            Você está quase saindo da sua conta, tem certeza disso?
        </p>

        <x-slot name="actions">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="button button-ring button-danger" type="button">
                    Tenho Certeza
                </button>
            </form>
        </x-slot>
    </x-modal>
@endauth

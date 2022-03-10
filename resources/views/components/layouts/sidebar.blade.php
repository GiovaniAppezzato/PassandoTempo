{{-- Layouts sidebar

    Dark: bg-gradient-to-b from-[#292626] to-[#211F1F], dropdown: bg-zinc-800, hover: #312f2f
    Azul: bg-[#3d5d7e] xl:bg-gradient-to-b from-[#4f78a4] to-[#486d94], hover: #3d5d7d
    Azul escuro: bg-gradient-to-b from-[#373b54] to-[#272a3a], hover: #484d6c --}}

<nav {{ $attributes->merge(['class' => "fixed left-[-100%] top-0 z-30 w-[calc(100%-4rem)] h-full shadow-md sm:w-96 xl:w-72"]) }}
     id="menu" {{ $itemActive !== '' ? "item-active={$itemActive}" : '' }}>

    <div class="relative w-full h-full z-30 bg-zinc-800">

        <div class="flex justify-between items-center p-4 h-16">

            <a href="{{ route('index') }}">
                <img class="h-8" src="{{ asset('assets/imagens/Logo_completa_white.svg') }}" alt="Logo">
            </a>

            <label class="xl:hidden" for="checkboxMenu">
                <svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">

                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </label>
        </div>

        <!-- Search mobile -->
        <div class="flex p-1 mb-6 mx-4 rounded bg-gray-100 lg:hidden">

            <input class="grow ml-1 p-1 font-medium bg-transparent
                          focus:outline-none" type="text" name="" placeholder="Pesquisar ..." autocomplete="off" spellcheck="false">

            <button class="px-2" type="button">
                <svg xmlns="http://www.w3.org/2000/svg"
                     width="24" height="24"
                     class="stroke-gray-600 ionicon" viewBox="0 0 512 512">

                     <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke-miterlimit="10" stroke-width="32"/>
                     <path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/>
                 </svg>
            </button>
        </div>

        <div class="flex flex-col space-y-8 overflow-y-auto h-[calc(100%-8.5rem)] mb-4 px-4 lg:h-[calc(100%-5rem)]">
            <!-- Main -->
            <div class="w-full">
                <div class="text-sm text-gray-100 font-semibold pl-2 mb-2">
                    Principal
                </div>

                <div>
                    <div class="mb-2">
                        <a class="flex items-center gap-4 p-2 text-white rounded cursor-pointer
                                  transition duration-200 ease-out hover:bg-[#312f2f] bg-[#312f2f]" id="biblioteca" href="{{ route('index') }}">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24"
                                class="ionicon" fill="currentColor" viewBox="0 0 512 512">

                                <title>Biblioteca</title>

                                <path d="M261.56 101.28a8 8 0 00-11.06 0L66.4 277.15a8 8 0 00-2.47 5.79L63.9 448a32 32 0 0032 32H192a16 16 0 0016-16V328a8 8 0 018-8h80a8 8 0 018 8v136a16 16 0 0016 16h96.06a32 32 0 0032-32V282.94a8 8 0 00-2.47-5.79z"/><path d="M490.91 244.15l-74.8-71.56V64a16 16 0 00-16-16h-48a16 16 0 00-16 16v32l-57.92-55.38C272.77 35.14 264.71 32 256 32c-8.68 0-16.72 3.14-22.14 8.63l-212.7 203.5c-6.22 6-7 15.87-1.34 22.37A16 16 0 0043 267.56L250.5 69.28a8 8 0 0111.06 0l207.52 198.28a16 16 0 0022.59-.44c6.14-6.36 5.63-16.86-.76-22.97z"/>
                            </svg>

                            <span class="text-sm font-medium border-b-2 border-indigo-500">
                                Biblioteca
                            </span>
                        </a>
                    </div>

                    <div class="mb-2">
                        <div class="flex items-center gap-4 p-2 text-white rounded cursor-pointer
                                    transition duration-200 ease-out hover:bg-[#312f2f]" id="categorias" data-toggle="dropdown" data-dropdown="animate">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24" height="24" viewBox="0 0 512 512"
                                 stroke="currentColor" fill="currentColor"
                                 class="ionicon" viewBox="0 0 512 512">

                                 <title>Categorias</title>

                                 <rect x="48" y="48" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                 <rect x="288" y="48" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                 <rect x="48" y="288" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                 <rect x="288" y="288" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                             </svg>

                            <span class="text-sm font-medium">
                                Categorias
                                <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </span>
                        </div>

                        <div class="mx-2 my-1 text-sm font-medium text-white hidden opacity-0 translate-x-[-1.25rem]">
                            <a class="flex items-center gap-2 px-3 py-2 rounded hover:bg-[#312f2f]" href="">
                                <div class="w-5 h-5 flex-centered text-[10px] rounded bg-gray-400">
                                    <i class="fa-solid fa-newspaper"></i>
                                </div>

                                <span>Notícias</span>
                            </a>
                            <a class="flex items-center gap-2 px-3 py-2 rounded hover:bg-[#312f2f]" href="">
                                <div class="w-5 h-5 flex-centered text-[10px] rounded bg-indigo-400">
                                    <i class="fa-solid fa-gamepad"></i>
                                </div>

                                <span>Jogos</span>
                            </a>
                            <a class="flex items-center gap-2 px-3 py-2 rounded hover:bg-[#312f2f]" href="">
                                <div class="w-5 h-5 flex-centered text-[10px] rounded bg-red-400">
                                    <i class="fa-solid fa-film"></i>
                                </div>

                                <span>Filmes</span>
                            </a>
                            <a class="flex items-center gap-2 px-3 py-2 rounded hover:bg-[#312f2f]" href="">
                                <div class="w-5 h-5 flex-centered text-[10px] rounded bg-orange-400">
                                    <i class="fa-solid fa-dragon"></i>
                                </div>

                                <span>Animes</span>
                            </a>
                            <a class="flex items-center gap-2 px-3 py-2 rounded hover:bg-[#312f2f]" href="">
                                <div class="w-5 h-5 flex-centered text-[10px] rounded bg-zinc-700">
                                    <i class="fa-solid fa-code"></i>
                                </div>

                                <span>Programação</span>
                            </a>
                        </div>
                    </div>

                    <div class="mb-2">
                        <div class="flex items-center gap-4 p-2 text-white rounded cursor-pointer
                                    transition duration-200 ease-out hover:bg-[#312f2f]" id="usuario" data-toggle="dropdown" data-dropdown="animate">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 512 512"
                                stroke="currentColor" fill="currentColor"
                                class="ionicon">

                                <title>{{ Auth::user() ? Auth::user()->name : 'Usuário' }}</title>

                                <path d="M258.9 48C141.92 46.42 46.42 141.92 48 258.9c1.56 112.19 92.91 203.54 205.1 205.1 117 1.6 212.48-93.9 210.88-210.88C462.44 140.91 371.09 49.56 258.9 48zm126.42 327.25a4 4 0 01-6.14-.32 124.27 124.27 0 00-32.35-29.59C321.37 329 289.11 320 256 320s-65.37 9-90.83 25.34a124.24 124.24 0 00-32.35 29.58 4 4 0 01-6.14.32A175.32 175.32 0 0180 259c-1.63-97.31 78.22-178.76 175.57-179S432 158.81 432 256a175.32 175.32 0 01-46.68 119.25z"/><path d="M256 144c-19.72 0-37.55 7.39-50.22 20.82s-19 32-17.57 51.93C191.11 256 221.52 288 256 288s64.83-32 67.79-71.24c1.48-19.74-4.8-38.14-17.68-51.82C293.39 151.44 275.59 144 256 144z"/>
                            </svg>

                            <span class="text-sm font-medium">
                                Usuário
                                <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </span>
                        </div>

                        <div class="mx-2 my-1 text-sm font-medium text-white hidden opacity-0 translate-x-[-1.25rem]">
                            @auth
                                <a class="block px-3 py-2 rounded hover:bg-[#312f2f]" href="{{ route('perfil.show', Auth::user()->name) }}">
                                    Meu perfil
                                </a>
                                <a class="block px-3 py-2 rounded hover:bg-[#312f2f] cursor-not-allowed" href="">
                                    Publicar -
                                    <span class="text-red-400">Não concluido</span>
                                </a>

                                <p class="block px-3 py-2 rounded hover:bg-[#312f2f] cursor-not-allowed">
                                    Estatística -
                                    <span class="text-red-400">Não concluido</span>
                                </p>
                            @else
                                <div class="block px-3 py-1">Nenhuma conta autenticada</div>
                            @endauth
                        </div>
                    </div>

                    <div class="mb-2">
                        <a class="flex items-center gap-4 p-2 text-white rounded cursor-pointer
                                  transition duration-200 ease-out hover:bg-[#312f2f]" id="aleatorio">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24" height="24"
                                 stroke="currentColor" fill="currentColor"
                                 class="ionicon" viewBox="0 0 512 512">

                                <title>Aleatório</title>

                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/>
                                <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                            </svg>

                            <span class="text-sm font-medium">
                                Aleatório
                            </span>
                        </a>
                    </div>

                    <div class="mb-2">
                        <a class="flex items-center gap-4 p-2 text-white rounded cursor-pointer
                                  transition duration-200 ease-out hover:bg-[#312f2f]" id="">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24" height="24"
                                 stroke="currentColor" fill="currentColor"
                                 class="ionicon" viewBox="0 0 512 512">

                                 <title>Quem somos?</title>

                                 <path d="M256 64C150 64 64 150 64 256s86 192 192 192 192-86 192-192S362 64 256 64zm-6 304a20 20 0 1120-20 20 20 0 01-20 20zm33.44-102C267.23 276.88 265 286.85 265 296a14 14 0 01-28 0c0-21.91 10.08-39.33 30.82-53.26C287.1 229.8 298 221.6 298 203.57c0-12.26-7-21.57-21.49-28.46-3.41-1.62-11-3.2-20.34-3.09-11.72.15-20.82 2.95-27.83 8.59C215.12 191.25 214 202.83 214 203a14 14 0 11-28-1.35c.11-2.43 1.8-24.32 24.77-42.8 11.91-9.58 27.06-14.56 45-14.78 12.7-.15 24.63 2 32.72 5.82C312.7 161.34 326 180.43 326 203.57c0 33.83-22.61 49.02-42.56 62.43z"/>
                             </svg>

                            <span class="text-sm font-medium">
                                Mais sobre
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Follows -->
            <div class="w-full">
                <div class="text-sm text-gray-100 font-semibold pl-2 mb-2">
                    Acompanhando
                </div>

                <div>
                    <div class="mb-1">
                        <a class="flex items-center gap-4 p-2 text-white rounded
                                  transition duration-200 ease-out hover:bg-[#312f2f]" href="">

                            <div class="flex justify-center items-center w-6 h-6 bg-white rounded-full shadow">
                                <i class="text-[8px] text-gray-800 fas fa-user"></i>
                            </div>

                            <span class="text-sm">PassandoTempo</span>
                        </a>
                    </div>

                    <div class="mb-1">
                        <a class="flex items-center gap-4 p-2 text-white rounded
                                  transition duration-200 ease-out hover:bg-[#312f2f]" href="">

                            <div class="flex justify-center items-center w-6 h-6 bg-white rounded-full shadow">
                                <i class="text-[8px] text-gray-800 fas fa-user"></i>
                            </div>

                            <span class="text-sm"> GiovaniAppezzato</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <label class="invisible opacity-0 fixed top-0 left-0 z-20 w-full h-full bg-stone-900 bg-opacity-60 transition duration-300 xl:hidden"
           for="checkboxMenu" id="backgroundMenu">
        <!-- *** OVERLAY MENU *** -->
    </label>
</nav>

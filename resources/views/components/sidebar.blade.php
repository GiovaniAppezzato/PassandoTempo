<div class="hidden lg:block fixed left-0 w-64 xl:w-72 h-[calc(100%-60px)] bg-gray-100 drop-shadow-md z-20 {{ $sidebarLoaded == 'collapse' ? 'sidebar--collapse' : '' }}" id="sidebar"
     sidebar-loaded={{ $sidebarLoaded }} {{ $sidebarActive !== '' ? "sidebar-active={$sidebarActive}" : '' }}>

    <nav class="h-full overflow-hidden px-4 pt-4">
        <div class="flex mb-4">
            <label class="p-2 rounded hover:bg-gray-200 active:bg-gray-300">
                <input class="hidden" type="checkbox" id="checkbox-sidebar" {{ $sidebarLoaded == 'collapse' ? 'checked' : '' }}>
                <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </label>
        </div>

        <ul class="overflow-y-auto h-full">
            <li class="mb-2 select-none">
                <a class="grid grid-cols-[max-content_max-content] items-center gap-2 p-2 rounded cursor-pointer hover:bg-gray-200 active:bg-gray-300" id="biblioteca" href="{{ route('index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ionicon" viewBox="0 0 512 512"><title>Biblioteca</title><path d="M261.56 101.28a8 8 0 00-11.06 0L66.4 277.15a8 8 0 00-2.47 5.79L63.9 448a32 32 0 0032 32H192a16 16 0 0016-16V328a8 8 0 018-8h80a8 8 0 018 8v136a16 16 0 0016 16h96.06a32 32 0 0032-32V282.94a8 8 0 00-2.47-5.79z"/><path d="M490.91 244.15l-74.8-71.56V64a16 16 0 00-16-16h-48a16 16 0 00-16 16v32l-57.92-55.38C272.77 35.14 264.71 32 256 32c-8.68 0-16.72 3.14-22.14 8.63l-212.7 203.5c-6.22 6-7 15.87-1.34 22.37A16 16 0 0043 267.56L250.5 69.28a8 8 0 0111.06 0l207.52 198.28a16 16 0 0022.59-.44c6.14-6.36 5.63-16.86-.76-22.97z"/></svg>

                    <span class="text-sm font-semibold">Biblioteca</span>
                </a>
            </li>

            <li class="mb-2 select-none">
                <div class="grid grid-cols-[max-content_max-content] items-center gap-2 p-2 rounded cursor-pointer hover:bg-gray-200 active:bg-gray-300" id="usuario" data-sidebar="link-collapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ionicon" viewBox="0 0 512 512"><title>Usuário</title><path d="M258.9 48C141.92 46.42 46.42 141.92 48 258.9c1.56 112.19 92.91 203.54 205.1 205.1 117 1.6 212.48-93.9 210.88-210.88C462.44 140.91 371.09 49.56 258.9 48zm126.42 327.25a4 4 0 01-6.14-.32 124.27 124.27 0 00-32.35-29.59C321.37 329 289.11 320 256 320s-65.37 9-90.83 25.34a124.24 124.24 0 00-32.35 29.58 4 4 0 01-6.14.32A175.32 175.32 0 0180 259c-1.63-97.31 78.22-178.76 175.57-179S432 158.81 432 256a175.32 175.32 0 01-46.68 119.25z"/><path d="M256 144c-19.72 0-37.55 7.39-50.22 20.82s-19 32-17.57 51.93C191.11 256 221.52 288 256 288s64.83-32 67.79-71.24c1.48-19.74-4.8-38.14-17.68-51.82C293.39 151.44 275.59 144 256 144z"/></svg>

                    <span class="text-sm font-semibold flex justify-center items-center gap-1"> Usuário <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg> </span>
                </div>
                <ul class="hidden mx-2 mt-2 text-sm" data-sidebar="sublinks">
                    @auth
                        <a class="block px-3 font-medium py-2 hover:bg-gray-200 rounded" href="{{ route('perfil.show', Auth::user()->name) }}">Meu perfil</a>
                        <a class="block px-3 font-medium py-2 hover:bg-gray-200 rounded" href="#">Adicionar publicação</a>
                    @else
                        <div class="block px-3 font-medium py-2">Nenhuma conta autenticada</dov>
                    @endauth
                </ul>
            </li>

            <li class="mb-2 select-none" href="#">
                <a class="grid grid-cols-[max-content_max-content] items-center gap-2 p-2 rounded cursor-pointer hover:bg-gray-200 active:bg-gray-300" id="configuracoes">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><title>Configurações</title><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>

                    <span class="text-sm font-semibold">Configurações</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

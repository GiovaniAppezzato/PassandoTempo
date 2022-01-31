<x-app titulo="{{ env('APP_NAME') }}"
       sidebarLoaded="expand" sidebarActive="#biblioteca">

    {{-- Slider --}}
    <div class="w-full h-max px-3 py-6">
        <div class="w-full max-w-2xl mx-auto relative select-none sm:w-[70%] md:w-[65%] lg:w-[75%]" data-resize="16:9">
            <div class="overflow-hidden w-full h-full">
                <div class="flex w-[200%] h-full transition duration-700 ease-in-out" id="sliderHome" data-slider="2">
                    <div class="w-full bg-cover" style="background-image: url({{ asset('imagens/imagemBanner01.svg') }})"></div>
                    <div class="w-full"></div>
                </div>
            </div>

            <button data-next="sliderHome" class="absolute translate-y-[-50%] top-1/2 right-0 sm:right-[-3rem]" type="button">
                <svg class="stroke-indigo-500 hover:scale-125 transition duration-200" width="34" height="34" xmlns="http://www.w3.org/2000/svg"  class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/></svg>
            </button>
            <button data-previous="sliderHome" class="absolute translate-y-[-50%] top-1/2 left-0 sm:left-[-3rem]" type="button">
                <svg class="stroke-indigo-500 hover:scale-125 transition duration-200" width="34" height="34" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M328 112L184 256l144 144"/></svg>
            </button>
        </div>
    </div>

    <div class="px-4 lg:px-6 my-2 lg:my-6">

        {{-- Pesquisa --}}
        <form class="search max-w-xl mx-auto mb-4" action="" method="GET">
            <div class="search-icon">
                <svg class="stroke-gray-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ionicon" viewBox="0 0 512 512"><title>Pesquisar no site</title><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
            </div>

            <input class="search-input" type="text" name="sq" placeholder="Pesquisar" autocomplete="off">
            <button class="button rounded-full" type="submit">Buscar</button>
        </form>

        {{-- Conteúdos dos usuários --}}
        <div class="flex flex-wrap justify-between items-center mb-4 max-w-[100rem] mx-auto">
            <div class="w-full select-none mb-2 text-sm lg:text-base">
                <button class="inline-block px-2 py-1 text-gray-500 font-medium hover:text-dark text-dark border-b-2 border-indigo-500" type="button">Todos</button>
                <button class="inline-block px-2 py-1 text-gray-500 font-medium hover:text-dark" type="button">Jogos</button>
                <button class="inline-block px-2 py-1 text-gray-500 font-medium hover:text-dark" type="button">Filmes</button>
                <button class="inline-block px-2 py-1 text-gray-500 font-medium hover:text-dark" type="button">Notícias</button>
            </div>

            <article class="content-user">
                <div class="content-user__view" data-resize="16:9">
                    <div class="content-user__image" style="background-image: url({{ asset('storage/publicacao/imagem01.jpg') }})"></div>
                </div>
                <div class="content-user__body">
                    <p class="content-user__title">A segunda temporada de The Witcher já tem data?</p>
                    <p class="content-user__description">com a chegada da franquia ao cinema junto com o seu tremendo sucesso, muitos estão se perguntando</p>
                </div>
                <div class="content-user__footer">
                    <a class="button w-full px-6 sm:w-max sm:px-6" href="#">Ver</a>
                </div>
            </article>

            <article class="content-user">
                <div class="content-user__view" data-resize="16:9">
                    <div class="content-user__image" style="background-image: url({{ asset('storage/publicacao/imagem02.jpg') }})"></div>
                </div>
                <div class="content-user__body">
                    <p class="content-user__title">A segunda temporada de The Witcher já tem data?</p>
                    <p class="content-user__description">com a chegada da franquia ao cinema junto com o seu tremendo sucesso, muitos estão se perguntando</p>
                </div>
                <div class="content-user__footer">
                    <a class="button w-full sm:w-max sm:px-6" href="#">Ver</a>
                </div>
            </article>

            <article class="content-user">
                <div class="content-user__view" data-resize="16:9">
                    <div class="content-user__image" style="background-image: url({{ asset('storage/publicacao/imagem03.jpg') }})"></div>
                </div>
                <div class="content-user__body">
                    <p class="content-user__title">A segunda temporada de The Witcher já tem data?</p>
                    <p class="content-user__description">com a chegada da franquia ao cinema junto com o seu tremendo sucesso, muitos estão se perguntando</p>
                </div>
                <div class="content-user__footer">
                    <a class="button w-full sm:w-max sm:px-6" href="#">Ver</a>
                </div>
            </article>

            <article class="content-user">
                <div class="content-user__view" data-resize="16:9">
                    <div class="content-user__image" style="background-image: url({{ asset('storage/publicacao/imagem04.jpg') }})"></div>
                </div>
                <div class="content-user__body">
                    <p class="content-user__title">A segunda temporada de The Witcher já tem data?</p>
                    <p class="content-user__description">com a chegada da franquia ao cinema junto com o seu tremendo sucesso, muitos estão se perguntando</p>
                </div>
                <div class="content-user__footer">
                    <a class="button w-full sm:w-max sm:px-6" href="#">Ver</a>
                </div>
            </article>

            <div class="w-full">
                <div class="w-full h-1 bg-gray-100 rounded mb-1"></div>
                <button class="w-full p-2 text-center text-gray-400 font-medium rounded hover:bg-gray-100 hover:text-gray-600" type="button">Mostrar mais</button>
            </div>
        </div>
    </div>
</x-app>
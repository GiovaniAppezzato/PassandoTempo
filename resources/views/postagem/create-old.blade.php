<x-app titulo="Criando postagem - PassandoTempo"
       sidebarLoaded="expand" sidebarActive="#usuario">

    {{-- HTML aqui --}}
    <div class="flex flex-col flex-wrap">

        <div class="flex justify-between items-center bg-gray-100 p-2 px-4 w-100 h-16 lg:px-6">
            <x-progress-bar />

            <button class="button gap-1" type="button" data-target="info-create">
                <span class="hidden sm:block">Quero</span> ajuda <i class="fa-solid fa-triangle-exclamation"></i>
            </button>
        </div>

        <div class="flex-grow relative w-full">

            <div class="min-h-[calc((100vh-60px)-4rem)] p-4 lg:p-6" id="init">

                <button class="button button-outline" id="initButton" type="button">
                    Iniciar Postagem
                    <i class="ml-1 fa-solid fa-star"></i>
                </button>

            </div>

            {{-- CONFIGURAÇÕES INICIAIS --}}
            <div class="hidden min-h-[calc((100vh-60px)-8rem)] w-full p-4 lg:px-6" id="" data-wrapper="1">
                <div class="max-w-[1300px] w-full mx-auto">

                    <div class="mb-6 md:mb-8 xl:mb10">
                        <h2 class="mb-2 text-base lg:text-lg">
                            Para começar vamos iniciar <span class="text-blue-500">configurando</span> e ajustando alguns detalhes das publicação:
                        </h2>
                        <p class="font-normal text-justify text-[15px] lg:text-base">
                            Em nosso site aceitamos que titulos e descrições tenham um tamanho considerado grande,
                            porém fique ciente que em certos dispositivos ao exibir a lista de postagens podemos acabar cortado para uma melhor experiência
                            do usuário. Voçê pode ver mais infomações no botão
                            <span class="text-blue-500 underline cursor-pointer" data-target="info-create">quero ajuda.</span>
                        </p>
                    </div>

                    <div class="flex flex-row flex-wrap gap-y-8">
                        <div class="w-full md:pr-4 md:w-[60%] lg:pr-6 lg:w-[65%] xl:w-[70%]">

                            <div class="mb-2 md:mb-4">
                                <label class="text-[15px] text-gray-800 px-1 flex justify-between items-center" for="title">
                                    Coloque um titulo:

                                    <span class="text-xs font-semibold text-gray-500" id="titleCount">0 - Caracteres</span>
                                </label>
                                <textarea class="input input-ring resize-none overflow-hidden" id="title" data-textarea="resize"
                                          name="name" rows="1" maxlength="180" placeholder="Min 10 - Máx de 180" spellcheck = "false"></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="text-[15px] text-gray-800 px-1 flex justify-between items-center" for="description">
                                    Escreva uma descrição

                                    <span class="text-xs font-semibold text-gray-500" id="descriptionCount">0 - Caracteres</span>
                                </label>
                                <textarea class="input input-ring" id="description"
                                          name="name" rows="7" maxlength="560" placeholder="Min 25 - Máx de 560" spellcheck = "false"></textarea>
                            </div>

                            <div>
                                <p class="text-[15px] text-gray-800 mb-2">
                                    Selecione o <span class="text-indigo-500">tema</span> que mais combina com sua postagem:
                                </p>

                                <ul class="flex items-center flex-wrap gap-2">
                                    <li>
                                        <label class="button button-outline rounded-full px-3 py-0.5" for="noticias">
                                            Notícias <i class="ml-1 fa-solid fa-newspaper"></i>
                                        </label>

                                        <input class="hidden invisible" id="noticias" type="radio" name="tema" value="Notícias">
                                    </li>
                                    <li>
                                        <label class="button button-outline rounded-full px-3 py-0.5" for="filmes">
                                            Filmes <i class="ml-1 fa-solid fa-film"></i>
                                        </label>

                                        <input class="hidden invisible" id="filmes" type="radio" name="tema" value="Filmes">
                                    </li>
                                    <li>
                                        <label class="button button-outline rounded-full px-3 py-0.5" for="jogos">
                                            Jogos <i class="ml-1 fa-solid fa-gamepad"></i>
                                        </label>

                                        <input class="hidden invisible" id="jogos" type="radio" name="tema" value="Jogos">
                                    </li>
                                    <li>
                                        <label class="button button-outline rounded-full px-3 py-0.5" for="programacao">
                                            Programação <i class="ml-1 fa-solid fa-code"></i>
                                        </label>

                                        <input class="hidden invisible" id="programacao" type="radio" name="tema" value="Programação">
                                    </li>
                                    <li>
                                        <label class="button button-outline rounded-full px-3 py-0.5" for="animes">
                                            Animes <i class="ml-1 fa-solid fa-dragon"></i>
                                        </label>

                                        <input class="hidden invisible" id="animes" type="radio" name="tema" value="Animes">
                                    </li>
                                </ul>

                                <p class="font-semibold text-sm text-gray-600 text-sm mt-4" id="temaSelecionado">
                                    Tema selecionado: Nenhum
                                </p>
                            </div>
                        </div>
                        <div class="w-full md:w-[40%] lg:w-[35%] xl:w-[30%]">

                            <div>
                                <p class="text-[15px] text-gray-800 mb-1">Escolha uma imagem do seu dispositivo para ser a capa:</p>
                                <div class="relative mb-2 bg-gray-200 sm:max-w-[420px]" id="wrapper_preview" data-resize="16:9">

                                    <div class="flex-centered max-w-full h-full max-h-full" id="preview_imagem">
                                        <i class="text-2xl text-gray-600 fa-solid fa-image"></i>
                                    </div>

                                    <label class="absolute top-0 left-0 flex-centered w-full h-full
                                                  cursor-pointer bg-dark bg-opacity-80 text-3xl text-white transition duration-400 ease-out opacity-0
                                                  hover:opacity-100 hover:ring-3 focus:opacity-100 focus:ring-3 ring-indigo-400 ring-offset-2">

                                        <i class="fa-solid fa-upload"></i>
                                        <input class="hidden invisible" type="file" name="" id="imagem_postagem">
                                    </label>
                                </div>
                                <p class="text-sm">
                                    Recomendamos que utilize imagens com a proporção de 16:9 <span class="text-gray-500">(ex: 1280x720, 1920x1080 ... )</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            {{-- CONTEÚDO DA POSTAGEM --}}
            <div class="min-h-[calc((100vh-60px)-8rem)] w-full hidden" id="" data-wrapper="2">

                <div class="max-w-[1300px] mx-auto py-4 mb-4 lg:py-6">
                    <div class="px-4 mb-4 lg:px-6">
                        <h2 class="font-normal text-justify text-[15px] lg:text-base">
                            Com os primeiros passos feito agora está na hora de criar o <span class="text-indigo-500">principal conteúdo</span>,
                            para isso fornecemos um editor em bloco que vai te ajudar nessa etapa. Caso não entenda como
                            ele funcione é possível buscar mais informações na ajuda disponivel nessa página
                            ou praticar no nosso <a class="text-blue-400" href="/playground" target="_blank">Playground</a>.
                        </h2>
                    </div>
                    <div class="mx-2 mb-4 sm:mx-4 lg:mx-6
                                border border-gray-400 border-opacity-80 rounded-md shadow-lg">

                        <div class="p-4 lg:p-6" id="article">

                        </div>
                    </div>
                    <div class="px-4 lg:px-6">
                        <p class="text-sm text-gray-600">
                            OBS: O conteúdo digitado quando renderizado para a leitura possui diferenças do que é
                            mostrado no editor, na proxima etapa você poderá ver um <span class="text-indigo-500 font-semibold">preview do resultado.</span>
                        </p>

                        <button class="button mt-4" id="buttonContent" type="button">Pegar dados</button>
                    </div>
                </div>
            </div>

            <div class="hidden min-h-[calc((100vh-60px)-8rem)]" data-wrapper="3">

            </div>


            <div class="hidden min-h-[calc((100vh-60px)-4rem)] mx-4 lg:mx-6" id="result">

            </div>
        </div>

        {{-- BUTTONS NEXT E PREVIOUS STEP --}}
        <div class="hidden flex justify-between items-center h-16 py-2 px-4 lg:px-6" id="wrapperActions">
            <p class="font-semibold text-sm text-gray-600" id="currentStep">
                Etapa Atual: Não iniciado
            </p>

            <div class="flex gap-2">
                <button class="button button-outline" id="previousButton">
                    <i class="fa-solid fa-angles-left mr-1"></i> Voltar
                </button>
                <button class="button button-outline" id="nextButton">
                    Avançar <i class="ml-1 fa-solid fa-angles-right"></i>
                </button>
            </div>
        </div>
    </div>

    {{-- MODAL HELP --}}
    <x-modal class="max-w-3xl" modal="info-create"
             title="Olá colaborador" position="top">

        <div>
            SLIDER AQUI ...
        </div>

    </x-modal>

    <x-slot name="script">
        <script src="{{ asset('js/postagem/create.js') }}" type="module"></script>
    </x-slot>
    <x-slot name="css">
        <link rel="stylesheet" href="{{ asset('css/postagem.css') }}">
    </x-slot>
</x-app>

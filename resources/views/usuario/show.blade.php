<x-app titulo="{{ $usuario != null ? $usuario->name : 'Usuário inexistente' }}"
       sidebarLoaded="expand" sidebarActive="{{ $edit ? '#usuario' : '' }}">

   <x-slot name="script">
       <script src="{{ asset('js/usuario/editar-perfil.js') }}"></script>
   </x-slot>

    {{-- ===== Perfil ===== --}}
    @if($usuario)
        <div class="py-6 lg:py-8 relative">
            @if ($usuario->perfil->imagem_perfil != null)
                <img class="object-cover rounded-full select-none w-28 h-28 mx-auto shadow-lg drop-shadow-md lg:w-32 lg:h-32" src="{{ asset('storage/perfil/' . $usuario->perfil->imagem_perfil) }}" alt="imagem_perfil">
            @else
                <div class="flex justify-center items-center bg-gray-100 rounded-full w-28 h-28 mx-auto shadow-md lg:w-32 lg:h-32">
                    <i class="text-dark text-2xl fas fa-user"></i>
                </div>
            @endif
            <div class="my-1 lg:my-2 max-w-2xl mx-auto">
                @if($edit)
                    <span class="w-full flex justify-center">
                        <p class="font-semibold text-lg text-gray-800 flex items-center lg:text-xl">
                            {{ $usuario->name }}

                            <svg class="ml-1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="ionicon" viewBox="0 0 512 512"><title>Editar</title><path d="M384 224v184a40 40 0 01-40 40H104a40 40 0 01-40-40V168a40 40 0 0140-40h167.48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="34"/><path d="M459.94 53.25a16.06 16.06 0 00-23.22-.56L424.35 65a8 8 0 000 11.31l11.34 11.32a8 8 0 0011.34 0l12.06-12c6.1-6.09 6.67-16.01.85-22.38zM399.34 90L218.82 270.2a9 9 0 00-2.31 3.93L208.16 299a3.91 3.91 0 004.86 4.86l24.85-8.35a9 9 0 003.93-2.31L422 112.66a9 9 0 000-12.66l-9.95-10a9 9 0 00-12.71 0z"/></svg>
                        </p>
                    </span>
                @else
                    <p class="font-semibold text-lg w-full text-gray-800 flex justify-center items-center lg:text-xl">{{ $usuario->name }}</p>
                @endif
                <p class="text-center font-semibold text-sm text-gray-400 mb-2 w-full">{{ $usuario->tipo_conta }} - Nenhum acompanhante</p>

                @if($usuario->perfil->descricao !== null)
                    <p class="text-sm font-semibold text-center text-gray-600 mb-2 px-4 truncate-2 lg:text-base lg:px-2">{{ $usuario->perfil->descricao }}</p>
                @endif

                <ul class="flex-centered gap-4 px-4 lg:px-6 text-dark text-[26px]">
                    @foreach ($usuario->perfil->urls as $i => $link)
                        @if($link !== null)
                            <li><a class="text-gray-400 hover:text-indigo-500" href="{{ $link }}" target="_blank"><i class="fab fa-{{ $i }}"></i></a></li>
                        @endif
                    @endforeach
                </ul>

                <div class="flex-centered flex-wrap gap-2 px-4 lg:px-6 mt-4">
                    @if($edit)
                        <button class="button button-outline" data-target="edit-profile">Editar perfil <i class="text-sm ml-2 fas fa-user-edit"></i></button>
                        <a class="button button-outline" href="">
                            Estatísticas

                            <svg class="ml-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M352 144h112v112"/><path d="M48 368l121.37-121.37a32 32 0 0145.26 0l50.74 50.74a32 32 0 0045.26 0L448 160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                        </a>
                    @else
                        {{-- <button class="button button-outline">
                            Acompanhar postagens

                            <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ionicon" viewBox="0 0 512 512"><path d="M427.68 351.43C402 320 383.87 304 383.87 217.35 383.87 138 343.35 109.73 310 96c-4.43-1.82-8.6-6-9.95-10.55C294.2 65.54 277.8 48 256 48s-38.21 17.55-44 37.47c-1.35 4.6-5.52 8.71-9.95 10.53-33.39 13.75-73.87 41.92-73.87 121.35C128.13 304 110 320 84.32 351.43 73.68 364.45 83 384 101.61 384h308.88c18.51 0 27.77-19.61 17.19-32.57zM320 384v16a64 64 0 01-128 0v-16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                        </button> --}}

                        <button class="button button-outline-danger">
                            Parar de acompanhar

                            <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ionicon" viewBox="0 0 512 512"><title>Notifications Off</title><path d="M128.51 204.59q-.37 6.15-.37 12.76C128.14 304 110 320 84.33 351.43 73.69 364.45 83 384 101.62 384H320M414.5 335.3c-18.48-23.45-30.62-47.05-30.62-118 0-79.3-40.52-107.57-73.88-121.3-4.43-1.82-8.6-6-9.95-10.55C294.21 65.54 277.82 48 256 48s-38.2 17.55-44 37.47c-1.35 4.6-5.52 8.71-10 10.53a149.57 149.57 0 00-18 8.79M320 384v16a64 64 0 01-128 0v-16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M448 448L64 64"/></svg>
                        </button>
                    @endif
                </div>
            </div>
        </div>

        <div class="px-4 lg:px-6">
            <div class="content-user-wrapper mb-4 max-w-[100rem] mx-auto">
                <div class="w-full flex justify-between items-center mb-2">
                    <a class="font-medium text-gray-800" href="">{{ Auth::user() && Auth::user()->name == $usuario->name ? 'Suas postagens:' : "Postagens do usuário" }}</a>
                </div>

                <article class="content-user">
                    <div class="content-user__view" data-resize="16:9">
                        <a class="content-user__image" style="background-image: url({{ asset('storage/publicacao/imagem05.jpg') }})" href="/postagem?post=e8578e0a630782c6cb7a475c4b9cb5e68f8906ae"></a>
                    </div>
                    <div class="content-user__body">
                        <p class="content-user__title">A segunda temporada de The Witcher já tem data?</p>
                        <p class="content-user__description">com a chegada da franquia ao cinema junto com o seu tremendo sucesso, muitos estão se perguntando</p>
                    </div>
                    <div class="content-user__footer">
                        <a class="button w-full px-6 sm:w-max sm:px-6" href="/postagem?post=e8578e0a630782c6cb7a475c4b9cb5e68f8906ae">Ver</a>
                    </div>
                </article>

                <article class="content-user">
                    <div class="content-user__view" data-resize="16:9">
                        <div class="content-user__image" style="background-image: url({{ asset('storage/publicacao/imagem06.jpg') }})"></div>
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
                        <div class="content-user__image" style="background-image: url({{ asset('storage/publicacao/imagem07.jpg') }})"></div>
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
                        <div class="content-user__image" style="background-image: url({{ asset('storage/publicacao/imagem08.jpg') }})"></div>
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
    @else
        <div class="max-w-sm xl:max-w-xl mx-auto px-4 py-8 lg:px-6 ">
            <img src="{{ asset('imagens/imagemNaoEncontrado.svg') }}" alt="Imagem não encontrado">
            <p class="w-full text-center text-gray-500 text-lg font-semibold mt-4">Usuário não encontrado</p>

            @if($parametro != null)
                <div class="max-w-[180px] truncate mx-auto text-center font-semibold text-indigo-500">{{ $parametro }}</div>
            @endif

            <div class="flex justify-center mt-2">
                <a class="px-1 text-gray-500 font-medium hover:text-dark hover:border-b-2 hover:border-indigo-500 transition duration-200" href="{{ route('index') }}">Voltar ao início</a>
            </div>
        </div>
    @endif

    {{-- ===== Modal - Editar perfil ===== --}}
    @if($edit)
        @if($errors->any())
            <x-toast type="danger" message="Erro o atualizar... verifique os dados" />
        @endif

        <x-modal modal="edit-profile" type="warning" title="Personalizando   - {{ $usuario->id }}" position="center">
            <p class="text-medium mb-4 indent-4 lg:mb-8">Olá {{ $usuario->name }}, Aqui é possível customizar o seu perfil para deixa-lo com a sua cara, caso queira editar os dados da conta como email para verificação, senha, tipo de conta ou etc vá até a página de configuração ou <a class="text-blue-600" href="#">clique aqui.</a></p>
            <h2 class="font-medium text-gray-700 mb-4">Editando perfil <i class="ml-1 far fa-edit"></i></h2>
            <x-validation-errors class="mb-4" :errors="$errors" />

            <form action="{{ route('perfil.update', $usuario->name) }}" id="edit-perfil"  enctype="multipart/form-data" method="POST"> @csrf @method('PUT')
                <div class="w-28 h-28 mx-auto lg:w-32 lg:h-32 relative">
                    @if ($usuario->perfil->imagem_perfil != null)
                        <img class="object-cover rounded-full shadow-lg drop-shadow-md w-full h-full" src="{{ asset('storage/perfil/' . $usuario->perfil->imagem_perfil) }}" alt="imagem_perfil">
                    @else
                        <div class="flex-centered bg-gray-100 rounded-full w-full h-full mx-auto shadow-md">
                            <i class="text-dark text-2xl fas fa-user"></i>
                        </div>
                    @endif

                    <label for="imagem_perfil" class="absolute top-0 left-0 rounded-full flex-centered cursor-pointer w-full h-full bg-dark bg-opacity-60 text-3xl text-white transition duration-400 ease-out opacity-0 hover:opacity-100 hover:ring-3 focus:opacity-100 focus:ring-3 ring-indigo-400 ring-offset-2" for="">
                        <i class="fas fa-camera"></i>
                        <input class="hidden invisible" type="file" name="imagem_perfil" id="imagem_perfil">
                    </label>
                </div>

                <div class="my-2 mb-4 max-w-2xl mx-auto">
                    <div class="text-sm font-semibold text-center text-gray-600 max-w-sm mx-auto mb-1 truncate" id="exibirArquivo">Nenhuma imagem selecionada</div>

                    <p class="font-semibold text-lg w-full text-gray-800 flex justify-center items-center lg:text-xl">{{ $usuario->name }}</p>
                    <p class="text-center font-semibold text-sm text-gray-400 mb-2 w-full">{{ $usuario->tipo_conta }}</p>
                    <textarea class="text-center font-semibold text-sm text-gray-600 w-full resize-none p-1 mb-1 lg:text-base focus:outline-none" data-textarea="resize" name="descricao" maxlength="130" placeholder="Coloque uma descrição aqui - máx 130 caracteres">{{ !$errors->any() ? $usuario->perfil->descricao : old('descricao') }}</textarea>

                    <div class="flex-centered flex-wrap">
                        <button class="text-sm text-gray-600 font-medium px-2 py-1 border-b-2 border-indigo-500 mb-4" type="button" name="button">Mais detalhes</button>

                        <ul class="w-full">
                            <li class="font-medium mb-2">
                                Deixar o perfil PRIVADO: <input class="checkbox-switch ml-2" type="checkbox" name="privado" value="1" {{ $usuario->perfil->privado ? 'checked' : '' }}>
                            </li>

                            <li>
                                <h3 class="font-medium mb-2">Coloque alguns links: <span class="text-sm text-gray-400">(Copie e cole a URL)</span> </h3>

                                @foreach (\App\Models\Perfil::getLinksValidos() as $link)
                                    <div class="w-full flex items-center border-2 border-gray-400 rounded-full px-2 py-1 shadow mb-2">
                                        <i class="text-2xl text-gray-600 ml-1 fab fa-{{ $link }}"></i>
                                        <input class="flex-grow text-sm font-medium mx-1 p-1 rounded bg-transparent focus:outline-none md:mx-2" type="text" name="{{ $link }}" placeholder="{{ $link }}" value="{{ !$errors->any() ? $usuario->perfil->urls[$link] : old($link) }}">
                                    </div>
                                @endforeach
                            </li>

                            <li class="text-sm sm:text-right">Alguma sugestão? deixe sua mensagem <a class="text-blue-600" href="#">aqui.</a></li>
                        </ul>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button class="button mb-1" type="submit" id="atualizarPerfil">Atualizar</button>
                </div>
            </form>
        </x-modal>
    @endif
</x-app>

<x-app titulo="{{ $usuario != null ? $usuario->name : 'Usuário inexistente' }}"
       sidebarLoaded="expand" sidebarActive="{{ $edit ? '#usuario' : '' }}">

   <x-slot name="script">
       <script src="{{ asset('js/usuario/editando-perfil.js') }}"></script>
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
                        <button class="button button-outline">
                            Acompanhar postagens

                            <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ionicon" viewBox="0 0 512 512"><path d="M427.68 351.43C402 320 383.87 304 383.87 217.35 383.87 138 343.35 109.73 310 96c-4.43-1.82-8.6-6-9.95-10.55C294.2 65.54 277.8 48 256 48s-38.21 17.55-44 37.47c-1.35 4.6-5.52 8.71-9.95 10.53-33.39 13.75-73.87 41.92-73.87 121.35C128.13 304 110 320 84.32 351.43 73.68 364.45 83 384 101.61 384h308.88c18.51 0 27.77-19.61 17.19-32.57zM320 384v16a64 64 0 01-128 0v-16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                        </button>

                        {{-- <button class="button button-outline-danger">
                            Parar de acompanhar

                            <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ionicon" viewBox="0 0 512 512"><title>Notifications Off</title><path d="M128.51 204.59q-.37 6.15-.37 12.76C128.14 304 110 320 84.33 351.43 73.69 364.45 83 384 101.62 384H320M414.5 335.3c-18.48-23.45-30.62-47.05-30.62-118 0-79.3-40.52-107.57-73.88-121.3-4.43-1.82-8.6-6-9.95-10.55C294.21 65.54 277.82 48 256 48s-38.2 17.55-44 37.47c-1.35 4.6-5.52 8.71-10 10.53a149.57 149.57 0 00-18 8.79M320 384v16a64 64 0 01-128 0v-16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M448 448L64 64"/></svg>
                        </button> --}}
                    @endif
                </div>
            </div>
        </div>

        <div class="px-4 lg:px-6">
            <div class="w-full flex justify-between items-center px-2 mb-1">
                <span>
                    {{ Auth::user() && Auth::user()->name == $usuario->name ? 'Suas postagens:' : "Postagens do usuário" }}
                </span>

                <div class="relative">
                    <div data-toggle="dropdown">

                    </div>
                    <div>
                        {{-- Filtro --}}
                    </div>
                </div>
            </div>

            <div class="w-full flex flex-wrap gap-x-[12px] gap-y-6">

                @foreach ($postagens as $postagem)
                    <div class="w-full sm:w-[calc(50%-6px)] md:w-[calc(33.33%-8px)] 2xl:w-[calc(25%-9px)]">
                        <x-content-user :postagem="$postagem" />
                    </div>
                @endforeach

            </div>
        </div>
    @else
        <div class="max-w-sm xl:max-w-xl mx-auto px-4 py-8 lg:px-6 ">
            <img src="{{ asset('assets/imagens/imagemNaoEncontrado.svg') }}" alt="Imagem não encontrado">
            <p class="w-full text-center text-gray-500 text-lg font-semibold mt-8">
                Usuário não encontrado
            </p>

            @if($parametro != null)
                <div class="max-w-[180px] truncate mx-auto text-center font-semibold text-indigo-500">{{ $parametro }}</div>
            @endif

            <div class="flex justify-center mt-2">
                <a class="px-1 text-gray-500 hover:text-dark hover:border-b-2 hover:border-indigo-500 transition duration-200" href="{{ route('index') }}">
                    Voltar ao início
                </a>
            </div>
        </div>
    @endif

    {{--
        Modal - Editar perfil
     --}}
    @if($edit)
        @if($errors->any())
            <x-toast type="danger" message="Erro o atualizar... verifique os dados" />
        @endif

        <x-modal class="max-w-3xl" modal="edit-profile" type="warning"
                 title="Personalizando - {{ $usuario->id }}" position="center">

            <p class="indent-4 mb-6">
                Olá {{ $usuario->name }}, Aqui é possível customizar o seu perfil para deixa-lo com a sua cara, caso queira editar os dados da conta como email para verificação, senha, tipo de conta ou etc vá até a página de configuração ou <a class="text-blue-600" href="#">clique aqui.</a>
            </p>
            <h2 class="mb-4">
                Editando perfil <i class="ml-1 far fa-edit"></i>
            </h2>

            <x-validation-errors class="mb-4" :errors="$errors" />

            <form class="{{ route('perfil.update', $usuario->name) }}" id="edit-perfil" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')

                <div class="w-28 h-28 mx-auto lg:w-32 lg:h-32 relative">
                    @if ($usuario->perfil->imagem_perfil != null)
                        <img class="w-full h-full object-cover rounded-full shadow-lg" src="{{ asset('storage/perfil/' . $usuario->perfil->imagem_perfil) }}" alt="imagem_perfil">
                    @else
                        <div class="flex-centered w-full h-full mx-auto bg-gray-100 rounded-full shadow-md">
                            <i class="text-dark text-2xl fas fa-user"></i>
                        </div>
                    @endif

                    <label class="absolute top-0 left-0 flex-centered w-full h-full rounded-full transition duration-400 ease-out bg-dark bg-opacity-60 opacity-0 cursor-pointer
                                  hover:opacity-100 hover:ring-3 focus:opacity-100 focus:ring-3 ring-indigo-400 ring-offset-2" for="imagem_perfil">

                        <i class="text-white text-3xl fas fa-camera"></i>
                        <input class="hidden invisible" type="file" name="imagem_perfil" id="imagem_perfil">
                    </label>
                </div>

                <div class="mt-2 mb-4">
                    <div class="text-sm text-center max-w-sm mx-auto mb-1 truncate" id="exibirArquivo">
                        Nenhuma imagem selecionada
                    </div>

                    <p class="font-semibold text-lg w-full text-gray-800 flex justify-center items-center lg:text   -xl">
                        {{ $usuario->name }}
                    </p>
                    <p class="text-sm text-center font-semibold text-gray-400 mb-2">
                        {{ $usuario->tipo_conta }}
                    </p>

                    <textarea class="text-center font-semibold text-sm text-gray-600 w-full resize-none p-1 lg:text-base focus:outline-none"
                              data-textarea="resize" name="descricao" maxlength="130" placeholder="Coloque uma descrição aqui - máx 130 caracteres">{{ !$errors->any() ? $usuario->perfil->descricao : old('descricao') }}</textarea>

                    <div class="w-full my-2">
                        <!-- checkbox-switch -->
                        <div>
                            Perfil PRIVADO: <input class="checkbox-switch ml-2" type="checkbox" name="privado" value="1" {{ $usuario->perfil->privado ? 'checked' : '' }}>
                        </div>

                        {{-- <div>
                            <h3 class="mb-2">
                                Coloque alguns links: <span class="text-sm text-gray-400">(Copie e cole a URL)</span>
                            </h3>

                            @foreach (\App\Models\Perfil::getLinksValidos() as $link)
                                <div class="w-full flex items-center border-2 border-gray-400 rounded-full px-2 py-1 shadow mb-2">
                                    <i class="text-2xl text-gray-600 ml-1 fab fa-{{ $link }}"></i>
                                    <input class="flex-grow text-sm mx-1 p-1 rounded bg-transparent focus:outline-none md:mx-2" type="text" name="{{ $link }}" placeholder="{{ $link }}" value="{{ !$errors->any() ? $usuario->perfil->urls[$link] : old($link) }}">
                                </div>
                            @endforeach
                        </div> --}}
                    </div>

                    <div class="text-sm sm:text-right">
                        Alguma sugestão? deixe sua mensagem <a class="text-blue-600" href="#">aqui.</a>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button class="button mb-1" type="submit" id="atualizarPerfil">Atualizar</button>
                </div>
            </form>
        </x-modal>
    @endif
</x-app>

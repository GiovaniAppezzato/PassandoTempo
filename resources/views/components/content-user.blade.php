{{--
    Card para exibir o conteúdo
 --}}
<article class="card-article">
    <div class="card-article__image"
         style='background-image: url({{ asset("storage/postagem/$postagem->imagem_postagem") }})' data-resize="16:9">

         <div class="absolute inset-0 bg-[#211F1F] opacity-0 bg-opacity-60 rounded-t-lg">
         </div>
    </div>

    <div>
        <div class="card-article__main">
            <a class="card-article__theme">
                {{ $postagem->tema }}
            </a>

            <h1 class="card-article__title">
                {{ $postagem->titulo }}
            </h1>

            <p class="card-article__description">
                {{ $postagem->descricao }}
            </p>
        </div>

        <div class="card-article__actions">
            <a class="button" href="{{ route('postagem.show', $postagem->hash) }}">
                Ler mais
            </a>

            <div class="card-article__profile">
                <a href="{{ route('perfil.show', $postagem->user->name) }}">
                    {{ $postagem->user->name }}
                </a>

                @if($postagem->user->perfil->imagem_perfil !== null)
                    <img class="w-8 h-8 object-cover rounded-full shadow-lg select-none" src="{{ asset('storage/perfil/' . Auth::user()->perfil->imagem_perfil) }}" alt="Imagem">
                @else
                    <div class="flex justify-center items-center w-8 h-8 bg-gray-100 rounded-full shadow-lg">
                        <i class="text-xs text-gray-800 fas fa-user"></i>
                    </div>
                @endif
            </div>
        </div>
    </div>
</article>

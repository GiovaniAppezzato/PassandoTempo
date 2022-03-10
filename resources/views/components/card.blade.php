{{--
    Card para exibir o postagens
--}}
@props([
    'post'
])

<article class="card-article">
    <div class="card-article__image w-full"
         style='background-image: url({{ asset("storage/postagem/$post->imagem_postagem") }})' data-resize="16:9">

         <a class="card-article__statistic" href="{{ route('postagem.show', $post->hash) }}">
            <div>
                <span>
                    15
                    <i class="fa-solid fa-heart"></i>
                </span>

                <span>
                    112
                    <i class="fa-solid fa-eye"></i>
                </span>

                @if(true)
                    <span class="bg-gray-200 text-gray-400 text-xs font-bold ml-2 px-2.5 py-0.5 rounded">
                        Novo
                    </span>
                @endif
            </div>
         </a>
    </div>

    <div>
        <div class="card-article__main">
            <a class="card-article__theme">
                {{ $post->tema }}
                </a>

                <h1 class="card-article__title">
                    {{ $post->titulo }}
                </h1>

            <p class="card-article__description">
                {{ $post->descricao }}
            </p>
        </div>

        <div class="card-article__actions">
            <a class="button" href="{{ route('postagem.show', $post->hash) }}">
                Ler mais
            </a>

            <div class="card-article__profile">
                <a href="{{ route('perfil.show', $post->user->name) }}">
                    {{ $post->user->name }}
                </a>

                @if($post->user->perfil->imagem_perfil !== null)
                    <img class="w-8 h-8 object-cover rounded-full shadow-lg select-none" src="{{ asset('storage/perfil/' . $post->user->perfil->imagem_perfil) }}" alt="{{ $post->user->perfil->imagem_perfil }}">
                @else
                    <div class="flex justify-center items-center w-8 h-8 bg-gray-100 rounded-full shadow-lg">
                        <i class="text-xs text-gray-800 fas fa-user"></i>
                    </div>
                @endif
            </div>
        </div>
    </div>
</article>

<x-dashboard title="PassandoTempo"
             sidebarActive="#usuario">

    <div class="w-full max-w-sm mx-auto px-4 py-12
                xl:max-w-xl lg:px-6">

        <img src="{{ asset('assets/imagens/imagemNaoEncontrado.svg') }}" alt="Imagem não encontrado">

        <p class="w-full text-center text-gray-500 text-lg font-semibold mt-8">
            Usuário não encontrado <i class="fa-solid fa-triangle-exclamation"></i>
        </p>

        @if($parametro != null)
            <div class="max-w-[180px] mx-auto text-center text-lg font-semibold text-indigo-500 truncate">{{ $parametro }}</div>
        @endif

        <div class="flex justify-center mt-4">
            <a class="button" href="{{ route('index') }}">
                Voltar ao início
            </a>
        </div>
    </div>


</x-dashboard>

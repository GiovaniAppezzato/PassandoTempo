<x-app titulo="Criando postagem - PassandoTempo"
       sidebarLoaded="expand" sidebarActive="#usuario">

    {{-- HTML aqui --}}
    <div class="">
        <div class="flex justify-between items-center bg-gray-100 p-2 px-4 w-100 h-16 lg:px-6">
            <x-progress-bar />

            <button class="button gap-1" type="button" data-target="info-create">
                <span class="hidden sm:block">Quero</span> ajuda <i class="fa-solid fa-triangle-exclamation"></i>
            </button>
        </div>

        <div>
            <div>
                {{-- START --}}
            </div>
            <div>
                {{-- PRIMEIRAS CONFIGURAÇÕES --}}
            </div>
            <div>
                {{-- CONTÉUDO PRINCIPAL --}}
            </div>
            <div>
                {{-- FINALIZAÇÃO --}}
            </div>
        </div>
    </div>

    {{-- MODAL HELP --}}
    <x-modal modal="info-create" title="Olá colaborador" position="top">

        <div class="">
            FAZER SLIDER EXPLICANDO...
        </div>

    </x-modal>
</x-app>

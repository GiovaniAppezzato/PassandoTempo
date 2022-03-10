<x-layout title="PassandoTempo"
          sidebarActive="#biblioteca">

    {{-- Slider --}}
    <div class="w-full h-max px-3 py-6">
      <div class="w-full max-w-2xl mx-auto relative select-none sm:w-[70%] md:w-[65%] lg:w-[75%]" data-resize="16:9">
          <div class="overflow-hidden w-full h-full">
              <div class="flex w-[200%] h-full transition duration-700 ease-in-out" id="sliderHome" data-slider="2">
                  <div class="w-full bg-cover" style="background-image: url({{ asset('assets/imagens/imagemBanner02.svg') }})"></div>

                  <div class="w-full flex-centered relative">
                      <h1 class="text-white rounded-md bg-rose-400 py-2 px-6">
                          Muito obrigado pela visita <i class="ml-2 fas fa-wine-glass-alt"></i>
                      </h1>
                  </div>
              </div>
          </div>

          <button data-next="sliderHome" class="absolute translate-y-[-50%] top-1/2 right-0 sm:right-[-3rem]" type="button">
              <svg class="stroke-gray-800 hover:scale-125 transition duration-200" width="34" height="34" xmlns="http://www.w3.org/2000/svg"  class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/></svg>
          </button>
          <button data-previous="sliderHome" class="absolute translate-y-[-50%] top-1/2 left-0 sm:left-[-3rem]" type="button">
              <svg class="stroke-gray-800 hover:scale-125 transition duration-200" width="34" height="34" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M328 112L184 256l144 144"/></svg>
          </button>
      </div>
    </div>

    <div class="px-4 lg:px-6 my-2 lg:my-6">
      {{-- Conteúdos dos usuários --}}
      <div class="w-full flex justify-between px-2 select-none mb-2 max-w-[100rem] mx-auto text-sm sm:block lg:text-base">
          <button class="inline-block px-2 py-1 text-gray-500 hover:text-dark text-dark border-b-2 border-indigo-500" type="button">Todos</button>
          <button class="inline-block px-2 py-1 text-gray-500 hover:text-dark" type="button">Jogos</button>
          <button class="inline-block px-2 py-1 text-gray-500 hover:text-dark" type="button">Filmes</button>
          <button class="inline-block px-2 py-1 text-gray-500 hover:text-dark" type="button">Animes</button>
          <a class="inline-block px-2 py-1 text-gray-500 hover:text-dark" type="button" href="">Outros</a>
      </div>

      <div class="flex flex-wrap gap-x-[12px] gap-y-6">

          @foreach ($postagens as $postagem)
              <div class="w-full sm:w-[calc(50%-6px)] md:w-[calc(33.33%-8px)] 2xl:w-[calc(25%-9px)]">
                  <x-card :post="$postagem" />
              </div>
          @endforeach

      </div>
    </div>
</x-layout>

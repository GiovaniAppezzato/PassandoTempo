@props(['id'])

<div class="flex items-center">
    <div {{ $attributes->merge(['class' => "w-[180px] h-[0.80rem] md:w-[225px] lg:w-[250px] relative
                                            rounded-full bg-gray-200 shadow-md"]) }}>

        <span class="absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] z-[1]
                     text-[9px] font-bold text-gray-400">
            {{-- Progresso --}}
        </span>

        <div id="progressBar" class="w-0 h-full flex justify-center items-center overflow-hidden relative z-[2]
                                     text-white text-sm shadow-md bg-gradient-to-r from-indigo-400 to-indigo-500 rounded-full transition-all duration-500 ease-out">
        </div>
    </div>
    <div class="text-sm font-semibold text-gray-500 ml-2" id="progressNumber">
        {{ $start ?? '0%' }}
    </div>
</div>

@props(['id'])

<div {{ $attributes->merge(['class' => "w-[200px] h-[1.5rem] md:w-[225px] lg:w-[250px]
                                        rounded-full bg-gray-200 shadow-md"]) }}>

    <div class="flex justify-center items-center w-1/3 h-full
                text-white shadow bg-gradient-to-r from-indigo-400 to-indigo-500 rounded-full transition duration-400 ease-out">
        33.3%
    </div>
</div>

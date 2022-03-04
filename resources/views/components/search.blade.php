<form {{ $attributes->merge(['class' => "flex w-full p-1 shadow rounded-full bg-gray-50 border border-gray-300"]) }} name="search">
    <div class="flex items-center px-2">
        <svg class="stroke-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ionicon" viewBox="0 0 512 512"><title>Pesquisar no site</title><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
    </div>

    <input class="grow border-0 mx-1 p-1 bg-transparent rounded
                  focus:outline-none md:mx-2" type="text" name="" placeholder="{{ $placeholder ?? '' }}">

    <button class="button rounded-full" type="button">Buscar</button>
</form>

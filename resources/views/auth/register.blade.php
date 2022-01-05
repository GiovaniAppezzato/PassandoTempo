<x-auth-layout titulo="Página de cadastro - {{ env('APP_NAME') }}">

    <form class="w-full max-w-md h-max bg-white my-2 px-4 py-5 sm:px-6 shadow-lg rounded-lg" action="{{ $colaborador ? route('register').'?create=colaborador' : route('register') }}" method="POST">
        @csrf
        <h1 class="text-center text-2xl text-gray-700 mb-1 font-[ubuntu]">Cadastrar</h1>

        @if(!$colaborador)
            <div class="mb-2 flex justify-center">
                <div class="flex items-center w-max cursor-pointer hover:scale-105 transition duration-150 ease-out select-none" data-target="colaborador">
                    <span class="text-sm text-indigo-500 font-medium">Criar conta colaboradora</span>
                    <svg class="stroke-indigo-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                </div>
            </div>
        @endif

        <x-validation-errors class="mb-4" :errors="$errors" />

        <div class="mb-6">
            <div class="w-full mb-2">
                <label class="label-form" for="name">Nome:</label>
                <input class="input input-ring" id="name" name="name" type="text" value="{{ old('name') }}" required>
            </div>
            <div class="w-full mb-2">
                <label class="label-form" for="email">Email:</label>
                <input class="input input-ring" id="email" name="email" type="email" value="{{ old('email') }}" required>
            </div>
            <div class="w-full mb-2">
                <label class="label-form" for="password">Senha:</label>
                <input class="input input-ring" id="password" name="password" type="password" required>
            </div>
            <div class="w-full mb-2">
                <label class="label-form" for="password_confirmation">Confirmar senha:</label>
                <input class="input input-ring" id="password_confirmation" name="password_confirmation" type="password" required>
            </div>
            <div class="w-full mb-2">
                <label class="label-form" for="data_nascimento">Data de nascimento</label>
                <input class="input input-ring w-max" id="data_nascimento" name="data_nascimento" type="date" max="{{ date('Y-m-d') }}" min="1903-01-02">
                @if($colaborador)
                    <span class="ml-2 text-red-500">*Obrigatório</span>
                @else
                    <span class="ml-2 text-gray-700">*Opcional</span>
                @endif
            </div>
        </div>

        <div class="flex flex-wrap justify-center">
            <button class="button w-full">Cadastrar</button>
            <a class="px-4 py-1 mt-2 rounded-md hover:bg-gray-100 transition duration-200 ease-out" href="/">Voltar</a>
        </div>
    </form>

    @if(!$colaborador)
        <x-modal modal="colaborador" title="Aviso">
            <p class="text-gray-700 indent-4">A conta colaborador além de todas as outras funcionalidades te possibilita também escrever publicações em nossa plataforma e criar tópicos de discussão, ficou curioso? Então junte-se a nós e venha fazer parte dessa comunidade.</p>
            <p class="text-sm text-red-500 mt-2">Qualquer atitude que seja com intuito de estragar a expêriencia dos outros usuários pode resultar em banimento temporário ou permanente.</p>

            <x-slot name="actions">
                <a class="button" href="{{ route('register').'?create=colaborador' }}">Entendi</a>
            </x-slot>
        </x-modal>
    @endif
</x-auth-layout>

<x-auth title="Fazendo login - PassantoTempo">

    <form class="w-full max-w-md h-max bg-white my-2 px-4 py-5 sm:px-6 shadow-lg rounded-lg" action="{{ route('login')}}" method="POST">
        @csrf
        <h1 class="text-center text-2xl text-gray-700 font-medium mb-2">Iniciar sessão</h1>

        <x-validation-errors class="mb-4" :errors="$errors" />

        <div class="mb-4">
            <div class="w-full mb-2">
                <label class="label-form" for="email">Email:</label>
                <input class="input input-ring" id="email" name="email" type="email" value="{{ old('email') }}" required>
            </div>
            <div class="w-full mb-2">
                <label class="label-form" for="password">Senha:</label>
                <input class="input input-ring" id="password" name="password" type="password" required>
            </div>
        </div>

        <div class="flex justify-between items-center mb-6">
            <a class="text-sm text-gray-700 font-medium ml-1 hover:text-indigo-500 focus:outline-none" href="{{ route('register') }}">
                Não possui uma conta?
            </a>

            <div class="flex items-center">
                <label class="text-sm text-gray-700 font-medium cursor-pointer select-none" for="remember_me">Lembrar de mim</label>
                <input class="scale-125 ml-2 accent-indigo-500 cursor-pointer focus:outline-none" id="remember_me" name="remember" type="checkbox">
            </div>
        </div>

        <div class="flex flex-wrap justify-center">
            <button class="button button-ring w-full">Entrar</button>
            <a class="font-medium text-center text-gray-600 rounded transition duration-200 ease-out w-full px-4 py-1 mt-2 hover:bg-gray-100 hover:text-gray-800" href="/">Voltar</a>
        </div>
    </form>

</x-auth>

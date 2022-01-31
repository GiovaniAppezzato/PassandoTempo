<x-auth-layout titulo="{{ env('APP_NAME') }}">
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div>
                <label class="label-form" for="email">Email:</label>
                <input class="input input-ring" type="email" name="email" value="{{ old('email') }}" id="email"  required autofocus>
            </div>

            <div class="mt-4">
                <label class="label-form" for="password">Senha:</label>
                <input class="input input-ring" type="password" name="password" value="{{ old('password') }}" id="password" required>
            </div>

            <div class="mt-4">
                <label class="label-form" for="password_confirmation">Confirmar senha:</label>
                <input class="input input-ring" id="password_confirmation" name="password_confirmation" type="password" required>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="button" type="submit" name="button">Reset password</button>
            </div>
        </form>
    </x-auth-card>
</x-auth-layout>

{{--
<x-label for="email" :value="__('Email')" />
<x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />

<x-label for="password" :value="__('Password')" />
<x-input id="password" class="block mt-1 w-full" type="password" name="email" :value="old('password', $request->password)" required />

<x-label for="password_confirmation" :value="__('Confirm Password')" />
<x-input id="password_confirmation" class="block mt-1 w-full"
                    type="password"
                    name="password_confirmation" required />
 --}}

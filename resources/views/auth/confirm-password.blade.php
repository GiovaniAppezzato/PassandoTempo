<x-auth-layout titulo="{{ env('APP_NAME') }}">
    <x-auth-card>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <!-- Password -->
            <div>
                <label class="label-form" for="password">Senha:</label>
                <input class="input input-ring" type="password" name="password" required autocomplete="current-password">
            </div>

            <div class="flex justify-end mt-4">
                <button class="button" type="submit" name="button">Confirm</button>
            </div>
        </form>
    </x-auth-card>
</x-auth-layout>

{{--
<x-label for="password" :value="__('Password')" />
<x-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password" />

<x-button>
    {{ __('Confirm') }}
</x-button>
 --}}

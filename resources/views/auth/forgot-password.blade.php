<x-auth-layout titulo="{{ env('APP_NAME') }}">
    <x-auth-card>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Validation Errors -->
        <x-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div>
                <label class="label-form" for="email">Email:</label>
                <input class="input input-ring" id="email" type="email" name="email" value="{{ old('email') }}"  required autofocus>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="button" type="submit" name="button">Email Password Reset Link</button>
            </div>
        </form>
    </x-auth-card>
</x-auth-layout>

{{--
<x-label for="email" :value="__('Email')" />
<x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

 <x-button>
    {{ __('Email Password Reset Link') }}
</x-button>
 --}}

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img class="h-32 w-32 rounded-full bg-gray-900 block" src="/images/logo_yeniliktec_blanco.svg" alt="Yeniliktec Logo">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label class="hidden" for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="E-mail" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label class="hidden" for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            
            <x-jet-button class="w-full my-4 text-center">
                {{ __('Login') }}
            </x-jet-button>

            @if (Route::has('password.request'))
                <a class="underline block text-sm text-center text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

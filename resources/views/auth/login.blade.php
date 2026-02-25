@php
    use Illuminate\Support\Facades\Route;
@endphp
<style>
    @keyframes bounceIn {
    0% {
        transform: translateY(-1000px);
        opacity: 0;
    }
    60% {
        transform: translateY(30px);
        opacity: 1;
    }
    80% {
        transform: translateY(-10px);
    }
    100% {
        transform: translateY(0);
    }
}

/* Aplicando la animación personalizada */
.animate-bounce-in {
    animation: bounceIn 2s ease-out;
}

</style>
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
            
        </x-slot>
        
        <x-validation-errors class="mb-4" />
        <div>
            <h3 class="text-xl text-white text-center mb-4 animate-bounce-in">
                
            </h3>
        </div>
        @session('status')
            <div class="mb-4 font-medium text-sm text-rose-600 dark:text-rose-400">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Correo') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!--<div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Recuerdame') }}</span>
                </label>
            </div>-->

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-rose-200 dark:text-gray-400 hover:text-fucsia dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu contraseña?') }}
                    </a>
                @endif

                
            </div>
            <div class="flex justify-center mt-5">
                <x-button class="ms-4">
                    {{ __('Iniciar Sesión') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

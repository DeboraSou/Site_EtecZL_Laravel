<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Logo. -->
    <a href="/">
        <img src="{{ asset('etec.png') }}" alt="Logo da EtecZL." class="w-20 cursor-pointer mx-auto py-4 mb-6">
    </a>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <!-- <x-input-label for="email" :value="__('E-mail')"/> -->
            <x-input-label for="email" :value="__('')"/>

            <x-text-input id="email"
                            type="email"
                            name="email"
                            :value="old('email')"
                            placeholder="exemplo.123@email.com"
                            required
                            autofocus
                            autocomplete="username"
                            class="block mt-1 w-full"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-800" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <!-- <x-input-label for="password" :value="__('Senha')" /> -->
            <x-input-label for="password" :value="__('')" />

            <x-text-input id="password"
                            type="password"
                            name="password"
                            placeholder="Senha"
                            required
                            autocomplete="current-password"
                            class="block mt-1 w-full"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-800" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mt-4">
        <div class="inline-flex items-center">
            <label for="remember_me" class="items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-blue-700 shadow-sm focus:ring-blue-500 dark:focus:ring-blue-700 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-base text-gray-600 dark:text-gray-400">{{ __('Lembrar da senha') }}</span>
            </label>
        </div>

            @if (Route::has('password.request'))
                <a class="text-base text-blue-700 dark:text-gray-400 hover:text-red-800 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Esqueceu a senha?') }}
                </a>
            @endif
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="sign_btn ms-3 text-blue-900 font-[Inter] duration-500 px-6 py-2 mx-4 bg-transparent hover:text-gray-900 hover:bg-transparent transition-all 0.5s ease-in" style="color: #040404">
                {{ __('Entrar') }}
            </x-primary-button>
        </div>

        <div class="flex items-center justify-center mt-4">
            <a class="text-base text-blue-700 dark:text-gray-400 hover:text-red-800 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                {{ __('Ainda não é cadastrado?') }}
            </a>
        </div> 
       
    </form>
</x-guest-layout>
<x-guest-layout>

 <!-- Logo. -->
 <a href="/">
        <img src="{{ asset('etec.png') }}" alt="Logo da EtecZL." class="w-20 cursor-pointer mx-auto py-4 mb-6">
    </a>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <!-- <x-input-label for="name" :value="__('Name')" /> -->
            <x-input-label for="name" :value="__('')" />
            
            <x-text-input id="name"
                            type="text" name="name"
                            :value="old('name')"
                            placeholder="Nome"
                            required
                            autofocus autocomplete="name"
                            class="block mt-1 w-full"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-800" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <!-- <x-input-label for="email" :value="__('Email')" /> -->
            <x-input-label for="email" :value="__('')" />

            <x-text-input id="email"
                            type="email" name="email"
                            :value="old('email')"
                            placeholder="exemplo.123@email.com"
                            required
                            autocomplete="username"
                            class="block mt-1 w-full"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-800" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <!-- <x-input-label for="password" :value="__('Password')" /> -->
            <x-input-label for="password" :value="__('')" />

            <x-text-input id="password"
                            type="password"
                            name="password"
                            placeholder="Senha"
                            required
                            autocomplete="new-password"
                            class="block mt-1 w-full"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-800" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <!-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> -->
            <x-input-label for="password_confirmation" :value="__('')" />

            <x-text-input id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirme a senha"
                            required
                            autocomplete="new-password"
                            class="block mt-1 w-full"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-800" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-base text-blue-700 dark:text-gray-400 hover:text-red-800 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Já é cadastrado?') }}
            </a>
        </div>        

        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="sign_btn ms-3 text-blue-900 font-[Inter] duration-500 px-6 py-2 mx-4 bg-transparent hover:text-gray-900 hover:bg-transparent transition-all 0.5s ease-in;" style="color: #040404;">
            {{ __('Cadastrar') }}
            </x-primary-button>
        </div>
        
    </form>
</x-guest-layout>

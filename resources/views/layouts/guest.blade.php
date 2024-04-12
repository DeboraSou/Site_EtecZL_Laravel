<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
        <title>Conta - ETEC Zona Leste</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

    :root {
        font-family: "Inter", sans-serif;

        --primary: #0d6d94;
        --secondary: #040404;
        --terceary: #fdfdfd;
        --quaternary: #247c94;
        --quinary: #bc0505;
        --sextary: #dcd406;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Inter", sans-serif;
    }

    .sign_btn {
    position: relative;
    margin: 30px 0 10px 0;
    padding: 12px 30px;
    background: transparent;
    font-size: 1rem;
    border: none;
    outline: none;
    transition: all 1s;
    cursor: pointer;
}

    .sign_btn::after,
    .sign_btn::before {
        content: "";
        width: 10px;
        height: 10px;
        position: absolute;
        transition: all 1s ease-in-out;
    }

    .sign_btn::after {
        top: 1px;
        left: 1px;
        border-top: 3px solid var(--primary);
        border-left: 3px solid var(--quinary);
    }

    .sign_btn::before {
        bottom: 1px;
        right: 1px;
        border-bottom: 3px solid var(--primary);
        border-right: 3px solid var(--quinary);
    }

    .sign_btn:hover {
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
    }

    .sign_btn:hover::before,
    .sign_btn:hover::after {
        width: 100%;
        height: 100%;
    }

    .sign_btn_link {
        letter-spacing: 3px;
        text-transform: uppercase;
        text-decoration: none;
        font-family: 'Inter', sans-serif;
        font-size: 1em;
        font-weight: 600;
        color: var(--secondary);
        position: relative;
        z-index: 2;
    }    
    </style>
    
    <body class="font-[Inter] text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
                    <!-- Logo. -->
                    <!-- <img src="{{ asset('etec.png') }}" alt="Logo da EtecZL." class="w-20 cursor-pointer ml-10"> -->
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
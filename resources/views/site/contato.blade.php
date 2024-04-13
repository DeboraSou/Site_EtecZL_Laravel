<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind. -->
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <title>Contato - ETEC Zona Leste</title>
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

    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: var( --quaternary);
        border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: var( --primary);
        border-radius: 5px;
    }

    ::-webkit-scrollbar-track {
        background-color: #a7cad4;
    }
</style>

<body>

<nav class="bg-white bg-opacity-5 backdrop-filter backdrop-blur-md border border-opacity-10 border-white p-4 fixed top-0 left-0 w-full z-40">
    <div class="flex justify-between items-center">
        <div class="flex-shrink-0">
            <a href="/">
                <img src="{{ asset('etec.png') }}" alt="Logo EtecZL." class="w-20 cursor-pointer ml-10">
            </a>
        </div>

        <div class="hidden md:block">
            <a href="/" class="mr-4 text-xl hover:text-red-800 transition-all 0.3s ease-in font-semibold">Início</a> 
            <a href="/sobrenos" class="mr-4 text-xl hover:text-red-800 transition-all 0.3s ease-in font-semibold">Sobre Nós</a>
            <a href="/cursos" class="mr-4 text-xl hover:text-red-800 transition-all 0.3s ease-in font-semibold">Cursos</a>
            <a href="/oportunidades" class="mr-4 text-xl hover:text-red-800 transition-all 0.3s ease-in font-semibold">Oportunidades</a>
            <a href="/vestibulinho" class="mr-4 text-xl hover:text-red-800 transition-all 0.3s ease-in font-semibold">Vestibulinho</a>
            <a href="/noticias" class="mr-4 text-xl hover:text-red-800 transition-all 0.3s ease-in font-semibold">Notícias</a>
            <a href="/contato" class="mr-10 text-xl hover:text-red-800 transition-all 0.3s ease-in font-semibold">Contato</a>

            <a href="/login" class="text-xl font-semibold">
            <button class="bg-transparent text-gray-900 font-[Inter] px-6 py-2 mx-4 hover:bg-red-800 hover:text-white border-2 border-red-800 rounded transition-all 0.5s ease-in duration-500;">
                Entrar
            </button>
            <a>

            <a href="/register" class="text-xl hover:text-red-800 transition-all 0.3s ease-in duration-500 font-semibold">
            <button class="bg-red-800 text-white font-[Inter] px-6 py-2 mx-4 hover:text-gray-900 hover:bg-transparent border-2 border-red-800 rounded transition-all 0.5s ease-in duration-500;">
                Cadastrar
            </button>
            </a>
        </div>

        <div class="md:hidden">
            <button id="mobile-menu-toggle" class="mobile-menu-toggle">
                <svg class="h-6 w-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
    
    <div id="mobile-menu" class="hidden md:hidden text-center">
        <a href="/" class="text-xl hover:text-red-800 transition-all 0.3s ease-in duration-500 font-semibold block text-gray-900 px-2 py-1">Início</a> 
        <a href="/sobrenos" class="text-xl hover:text-red-800 transition-all 0.3s ease-in duration-500 font-semibold block text-gray-900 px-2 py-1">Sobre Nós</a>
        <a href="/cursos" class="text-xl hover:text-red-800 transition-all 0.3s ease-in duration-500 font-semibold block text-gray-900 px-2 py-1">Cursos</a>
        <a href="/oportunidades" class="text-xl hover:text-red-800 transition-all 0.3s ease-in duration-500 font-semibold block text-gray-900 px-2 py-1">Oportunidades</a>
        <a href="/vestibulinho" class="mr-4 text-xl hover:text-red-800 transition-all 0.3s ease-in duration-500 font-semibold block text-gray-900 px-2 py-1">Vestibulinho</a>
        <a href="/noticias" class="text-xl hover:text-red-800 transition-all 0.3s ease-in duration-500 font-semibold block text-gray-900 px-2 py-1">Notícias</a>
        <a href="/contato" class="text-xl hover:text-red-800 transition-all 0.3s ease-in duration-500 font-semibold block text-gray-900 px-2 py-1 mb-2">Contato</a>

        <a href="/login" class="text-xl font-semibold px-2 py-1">
            <button class="bg-transparent text-gray-900 font-[Inter] px-6 py-2 mx-4 hover:bg-red-800 hover:text-white border-2 border-red-800 rounded transition-all 0.5s ease-in duration-500;">
                Entrar
            </button>
        <a>
        <br /><br />

        <a href="/register" class="text-xl hover:text-red-800 transition-all 0.3s ease-in duration-500 font-semibold">
            <button class="bg-red-800 text-white font-[Inter] px-6 py-2 mx-4 hover:text-gray-900 hover:bg-transparent border-2 border-red-800 rounded transition-all 0.5s ease-in duration-500;">
                Cadastrar
            </button>
        </a>

    </div>
</nav>    

    <!-- Hero. -->
    <section class="relative flex flex-col justify-center font-[Inter] px-12 py-8 pt-30" style="height: 60vh">
        <div class="absolute inset-0 bg-cover bg-center bg-opacity-60 z-0" style="opacity: 0.5; background-image: url('{{ asset('contato.png') }}');"></div>
        
        <h1 class="text-gray-900 tracking-wider text-left font-bold text-2xl -mt-20 z-10" style="text-transform: uppercase; padding-bottom: -150px;">
            Contato
        </h1>

        <h2 class="text-gray-900 tracking-wider text-left font-bold text-3xl mt-5 z-10">
            Entre em contato conosco para obter mais informações, esclarecer dúvidas. Estamos aqui para ajudar e ficaremos felizes em atendê-lo!           
        </h2>
    </section>

    <!-- Contatos. --> 
    <div class="flex flex-col md:flex-row items-center justify-center bg-gray-200 py-8 px-5" style="gap: 30px;">
        <div class="w-full md:w-1/2">
            <div style="border: 5px solid #fdfdfd; border-radius: 5px;">
                <img src="{{ asset('endereco.jpg') }}" alt="Entrada da EtecZL." class="w-full h-auto">
            </div>
        </div>

        <div class="w-full md:w-1/2 mt-4 md:mt-0 cursor:none">
            <h2 class="text-3xl font-semibold mb-4">
                Etec da Zona Leste
            </h2>
            <p class="text-lg">A Escola Técnica da Zona Leste é uma instituição pública, localizada na:<br /><br />
            <address class="text-lg not-italic">
                Avenida Águia de Haia, 2.633<br />
                Cidade AE Carvalho<br />
                São Paulo/SP<br />
                CEP: 03694-000.
            </address>
            </p>

            <p class="text-lg">Telefones:
            <a href="tel:+552045-4016" class="text-lg">2045-4000 /</a>
            <a href="tel:+55112045-4016" class="text-lg">2045-4016</a>
            </p>
        </div>
    </div>

    <!-- Contatos. --> 
    <div class="flex flex-wrap justify-center items-center gap-10 mt-8 mb-8">
        <div class="max-w-xs w-full bg-white border-3 border-gray-200 rounded-lg overflow-hidden shadow-md">
            <div class="p-4">
                <div class="flex justify-center text-gray-900">
                <a href="mailto:e211adm@cps.sp.gov.br.com">
                    <span class="material-symbols-outlined text-blue-700 hover:text-red-800 transition-colors 0.5s ease-in duration-500 cursor-pointer" style="font-size: 60px;">alternate_email</span>
                </a>
                </div>

                <div class="text-center mt-4">
                    <h3 class="text-lg font-semibold">E-mail</h3>
                    <p>Enviar e-mail para Etec Zona Leste</p><br>
                </div>
            </div>
        </div>

        <div class="max-w-xs w-full bg-white border-3 border-gray-200 rounded-lg overflow-hidden shadow-md">
            <div class="p-4">
                <div class="flex justify-center text-gray-900">
                <a href="https://api.whatsapp.com/send?phone=551120454012">
                    <span class="material-symbols-outlined text-blue-700 hover:text-red-800 transition-colors 0.5s ease-in duration-500 cursor-pointer" style="font-size: 60px;">p2p</span>
                </a>
                </div>

                <div class="text-center mt-4 text-gray-900">
                    <h3 class="text-lg font-semibold">WhatsApp</h3>
                    <p>Entrar em contato pelo WhatsApp</p><br>
                </div>
            </div>
        </div>

        <div class="max-w-xs w-full bg-white border-3 border-gray-200 rounded-lg overflow-hidden shadow-md">
            <div class="p-4">
                <div class="flex justify-center">
                <a href="https://www.instagram.com/eteczonalesteoficial/">
                    <span class="material-symbols-outlined text-blue-700 hover:text-red-800 transition-colors 0.5s ease-in duration-500 cursor-pointer" style="font-size: 60px;">add_a_photo</span>
                </a>
                </div>

                <div class="text-center mt-4">
                    <h3 class="text-lg font-semibold">Instagram</h3>
                    <p>Entrar em contato pelo instragram.</p><br>
                </div>
            </div>
        </div>

        <div class="max-w-xs w-full bg-white border-3 border-gray-200 rounded-lg overflow-hidden shadow-md">
            <div class="p-4">
                <div class="flex justify-center">
                <a href="https://www.facebook.com/Eteczonalesteoficial">
                    <span class="material-symbols-outlined text-blue-700 hover:text-red-800 transition-colors 0.5s ease-in duration-500 cursor-pointer" style="font-size: 60px;">groups</span>
                </a>
                </div>

                <div class="text-center mt-4">
                    <h3 class="text-lg font-semibold">Facebook</h3>
                    <p>Entrar em contato pelo facebook.</p><br>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-200 p-1 mb-10">
    <div class="container mx-auto mt-8">
        <h3 class="flex text-3xl font-bold mb-4 justify-center text-blue-900">Localização</h3>
        <div class="aspect-w-16 aspect-h-8 pb-10">
            <iframe class="w-full h-full" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7316.517623704203!2d-46.475812!3d-23.523192!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce616495555555%3A0x8076d1577db86cf1!2sEtec%20da%20Zona%20Leste!5e0!3m2!1spt-BR!2sbr!4v1712880853547!5m2!1spt-BR!2sbr" style="border:0;  width=600 height=450" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </div>

    <!-- Lógica do botão mobile-menu. -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuToggle.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>

<footer class="bg-gray-200 border border-opacity-10 border-t-4 border-red-800 text-gray-900 pt-10 pb-5">
    <div class="flex justify-center items-center">
        <a href="/">
            <img src="{{ asset('etec.png') }}" alt="Logo da EtecZL." class="w-20 cursor-pointer ">
        </a>
    </div>

    <div class="flex justify-center items-center mt-8">
         <!-- Ícone do Facebook. -->
         <a href="https://www.facebook.com/Eteczonalesteoficial">
            <span class="material-symbols-outlined text-gray-900 hover:text-blue-800 transition-colors 0.5s ease-in duration-500 cursor-pointer text-secondary text-base no-underline py-1 px-3 hover:border-none font-bold mr-4" style="font-size: 40px;">groups</span>
        </a>

        <!-- Ícone do YouTube. -->
        <a href="https://www.youtube.com/@etecdazonaleste2949">
            <span class="material-symbols-outlined text-gray-900 hover:text-red-800 transition-colors 0.5s ease-in duration-500 cursor-pointer text-secondary text-base no-underline py-1 px-3 hover:border-none font-bold mr-4" style="font-size: 40px;">play_circle</span>
        </a>

        <!-- Ícone do Instagram. -->
        <a href="https://www.instagram.com/eteczonalesteoficial/">
            <span class="material-symbols-outlined text-gray-900 hover:text-violet-800 transition-colors 0.5s ease-in duration-500 cursor-pointer text-secondary text-base no-underline py-1 px-3 hover:border-none font-bold mr-4" style="font-size: 40px;">add_a_photo</span>
        </a>
    </div>

    <p class="text-gray-900 text-center text-sm mt-12">
        Copyright © 2024 Etec Zona Leste. Todos os direitos reservados.
    </p>

    <p class="text-gray-900 text-center text-sm mt-5">
        Desenvolvido por DS - DEV.
    </p>
    </footer>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind. -->
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <title>Notícias - ETEC Zona Leste</title>
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
        <div class="absolute inset-0 bg-cover bg-center bg-opacity-60 z-0" style="opacity: 0.5; background-image: url('{{ asset('noticias.jpg') }}');"></div>
        
        <h1 class="text-gray-900 tracking-wider text-left font-bold text-2xl -mt-20 z-10" style="text-transform: uppercase; padding-bottom: -150px;">
            Noticias
        </h1>

        <h2 class="text-gray-900 tracking-wider text-left font-bold text-3xl mt-5 z-10">
            Confira as últimas novidades e atualizações em nossa seção de notícias.           
        </h2>
    </section>

    <!-- Notícias. -->
    <div class="space-y-8">
        <div class="flex flex-col md:flex-row items-center justify-center bg-gray-200 py-8 px-5" style="gap: 30px;">
            <div class="max-w-xl w-full md:w-1/2 mt-4 md:mt-0">
                <h2 class="text-3xl text-center font-semibold mb-4">
                    Descubra as Novidades
                </h2>
                <p class="text-lg text-left">
                    Entre nos bastidores da ETEC Zona Leste e mergulhe no universo das nossas notícias exclusivas. Aqui, você encontrará os destaques mais recentes sobre nossos alunos talentosos, projetos inovadores, eventos emocionantes e conquistas inspiradoras. Esteja sempre atualizado sobre as atividades que movimentam nossa comunidade escolar e descubra como estamos moldando o futuro da educação técnica na região da Zona Leste de São Paulo. Explore nossas histórias, celebre nossos sucessos e participe ativamente da nossa jornada educacional. Bem-vindo ao emocionante mundo das notícias da ETEC Zona Leste!.<br /><br />
                </p>
            </div>
        </div>
    </div>

    <!-- Cards. -->
    <div class="flex flex-wrap justify-center items-center gap-10 mt-8 mb-8">
        <div class="max-w-xs w-full bg-white border-3 border-gray-200 rounded-lg overflow-hidden transform transition-transform 0.5s ease-in duration-500 hover:scale-110 cursor-pointer" style="box-shadow: 0 4px 6px -1px rgba(252, 211, 77, 0.5), 0 2px 4px -1px rgba(252, 211, 77, 0.06);">
            <div class="p-4">
                <div class="flex justify-center">
                    <span class="material-symbols-outlined text-gray-900 hover:text-yellow-400 transition-colors 0.5s ease-in duration-500 cursor-pointer" style="font-size: 60px;">news</span>
                </div>

                <div class="text-center mt-4">
                    <h3 class="text-lg font-semibold">Tecnologia</h3>
                    <p class="text-gray-600">Como comprovar segurança? Conheça as Métricas Orientadas por Resultados</p>
                </div>
            </div>
        </div>

        <div class="max-w-xs w-full bg-white border-3 border-blue-700 rounded-lg overflow-hidden transform transition-transform 0.5s ease-in duration-500 hover:scale-110 cursor-pointer" style="box-shadow: 0 4px 6px -1px rgba(239, 68, 68, 0.5), 0 2px 4px -1px rgba(239, 68, 68, 0.06);">
            <div class="p-4">
                <div class="flex justify-center">
                    <span class="material-symbols-outlined text-gray-900 hover:text-red-800 transition-colors 0.5s ease-in duration-500 cursor-pointer" style="font-size: 60px;">news</span>
                </div>

                <div class="text-center mt-4">
                    <h3 class="text-lg font-semibold">Tecnologia</h3>
                    <p class="text-gray-600">Profissionais de TI autônomos: 07 habilidades para ter sucesso na carreira</p>
                </div>
            </div>
        </div>

        <div class="max-w-xs w-full bg-white border-3 border-gray-200 rounded-lg overflow-hidden transform transition-transform 0.5s ease-in duration-500 hover:scale-110 cursor-pointer" style="box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.5), 0 2px 4px -1px rgba(59, 130, 246, 0.06);">
            <div class="p-4">
                <div class="flex justify-center">
                    <span class="material-symbols-outlined text-gray-900 hover:text-blue-700 transition-colors 0.5s ease-in duration-500 cursor-pointer" style="font-size: 60px;">news</span>
                </div>

                <div class="text-center mt-4">
                    <h3 class="text-lg font-semibold">Projetos</h3>
                    <p class="text-gray-600">Aos 16 anos, aluno de Etec do interior cria empresa de jogos digitais</p>
                </div>
            </div>
        </div>

        <div class="max-w-xs w-full bg-white border-3 border-gray-200 rounded-lg overflow-hidden transform transition-transform 0.5s ease-in duration-500 hover:scale-110 cursor-pointer" style="box-shadow: 0 4px 6px -1px rgba(252, 211, 77, 0.5), 0 2px 4px -1px rgba(252, 211, 77, 0.06);">
            <div class="p-4">
                <div class="flex justify-center">
                    <span class="material-symbols-outlined text-gray-900 hover:text-yellow-400 transition-colors 0.5s ease-in duration-500 cursor-pointer" style="font-size: 60px;">news</span>
                </div>

                <div class="text-center mt-4">
                    <h3 class="text-lg font-semibold">Vestibulinho</h3>
                    <p class="text-gray-600">Vestibulinho das Etecs libera resultado para os pedidos de redução da taxa</p>
                </div>
            </div>
        </div>

        <div class="max-w-xs w-full bg-white border-3 border-blue-700 rounded-lg overflow-hidden transform transition-transform 0.5s ease-in duration-500 hover:scale-110 cursor-pointer" style="box-shadow: 0 4px 6px -1px rgba(239, 68, 68, 0.5), 0 2px 4px -1px rgba(239, 68, 68, 0.06);">
            <div class="p-4">
                <div class="flex justify-center">
                    <span class="material-symbols-outlined text-gray-900 hover:text-red-800 transition-colors 0.5s ease-in duration-500 cursor-pointer" style="font-size: 60px;">news</span>
                </div>

                <div class="text-center mt-4">
                    <h3 class="text-lg font-semibold">Ações</h3>
                    <p class="text-gray-600">Professores das Etecs podem se inscrever na Oficina Partiu Mercado</p>
                </div>
            </div>
        </div>

        <div class="max-w-xs w-full bg-white border-3 border-gray-200 rounded-lg overflow-hidden transform transition-transform 0.5s ease-in duration-500 hover:scale-110 cursor-pointer" style="box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.5), 0 2px 4px -1px rgba(59, 130, 246, 0.06);">
            <div class="p-4">
                <div class="flex justify-center">
                    <span class="material-symbols-outlined text-gray-900 hover:text-blue-700 transition-colors 0.5s ease-in duration-500 cursor-pointer" style="font-size: 60px;">news</span>
                </div>

                <div class="text-center mt-4">
                    <h3 class="text-lg font-semibold">Institucional</h3>
                    <p class="text-gray-600">CPS avalia perfil empreendedor de ex-alunos das Etecs e Fatecs</p>
                </div>
            </div>
        </div>

        <div class="max-w-xs w-full bg-white border-3 border-gray-200 rounded-lg overflow-hidden transform transition-transform 0.5s ease-in duration-500 hover:scale-110 cursor-pointer" style="box-shadow: 0 4px 6px -1px rgba(252, 211, 77, 0.5), 0 2px 4px -1px rgba(252, 211, 77, 0.06);">
            <div class="p-4">
                <div class="flex justify-center">
                    <span class="material-symbols-outlined text-gray-900 hover:text-yellow-400 transition-colors 0.5s ease-in duration-500 cursor-pointer" style="font-size: 60px;">news</span>
                </div>

                <div class="text-center mt-4">
                    <h3 class="text-lg font-semibold">Institucional</h3>
                    <p class="text-gray-600">Ponte para o Trabalho do CIEE reconhece CPS, Etecs e Fatecs</p>
                </div>
            </div>
        </div>

        <div class="max-w-xs w-full bg-white border-3 border-blue-700 rounded-lg overflow-hidden transform transition-transform 0.5s ease-in duration-500 hover:scale-110 cursor-pointer" style="box-shadow: 0 4px 6px -1px rgba(239, 68, 68, 0.5), 0 2px 4px -1px rgba(239, 68, 68, 0.06);">
            <div class="p-4">
                <div class="flex justify-center">
                    <span class="material-symbols-outlined text-gray-900 hover:text-red-800 transition-colors 0.5s ease-in duration-500 cursor-pointer" style="font-size: 60px;">news</span>
                </div>

                <div class="text-center mt-4">
                    <h3 class="text-lg font-semibold">Relatório Socioeconômico</h3>
                    <p class="text-gray-600">Política de inclusão social auxilia 81% dos aprovados nas Etecs</p>
                </div>
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
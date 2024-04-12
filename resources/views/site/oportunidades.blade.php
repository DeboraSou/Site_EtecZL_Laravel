<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind. -->
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <title>Oportunidades - ETEC Zona Leste</title>
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

    .sign_btn {
    position: relative;
    margin: 30px 0 10px 0;
    padding: 12px 30px;
    background: transparent;
    font-size: 1.2rem;
    border: none;
    outline: none;
    transition: all 1s;
    cursor: pointer;
    text-transform: uppercase;
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
        <div class="absolute inset-0 bg-cover bg-center bg-opacity-60 z-0" style="opacity: 0.5; background-image: url('{{ asset('cidade.jpg') }}');"></div>
        
        <h1 class="text-gray-900 tracking-wider text-left font-bold text-2xl -mt-20 z-10" style="text-transform: uppercase; padding-bottom: -150px;">
            Oportunidades
        </h1>

        <h2 class="text-gray-900 tracking-wider text-left font-bold text-3xl mt-5 z-10">
            Oportunidades de emprego incríveis aguardam por você. Encontre sua trajetória de sucesso hoje!              
        </h2>
    </section>

    <!-- Concurso. --> 
    <div class="flex flex-col md:flex-row items-center justify-center bg-gray-200 py-8 px-5" style="gap: 30px;">
        <div class="w-full md:w-1/2">
            <div style="border: 5px solid #fdfdfd; border-radius: 5px;">
                <img src="{{ asset('concurso.jpg') }}" alt="Entrada da EtecZL." class="w-full h-auto">
            </div>
        </div>

        <div class="w-full md:w-1/2 mt-4 md:mt-0">
            <h2 class="text-3xl font-semibold mb-4">
                Concurso Público
            </h2>
            <p class="text-lg">Estão em andamento concursos públicos para contratação de 2,7 mil docentes e servidores administrativos para atuar em Escolas Técnicas (Etecs), Faculdades de Tecnologia (Fatecs) do Estado e na Administração Central do Centro Paula Souza (CPS). Os certames foram autorizados em junho de 2022 e as admissões ocorrem em 2023. O calendário do concurso para os cargos administrativos e os editais para docentes, que são liberados em lotes, estão disponíveis nos links abaixo.<br /><br />

            A previsão é contratar 993 professores de Ensino Médio e Técnico, 594 docentes de Ensino Superior, 887 agentes técnicos e administrativos, 227 bibliotecários e 6 especialistas em planejamento educacional. Foi autorizado, ainda, o aproveitamento de 80 vagas de professores remanescentes de concursos anteriores.A<br />
            </p>

            <div class="flex justify-left pb-8 z-10">
                <a href="https://www.cps.sp.gov.br/concursopublico/">
                    <button class="sign_btn font-semibold ms-3 text-gray-900 font-[Inter] duration-500 px-6 py-2 mx-4 bg-transparent transition-all 0.5s ease-in">Saiba mais</button>
                </a>
            </div>
        </div>
    </div>

     <!-- Processo seletivo. -->
    <div class="flex flex-col md:flex-row items-center justify-cente py-8 px-5" style="gap: 30px;">
        <div class="w-full md:w-1/2 mt-4 md:mt-0">
            <h2 class="text-3xl font-semibold mb-4">Processo Seletivo Simplificado para Auxiliar de Docente</h2>
            <p class="text-lg">Prepare-se para embarcar em uma jornada de ensino e aprendizado! O Processo Seletivo Simplificado para Auxiliar de Docente nas renomadas Escolas Técnicas Estaduais (ETECs) ou Faculdades de Tecnologia (FATECs) está com inscrições abertas.<br /><br />
            
            Participe deste processo seletivo e compartilhe seu conhecimento, experiência e paixão pelo ensino. As inscrições estão disponíveis para aqueles que desejam desempenhar um papel fundamental na educação técnica do Estado de São Paulo.<br />
            </p>

            <div class="flex justify-left pb-8 z-10">
                <a href="https://urhsistemas.cps.sp.gov.br/dgsdad/SelecaoPublica/PSSAD/Abertos.aspx">
                    <button class="sign_btn font-semibold ms-3 text-gray-900 font-[Inter] duration-500 px-6 py-2 mx-4 bg-transparent transition-all 0.5s ease-in">Inscreva-se</button>
                </a>
            </div>
        </div>

        <div class="w-full md:w-1/2">
            <div style="border: 5px solid #E5E7EB; border-radius: 5px;">
                <img src="{{ asset('seletivo.jpg') }}" alt="corredor do complexo da EtecZL." class="w-full h-auto">
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
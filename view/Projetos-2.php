<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="pt-2">
        <div class="container mx-auto flex justify-between items-center px-4">
            <!-- Logo ou nome do site -->
            <!-- <div class="text-white text-lg font-bold">Fatec Jaú</div> -->
            <img class="logo" src="./img/logodsm-branco.png" alt="logodsm-branco">

            <!-- Menu hamburguer (visível em telas pequenas) -->
            <nav>
                <div class="md:hidden flex items-center">
                    <button id="hamburger" class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                <!-- Links de navegação (visíveis em telas grandes) -->
                <div class="hidden md:flex space-x-4">
                    <a href="/home" class="text-white px-4 py-2 rounded">Início</a>
                    <a href="/professores" class="text-white px-4 py-2 rounded">Professores</a>
                    <a href="/projetos" class="text-white px-4 py-2 rounded ">Projetos</a>
                    <a href="/contato" class="text-white px-4 py-2 rounded ">Contato</a>
                    <a href="/desenvolvedores" class="text-white px-4 py-2 rounded">Desenvolvedores</a>
                </div>
        </div>
    </nav>

    <!-- Menu Dropdown (oculto em telas grandes, aparece em telas pequenas) -->
    <div id="menu" class="md:hidden bg-purple-800 px-6 py-2 hidden">
        <a href="/home" class="text-white block px-4 py-2 rounded hover:bg-purple-300">Início</a>
        <a href="/professores" class="text-white block px-4 py-2 rounded hover:bg-purple-300">Professores</a>
        <a href="/projetos" class="text-white block px-4 py-2 rounded hover:bg-purple-300">Projetos</a>
        <a href="/contato" class="text-white block px-4 py-2 rounded hover:bg-purple-300">Contato</a>
        <a href="/desenvolvedores"
            class="text-white block px-4 py-2 rounded hover:bg-purple-300">Desenvolvedores</a>
    </div>

    <!-- Script para alternar o menu -->
    <script>
        const hamburger = document.getElementById('hamburger');
        const menu = document.getElementById('menu');

        hamburger.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

    <header-proj class="text-white py-10">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-1">Desenvolvimento de Software Multiplataforma</h1>
            <p class="text-lg">Explore os projetos que estão transformando o futuro!</p>
        </div>
    </header-proj>

    <sub-nav class="bg- shadow">
        <div class="max-w-6xl mx-auto px-4 py-2 ">
            <ul class="flex space-x-4 justify-center">
                <li>
                    <a href="/projetos" class="font-bold text-black px-4 py-2 rounded hover:text-purple-800">1°
                        Semestre</a>
                </li>
                <li>
                    <a href="/projetos-2" class="font-bold text-black px-4 py-2 rounded hover:text-purple-800">2°
                        Semestre</a>
                </li>
                <li>
                    <a href="/projetos-3" class="font-bold text-black px-4 py-2 rounded hover:text-purple-800">3°
                        Semestre</a>
                </li>
            </ul>
        </div>
    </sub-nav>

    <div class="flex flex-wrap justify-center">
        <!-- Card 1 -->
        <div class="w-full sm:w-1/2 lg:w-1/3 p-4">
            <div
                class="h-full flex flex-col max-w-sm mx-auto rounded-lg overflow-hidden shadow-lg bg-white hover:text-purple-800">
                <div class="flex justify-center p-4">
                    <img class="w-full h-48 object-cover rounded-lg" src="../img/img-fogo-zero.png"
                        alt="Imagem do Fogo-Zero">
                </div>
                <div class="px-6 py-4 flex-grow">
                    <div class="font-bold text-lg sm:text-xl mb-2">Projeto Fogo Zero</div>
                    <p class="text-sm sm:text-base text-gray-700">
                        Esta iniciativa visa conscientizar o público e proporcionar uma resposta rápida a incidentes,
                        contribuindo para a proteção do nosso ambiente.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base font-semibold mt-4">Integrantes:</p>
                    <div class="space-y-3 mt-2">
                        <div class="flex items-center space-x-3">
                            <img src="https://avatars.githubusercontent.com/u/181358493?v=4" alt="Avatar Maria Carolina"
                                class="w-8 h-8 rounded-full">
                            <a href="https://github.com/Carol-morato" target="_blank"
                                class="text-black hover:text-purple-800 font-medium text-sm sm:text-base">Maria Carolina
                                Morato</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://avatars.githubusercontent.com/u/181370670?v=4" alt="Avatar Marina Frankin"
                                class="w-8 h-8 rounded-full">
                            <a href="https://github.com/marinafrankin" target="_blank"
                                class="text-black hover:text-purple-800 font-medium text-sm sm:text-base">Marina
                                Frankin</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://avatars.githubusercontent.com/u/96202019?v=4" alt="Avatar Tamires Talier"
                                class="w-8 h-8 rounded-full">
                            <a href="https://github.com/tamirestalier" target="_blank"
                                class="text-black hover:text-purple-800 font-medium text-sm sm:text-base">Tamires
                                Talier</a>
                        </div>
                    </div>
                </div>
                <div class="px-6 pt-4 pb-4">
                    <a href="https://github.com/tamirestalier/Fogo-Zero" target="_blank"
                        class="bg-purple-600 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded text-sm sm:text-base">
                        Conhecer o Projeto
                    </a>
                </div>
            </div>
        </div>



        <!-- Pi leadsearch -->
        <div class="w-full sm:w-1/2 lg:w-1/3 p-2">
            <div
                class="h-full flex flex-col max-w-sm mx-auto rounded-lg overflow-hidden shadow-lg bg-white hover:text-purple-800">
                <div class="flex justify-center p-4">
                    <img class="w-full h-48 object-cover rounded-lg" src="../img/pi-leadsearch.jfif"
                        alt="Imagem do Projeto">
                </div>
                <div class="px-6 py-4 flex-grow">
                    <div class="font-bold text-xl mb-2">LeadSearch </div>
                    <p class="text-gray-700 text-base">
                        Projeto voltado para coleta de Leads
                    </p>
                    <p class="text-gray-700 text-base font-semibold mt-4">Integrantes:</p>
                    <div class="space-y-3 mt-2">
                        <div class="flex items-center space-x-3">
                            <img src="https://avatars.githubusercontent.com/u/102252078?v=4" alt="Avatar"
                                class="w-8 h-8 rounded-full">
                            <a href="https://github.com/BrunoozL" target="_blank"
                                class="text-black hover:text-purple-800 font-medium text-sm sm:text-base">Bruno
                                Righi</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://avatars.githubusercontent.com/u/181370729?v=4" alt="Avatar"
                                class="w-8 h-8 rounded-full">
                            <a href="https://github.com/BrunoFzx" target="_blank"
                                class="text-black hover:text-purple-800 font-medium text-sm sm:text-base">Bruno
                                Ferraz</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://avatars.githubusercontent.com/u/178056958?v=4" alt="Avatar"
                                class="w-8 h-8 rounded-full">
                            <a href="https://github.com/wevertonryan" target="_blank"
                                class="text-black hover:text-purple-800 font-medium text-sm sm:text-base">Weverton Ryan Nunes de Almeida Silva</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://avatars.githubusercontent.com/u/122622768?v=4"
                                alt="Avatar Integrante" class="w-8 h-8 rounded-full">
                            <a href="https://github.com/Gabriel-M-Coutinho" target="_blank" class="text-black hover:text-purple-800 font-medium">Gabriel Magina Coutinho</a>
                        </div>
                    </div>
                </div>
                <div class="px-6 pt-4 pb-4">
                    <a href="https://github.com/Gabriel-M-Coutinho/pi2" target="_blank"
                        class="bg-purple-600 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded">
                        Conhecer o Projeto
                    </a>
                </div>
            </div>
        </div>

        <!-- PI girl in stem -->
        <div class="w-full sm:w-1/2 lg:w-1/3 p-4">
            <div
                class="h-full flex flex-col max-w-sm mx-auto rounded-lg overflow-hidden shadow-lg bg-white hover:text-purple-800">
                <div class="flex justify-center p-4">
                    <img class="w-full h-48 object-cover rounded-lg" src="../img/img-girsl-in-stem.jpg"
                        alt="Imagem do Card">
                </div>
                <div class="px-6 py-4 flex-grow">
                    <div class="font-bold text-lg sm:text-xl mb-2">Projeto Girls in Stem</div>
                    <p class="text-gray-700 text-sm sm:text-base">
                        Essa iniciativa tem como objetivo quebrar barreiras e incentivar as mulheres a explorarem o
                        universo
                        da Tecnologia da Informação.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base font-semibold mt-4">Integrantes:</p>
                    <div class="space-y-3 mt-2">
                        <div class="flex items-center space-x-3">
                            <img src="https://avatars.githubusercontent.com/u/102433167?v=4" alt="Avatar Yasmim Sanchez"
                                class="w-8 h-8 rounded-full">
                            <a href="https://github.com/YasmimSanchez-Coder"
                                class="text-black hover:text-purple-800 font-medium text-sm sm:text-base">Yasmim
                                Sanchez</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://avatars.githubusercontent.com/u/102433167?v=4" alt="Avatar Paulo Machado"
                                class="w-8 h-8 rounded-full">
                            <a href="https://github.com/paulo-m-machado"
                                class="text-black hover:text-purple-800 font-medium text-sm sm:text-base">Paulo
                                Machado</a>
                        </div>
                        <div class="flex items-center space-x-3">

                        </div>
                    </div>
                </div>
                <div class="px-6 pt-4 pb-4">
                    <a href="https://github.com/paulo-m-machado/fatec-PI-girls-in-stem"
                        class="bg-purple-600 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded text-sm sm:text-base">
                        Conhecer o Projeto
                    </a>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>


    <footer class="text-white py-4 mt-28 ">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Fatec Jaú</p>
        </div>
    </footer>

</body>

</html>
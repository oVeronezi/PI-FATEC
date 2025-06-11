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
        <!-- Card Ricardo Auto Detail -->
        <div class="w-full sm:w-1/2 lg:w-1/3 p-4">
            <div
                class="h-full flex flex-col max-w-sm mx-auto rounded-lg overflow-hidden shadow-lg bg-white hover:text-purple-800">
                <div class="flex justify-center p-4">
                    <img class="w-full h-48 object-cover rounded-lg" src="../img/img-ricardo-auto-detail.jfif"
                        alt="Imagem do Card">
                </div>
                <div class="px-6 py-4 flex-grow">
                    <div class="font-bold text-lg sm:text-xl mb-2">Projeto Ricardo Auto Detail</div>
                    <p class="text-sm sm:text-base text-gray-700">
                        Site portfólio para divulgação da empresa de detalhamento automotivo e gerenciamento de clientes
                        agendados.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base font-semibold mt-4">Integrantes:</p>
                    <div class="space-y-3 mt-2">
                        <div class="flex items-center space-x-3">
                            <img src="https://avatars.githubusercontent.com/u/102252078?v=4" alt="Avatar Bruno Righi"
                                class="w-8 h-8 rounded-full">
                            <a href="https://github.com/BrunoozL"
                                class="text-black hover:text-purple-800 font-medium text-sm sm:text-base">Bruno
                                Righi</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://avatars.githubusercontent.com/u/120916354?v=4"
                                alt="Avatar Cainã Bertolini" class="w-8 h-8 rounded-full">
                            <a href="https://github.com/cainanbermon"
                                class="text-black hover:text-purple-800 font-medium text-sm sm:text-base">Cainã
                                Bertolini</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://avatars.githubusercontent.com/u/178056958?v=4" alt="Avatar Weverton Ryan"
                                class="w-8 h-8 rounded-full">
                            <a href="https://github.com/wevertonryan"
                                class="text-black hover:text-purple-800 font-medium text-sm sm:text-base">Weverton
                                Ryan</a>
                        </div>
                    </div>
                </div>
                <div class="px-6 pt-4 pb-4">
                    <a href="https://github.com/cainanbermon/ricardo-detail-auto-PI" target="_blank"
                        class="bg-purple-600 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded text-sm sm:text-base">
                        Conhecer o Projeto
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="w-full sm:w-1/2 lg:w-1/3 p-2">
            <div
                class="h-full flex flex-col max-w-sm mx-auto rounded-lg overflow-hidden shadow-lg bg-white hover:text-purple-800">
                <div class="flex justify-center p-4">
                    <img class="w-full h-48 object-cover rounded-lg" src="https://via.placeholder.com/300"
                        alt="Imagem do Projeto">
                </div>
                <div class="px-6 py-4 flex-grow">
                    <div class="font-bold text-xl mb-2">Projeto </div>
                    <p class="text-gray-700 text-base">
                        descrição projeto
                    </p>
                    <p class="text-gray-700 text-base font-semibold mt-4">Integrantes:</p>
                    <div class="space-y-3 mt-2">
                        <div class="flex items-center space-x-3">
                            <img src="https://p7.hiclipart.com/preview/442/477/305/computer-icons-user-profile-avatar-profile.jpg"
                                alt="Avatar Integrante" class="w-8 h-8 rounded-full">
                            <a href="#" class="text-black hover:text-purple-800 font-medium">Integrante 1</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://p7.hiclipart.com/preview/442/477/305/computer-icons-user-profile-avatar-profile.jpg"
                                alt="Avatar Integrante" class="w-8 h-8 rounded-full">
                            <a href="#" class="text-black hover:text-purple-800 font-medium">Integrante 2</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://p7.hiclipart.com/preview/442/477/305/computer-icons-user-profile-avatar-profile.jpg"
                                alt="Avatar Integrante" class="w-8 h-8 rounded-full">
                            <a href="#" class="text-black hover:text-purple-800 font-medium">Integrante 3</a>
                        </div>
                    </div>
                </div>
                <div class="px-6 pt-4 pb-4">
                    <a href="#" class="bg-purple-600 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded">
                        Conhecer o Projeto
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="w-full sm:w-1/2 lg:w-1/3 p-2">
            <div
                class="h-full flex flex-col max-w-sm mx-auto rounded-lg overflow-hidden shadow-lg bg-white hover:text-purple-800">
                <div class="flex justify-center p-4">
                    <img class="w-full h-48 object-cover rounded-lg" src="https://via.placeholder.com/300"
                        alt="Imagem do Projeto">
                </div>
                <div class="px-6 py-4 flex-grow">
                    <div class="font-bold text-xl mb-2">Projeto </div>
                    <p class="text-gray-700 text-base">
                        descrição projeto
                    </p>
                    <p class="text-gray-700 text-base font-semibold mt-4">Integrantes:</p>
                    <div class="space-y-3 mt-2">
                        <div class="flex items-center space-x-3">
                            <img src="https://p7.hiclipart.com/preview/442/477/305/computer-icons-user-profile-avatar-profile.jpg"
                                alt="Avatar Integrante" class="w-8 h-8 rounded-full">
                            <a href="#" class="text-black hover:text-purple-800 font-medium">Integrante 1</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://p7.hiclipart.com/preview/442/477/305/computer-icons-user-profile-avatar-profile.jpg"
                                alt="Avatar Integrante" class="w-8 h-8 rounded-full">
                            <a href="#" class="text-black hover:text-purple-800 font-medium">Integrante 2</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://p7.hiclipart.com/preview/442/477/305/computer-icons-user-profile-avatar-profile.jpg"
                                alt="Avatar Integrante" class="w-8 h-8 rounded-full">
                            <a href="#" class="text-black hover:text-purple-800 font-medium">Integrante 3</a>
                        </div>
                    </div>
                </div>
                <div class="px-6 pt-4 pb-4">
                    <a href="#" class="bg-purple-600 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded">
                        Conhecer o Projeto
                    </a>
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
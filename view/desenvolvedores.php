<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Desenvolvedores</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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


    <!-- Hero Section -->
    <header class="text-white py-10">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-1">Desenvolvimento de Software Multiplataforma</h1>
            <p class="text-lg">Conheça a equipe responsável por criar e oferecer a melhor experiência para nossos
                usuários.</p>
        </div>
    </header>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mx-5 sm:mx-10 my-10">
        <!-- Card 1 -->
        <div class="max-w-sm mx-auto rounded-lg overflow-hidden shadow-lg bg-white">
            <div class="flex justify-center p-4">
                <img class="w-full max-w-xs rounded-lg" src="../img/foto luis.jpg"
                    alt="Foto do Luis">
            </div>
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Luis Felipe Veronezi</div>
                <p class="text-gray-700 text-base">
                    2° Semestre
                </p>
            </div>
            <div class="px-6 pt-4 pb-2 my-1 mb-3">
                <a href="https://www.linkedin.com/in/luis-felipe-veronezi-57a942304/" target="_blank"
                    class="flex items-center justify-center bg-purple-600 text-white px-5 py-3 rounded-lg shadow hover:bg-purple-800 transition duration-300">
                    <i class="fab fa-linkedin fa-2xl text-white mr-2"></i> LinkedIn
                </a>
                <a href="https://github.com/oVeronezi" target="_blank"
                    class="flex items-center justify-center bg-purple-600 text-white px-5 py-3 rounded-lg shadow hover:bg-purple-800 transition duration-300 mt-2">
                    <i class="fab fa-github fa-2xl text-white mr-2"></i> GitHub
                </a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="max-w-sm mx-auto rounded-lg overflow-hidden shadow-lg bg-white">
            <div class="flex justify-center p-4">
                <img class="w-full max-w-xs rounded-lg" src="../img/foto leo.jpg" alt="Foto do Leonardo">
            </div>
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Leonardo Antoniassi</div>
                <p class="text-gray-700 text-base">
                    2° Semestre
                </p>
            </div>
            <div class="px-6 pt-4 pb-2 my-1 mb-3">
                <a href="https://www.linkedin.com/in/leonardo-antoniassi-46084a322/" target="_blank"
                    class="flex items-center justify-center bg-purple-600 text-white px-5 py-3 rounded-lg shadow hover:bg-purple-800 transition duration-300">
                    <i class="fab fa-linkedin fa-2xl text-white mr-2"></i> LinkedIn
                </a>
                <a href="https://github.com/leoantoniassi" target="_blank"
                    class="flex items-center justify-center bg-purple-600 text-white px-5 py-3 rounded-lg shadow hover:bg-purple-800 transition duration-300 mt-2">
                    <i class="fab fa-github fa-2xl text-white mr-2"></i> GitHub
                </a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="max-w-sm mx-auto rounded-lg overflow-hidden shadow-lg bg-white">
            <div class="flex justify-center p-4">
                <img class="w-full max-w-xs rounded-lg" src="../img/foto joao.png" alt="Foto">
            </div>
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">João Pedro Padilha Fogagnolo</div>
                <p class="text-gray-700 text-base">
                    2° Semestre
                </p>
            </div>
            <div class="px-6 pt-4 pb-2 my-1 mb-3">
                <a href="" target="_blank"
                    class="flex items-center justify-center bg-purple-600 text-white px-5 py-3 rounded-lg shadow hover:bg-purple-800 transition duration-300">
                    <i class="fab fa-linkedin fa-2xl text-white mr-2"></i> LinkedIn
                </a>
                <a href="" target="_blank"
                    class="flex items-center justify-center bg-purple-600 text-white px-5 py-3 rounded-lg shadow hover:bg-purple-800 transition duration-300 mt-2">
                    <i class="fab fa-github fa-2xl text-white mr-2"></i> GitHub
                </a>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="max-w-sm mx-auto rounded-lg overflow-hidden shadow-lg bg-white">
            <div class="flex justify-center p-4">
                <img class="w-full max-w-xs rounded-lg" src="../img/foto-pedro.png" alt="Foto">
            </div>
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Pedro Vale Mineo</div>
                <p class="text-gray-700 text-base">
                    2° Semestre
                </p>
            </div>
            <div class="px-6 pt-4 pb-2 my-1 mb-3">
                <a href="" target="_blank"
                    class="flex items-center justify-center bg-purple-600 text-white px-5 py-3 rounded-lg shadow hover:bg-purple-800 transition duration-300">
                    <i class="fab fa-linkedin fa-2xl text-white mr-2"></i> LinkedIn
                </a>
                <a href="" target="_blank"
                    class="flex items-center justify-center bg-purple-600 text-white px-5 py-3 rounded-lg shadow hover:bg-purple-800 transition duration-300 mt-2">
                    <i class="fab fa-github fa-2xl text-white mr-2"></i> GitHub
                </a>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="text-white py-4 mt-32">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Fatec Jaú</p>
        </div>
    </footer>

</body>

</html>
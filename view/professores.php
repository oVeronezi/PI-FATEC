<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professores</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

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
            <p class="text-lg">Descubra quem são os experts que irão te guiar nessa jornada!</p>
        </div>
    </header>

    <div class="background">
        <div class="list-alunos">
            <ul role="list" class="divide-y divide-gray-300">

                <!-- prof Anderson Ferreira -->
                <li class="flex justify-between gap-x-6 py-1">
                    <div class="flex min-w-0 gap-x-4">
                        <img class="h-12 w-15 flex-none rounded-full bg-gray-50"
                            src="./img/anderson.png"
                            alt="Foto do Anderson">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm/6 font-semibold">Anderson Ferreira</p>
                            <p class="mt-1 truncate text-xs/5">andersonf.fernandes@fatec.sp.gov.br</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm/6"><b>Design Digital</b></p>
                        <div class="flex gap-2">
                            <a href="https://www.linkedin.com/in/anderson-ferreira-fernandes-89456937/" target="_blank"
                            class="mt-2 mb-2 flex-1 bg-purple-600 text-white px-5 py-2 rounded-lg shadow hover:bg-purple-800 transition duration-300 text-center">Linkedin
                            <a href="http://lattes.cnpq.br/1627329996472089" target="_blank"
                                class="mt-2 mb-2 flex-1 bg-purple-600 text-white px-5 py-2 rounded-lg shadow hover:bg-purple-800 transition duration-300 text-center">Lattes</a>
                        </div>
                    </div>
                </li>

                <!-- prof Cida -->
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <img class="h-12 w-15 flex-none rounded-full bg-gray-50"
                            src="./img/cida.png"
                            alt="Foto da Cida">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm/6 font-semibold">Aparecida Maria Zem Lopes</p>
                            <p class="mt-1 truncate text-xs/5">aparecida.lopes01@fatec.sp.gov.br</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm/6"><b>Engenharia de Software</b></p>
                        <div class="flex gap-2">
                            <a href="https://www.linkedin.com/in/cida-zem-52936a34/" target="_blank"
                            class="mt-2 mb-2 flex-1 bg-purple-600 text-white px-5 py-2 rounded-lg shadow hover:bg-purple-800 transition duration-300 text-center">LinkedIn
                            <a href="http://lattes.cnpq.br/6123540746643830" target="_blank"
                                class="mt-2 mb-2 flex-1 bg-purple-600 text-white px-5 py-2 rounded-lg shadow hover:bg-purple-800 transition duration-300 text-center">Lattes</a>
                        </div>
                    </div>
                </li>

                <!-- prof Hélio -->
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <img class="h-12 w-15 flex-none rounded-full bg-gray-50"
                            src="./img/helio.png"
                            alt="">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm/6 font-semibold">Hélio Luis da Silva Rodrigues</p>
                            <p class="mt-1 truncate text-xs/5">helio.rodrigues@fatec.sp.gov.br</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm/6"><b>Banco De Dados</b></p>
                        <div class="flex gap-2">
                            <a href="https://www.linkedin.com/in/cognus/" target="_blank"
                            class="mt-2 mb-2 flex-1 bg-purple-600 text-white px-5 py-2 rounded-lg shadow hover:bg-purple-800 transition duration-300 text-center">LinkedIn
                            <a href="http://lattes.cnpq.br/9183639307001530" target="_blank"
                                class="mt-2 mb-2 flex-1 bg-purple-600 text-white px-5 py-2 rounded-lg shadow hover:bg-purple-800 transition duration-300 text-center">Lattes</a>
                        </div>
                    </div>
                </li>

                <!-- prof Buscariollo -->
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <img class="h-12 w-15 flex-none rounded-full bg-gray-50"
                            src="./img/busca.png"
                            alt="foto Busca">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm/6 font-semibold">Paulo Henrique Buscariollo</p>
                            <p class="mt-1 truncate text-xs/5">phb.jau@fatec.sp.gov.br</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm/6"><b>Sistemas Operacionais</b></p>
                        <div class="flex gap-2">
                            <a href="https://www.linkedin.com/in/paulo-buscariollo-b6898921/" target="_blank"
                            class="mt-2 mb-2 flex-1 bg-purple-600 text-white px-5 py-2 rounded-lg shadow hover:bg-purple-800 transition duration-300 text-center">LinkedIn
                            <a href="http://lattes.cnpq.br/3704997196792935" target="_blank"
                                class="mt-2 mb-2 flex-1 bg-purple-600 text-white px-5 py-2 rounded-lg shadow hover:bg-purple-800 transition duration-300 text-center">Lattes</a>
                        </div>
                    </div>
                </li>

                <!-- prof Ronan -->
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <img class="h-12 w-15 flex-none rounded-full bg-gray-50"
                            src="../img/ronan.png"
                            alt="foto Ronan">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm/6 font-semibold">Ronan Adriel Zenatti</p>
                            <p class="mt-1 truncate text-xs/5">ronan.zenatti@fatec.sp.gov.br</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm/6"><b>Desenvolvimento Web, Banco de Dados Relacional</b></p>
                        <div class="flex gap-2">
                            <a href="https://www.linkedin.com/in/ronanzenatti/" target="_blank"
                            class="mt-2 mb-2 flex-1 bg-purple-600 text-white px-5 py-2 rounded-lg shadow hover:bg-purple-800 transition duration-300 text-center">LinkedIn
                            <a href="http://lattes.cnpq.br/9197032267433879" target="_blank"
                                class="mt-2 mb-2 flex-1 bg-purple-600 text-white px-5 py-2 rounded-lg shadow hover:bg-purple-800 transition duration-300 text-center">Lattes</a>
                        </div>
                    </div>
                </li>

                <!-- prof Tiago -->
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <img class="h-12 w-15 flex-none rounded-full bg-gray-50"
                            src="../img/tiago.png"
                            alt="foto Tiago">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm/6 font-semibold">Tiago Antonio da Silva</p>
                            <p class="mt-1 truncate text-xs/5">tiago.silva238@fatec.sp.gov.br</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm/6"><b>Algoritimos e Lógica de Programação, Estrutura de Dados</b></p>
                        <div class="flex gap-2">
                            <a href="https://www.linkedin.com/in/tiagotas/" target="_blank"
                            class="mt-2 mb-2 flex-1 bg-purple-600 text-white px-5 py-2 rounded-lg shadow hover:bg-purple-800 transition duration-300 text-center">LinkedIn
                            <a href="http://lattes.cnpq.br/0183165737768103" target="_blank"
                                class="mt-2 mb-2 flex-1 bg-purple-600 text-white px-5 py-2 rounded-lg shadow hover:bg-purple-800 transition duration-300 text-center">Lattes</a>
                        </div>
                    </div>
                </li>


            </ul>
        </div>
    </div>


    <!-- Footer -->
    <footer class="text-white py-4 mt-28">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Fatec Jaú</p>
        </div>
    </footer>


</body>

</html>
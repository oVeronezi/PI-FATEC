<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
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
            <img class="logo" src="../img/logodsm-branco.png" alt="logodsm-branco">

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
                    <a href="./home.php" class="text-white px-4 py-2 rounded">Início</a>
                    <a href="./professores.php" class="text-white px-4 py-2 rounded">Professores</a>
                    <a href="./projetos.php" class="text-white px-4 py-2 rounded ">Projetos</a>
                    <a href="./contato.php" class="text-white px-4 py-2 rounded ">Contato</a>
                    <a href="./desenvolvedores.php" class="text-white px-4 py-2 rounded">Desenvolvedores</a>
                </div>
        </div>
    </nav>

    <!-- Menu Dropdown (oculto em telas grandes, aparece em telas pequenas) -->
    <div id="menu" class="md:hidden bg-purple-800 px-6 py-2 hidden">
        <a href="./home.php" class="text-white block px-4 py-2 rounded hover:bg-purple-300">Início</a>
        <a href="./professores.php" class="text-white block px-4 py-2 rounded hover:bg-purple-300">Professores</a>
        <a href="./projetos.php" class="text-white block px-4 py-2 rounded hover:bg-purple-300">Projetos</a>
        <a href="./contato.php" class="text-white block px-4 py-2 rounded hover:bg-purple-300">Contato</a>
        <a href="./desenvolvedores.php" class="text-white block px-4 py-2 rounded hover:bg-purple-300">Desenvolvedores</a>
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
            <p class="text-lg">Entre em contato conosco! Nossa equipe está pronta para te atender.</p>
        </div>
    </header>

    <div class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">FATEC-JAHU
                </h2>
                    <a href="./formulario-contato.php"
                    class="mt-2 mb-2 inline-block bg-purple-600 text-white px-5 py-3 rounded-lg shadow hover:bg-purple-800 transition duration-300">
                    Formulário de Contato</a>
                <p class="mt-2 text-lg/8 text-gray-600">Estamos conectados em várias redes sociais!
                    Quer ficar por dentro de tudo sobre o curso de Desenvolvimento de Software Multiplataforma? Siga-nos
                    nas nossas redes sociais e acompanhe:</p>
            </div>
            <div
                class="mx-auto mt-5 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-300 pt-10 sm:mt-5 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="group relative">
                        <h3 class="mt-5 text-lg/6 font-semibold text-gray-900">
                            <span class="absolute inset-0"></span>
                            🌟 Siga-nos no Instagram! <br> <br> Fique por dentro das últimas novidades, conteúdos
                            exclusivos da Fatec Jahu.
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">No nosso perfil, você vai encontrar: <br>

                            -Divulgações de eventos <br>
                            -Datas de vestibular
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2 my-1 mb-3 flex items-center justify-center">
    <a href="https://www.instagram.com/fatecjahu/"
        class="flex items-center justify-center bg-purple-600 text-white px-5 py-3 rounded-lg shadow hover:bg-purple-800 transition duration-300">
        <i class="fab fa-instagram fa-2xl text-white mr-2"></i> Instagram
    </a>
</div>

                </article>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="group relative">
                        <h3 class="mt-5 text-lg/6 font-semibold text-gray-900">
                            <span class="absolute inset-0"></span>
                            📢 Curta nossa página no Facebook! <br> <br>
                            Acompanhe nossa página para receber as últimas atualizações e interagir com nossos
                            profissionais
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600"> Aqui você encontra: <br>
                            -Depoimento de alunos <br>
                            -Conteúdos exclusivos
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2 my-1 mb-3 justify-center">
                        <a href="https://www.facebook.com/@fatecjahu/?mibextid=ZbWKwL"
                            class="flex items-center justify-center bg-purple-600 text-white px-5 py-3 rounded-lg shadow hover:bg-purple-800 transition duration-300">
                            <i class="fab fa-facebook fa-2xl text-white mr-2"></i> Facebook
                        </a>
                    </div>
                </article>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="group relative">
                        <h3 class="mt-5 text-lg/6 font-semibold text-gray-900">
                            <span class="absolute inset-0"></span>
                            🎓 Encontre-nos no linkedin! <br> <br>
                            Siga-nos no linkedin para saber das principais notícias e desenvolvimentos da faculdade!

                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Aqui você encontra: <br>
                            -Vagas de estágio <br>
                            -Atualizações sobre a faculdade <br>
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2 my-1 mb-3">
                        <a href="https://www.linkedin.com/in/fatec-jahu-08998837?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                            class="flex items-center justify-center bg-purple-600 text-white px-5 py-3 rounded-lg shadow hover:bg-purple-800 transition duration-300">
                            <i class="fab fa-linkedin fa-2xl text-white mr-2"></i> LinkedIn
                        </a>
                    </div>
                </article>

            </div>
        </div>
    </div>



    <!-- Footer -->
    <footer class="text-white py-4 mt-10">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Fatec Jaú</p>
        </div>
    </footer>


</body>

</html>
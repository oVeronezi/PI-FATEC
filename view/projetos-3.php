<?php
require_once './controller/projetosIntegradores.Controller.php';

$semestre = 3; // Aqui você escolhe o semestre
$controller = new ProjetosIntegradoresController();
$projetos = $controller->listarPorSemestre($semestre);
?>

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

    <div class="flex flex-wrap justify-center p-4">
        <?php if (count($projetos) > 0): ?>
            <?php foreach ($projetos as $projeto): ?>
                <div class="w-full sm:w-1/2 lg:w-1/3 p-4">
                    <div class="h-full flex flex-col rounded-lg overflow-hidden shadow-lg bg-white hover:text-purple-800">

                        <!-- Imagem -->
                        <img src="<?= htmlspecialchars($projeto->foto_url) ?>" alt="Imagem do Projeto"
                            class="h-48 w-full object-cover">

                        <!-- Conteúdo -->
                        <div class="px-6 py-4 flex-grow">
                            <div class="font-bold text-lg"><?= htmlspecialchars($projeto->nome) ?></div>
                            <p class="text-gray-700 text-sm mt-2"><?= htmlspecialchars($projeto->descricao) ?></p>
                            <p class="text-gray-500 text-xs mt-1">Semestre: <?= htmlspecialchars($projeto->semestre) ?>º</p>

                            <p class="text-gray-700 text-sm font-semibold mt-4">Integrantes:</p>
                            <?php
                            $alunos = $controller->listarAlunosDoProjeto($projeto->id_pi);
                            foreach ($alunos as $aluno): ?>
                                <div class="flex items-center space-x-2 mt-1">
                                    <a href="<?= htmlspecialchars($aluno->github) ?>" target="_blank"
                                        class="text-black hover:text-purple-800 font-medium text-sm">
                                        <?= htmlspecialchars($aluno->nome) ?>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Botão -->
                        <div class="px-6 pt-2 pb-4">
                            <a href="<?= htmlspecialchars($projeto->link_github) ?>" target="_blank"
                                class="bg-purple-600 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded text-sm">
                                Conhecer o Projeto
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center text-gray-600 text-lg">Nenhum projeto encontrado para este semestre.</p>
        <?php endif; ?>
    </div>



    <footer class="text-white py-4 mt-28 ">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Fatec Jaú</p>
        </div>
    </footer>

    <!-- Script para alternar o menu -->
    <script>
        const hamburger = document.getElementById('hamburger');
        const menu = document.getElementById('menu');

        hamburger.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

</body>

</html>
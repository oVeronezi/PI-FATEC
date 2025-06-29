<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
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
                  <?php 
if (isset($_SESSION['nome'])) {
    // Se o usuário está logado
    echo "<a class='nav-link text-white px-4 py-2 rounded' href=' /logout'>Sair</a>";
} else {
    // Se não está logado
    echo "<a class='nav-link text-white px-4 py-2 rounded' href=' /login'>Entrar</a>";
}
?>

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
        <a href="/login" class="text-white block px-4 py-2 rounded hover:bg-purple-300">Logar</a>
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
            <p class="text-lg">Prepare-se para criar aplicações que rodam em diversas plataformas!</p>
        </div>
    </header>

    <!-- About Section -->
    <section class="">
        <div class="">
            <div class="flex justify-center pb-0 pt-7">
                <img class="card"
                    src="https://www.mentedidactica.com/wp-content/uploads/2018/06/aprender-a-programar.jpg" alt="">
            </div>
        </div>
    </section>

    <div class="container-home">
        <div class="py-12 sm:py-8">
            <div class="m-auto max-w-8x1 px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-4xl font-semibold text-indigo-600 sm:text-base">O curso de Desenvolvimento de
                        Software
                        Multiplataforma</h2>
                    <p class="mt-2 text-4xl font-bold text-gray-900 sm:text-4xl">
                        <b>Apresentação do Curso</b>
                    </p>
                </div>
                <div class="mx-auto mt-8 max-w-6x1 sm:mt-12 lg:mt-16 lg:max-w-7xl">
                    <dl class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2 lg:gap-y-10">
                        <div class="relative">
                            <dt class="text-lg font-semibold text-gray-900 flex items-center space-x-3">
                                <div
                                    class="flex h-6 w-6 items-center justify-center rounded-full bg-purple-600 text-white">
                                    <span class="text-sm">1</span>
                                </div>
                                <span>Formação Completa</span>
                            </dt>
                            <dd class="mt-2 text-base text-gray-600">
                                O curso de Desenvolvimento de Software Multiplataforma da Fatec Jahu oferece uma
                                formação abrangente, preparando alunos para criar aplicações em diversas plataformas,
                                como web e mobile.
                            </dd>
                        </div>
                        <div class="">
                            <dt class="text-lg font-semibold text-gray-900 flex items-center space-x-3">
                                <div
                                    class="flex h-6 w-6 items-center justify-center rounded-full bg-purple-600 text-white">
                                    <span class="text-sm">2</span>
                                </div>
                                <span>Currículo Atualizado</span>
                            </dt>
                            <dd class="mt-2 text-base text-gray-600">
                                Com disciplinas modernas e alinhadas às demandas do mercado, os alunos aprendem
                                linguagens de programação, design de interface e metodologias ágeis.
                            </dd>
                        </div>
                        <div class="relative">
                            <dt class="text-lg font-semibold text-gray-900 flex items-center space-x-3">
                                <div
                                    class="flex h-6 w-6 items-center justify-center rounded-full bg-purple-600 text-white">
                                    <span class="text-sm">3</span>
                                </div>
                                <span>Corpo Docente Experiente</span>
                            </dt>
                            <dd class="mt-2 text-base text-gray-600">
                                Nossos professores são profissionais atuantes na área de tecnologia, proporcionando uma
                                aprendizagem prática e relevante.
                            </dd>
                        </div>
                        <div class="relative">
                            <dt class="text-lg font-semibold text-gray-900 flex items-center space-x-3">
                                <div
                                    class="flex h-6 w-6 items-center justify-center rounded-full bg-purple-600 text-white">
                                    <span class="text-sm">4</span>
                                </div>
                                <span>Oportunidades de Carreira</span>
                            </dt>
                            <dd class="mt-2 text-base text-gray-600">
                                Os formados estão aptos a atuar em diversas áreas da tecnologia, com alta
                                empregabilidade e oportunidades de crescimento profissional.
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        <div>
            <div>


                <div class="max-w-8xl mx-auto" style="padding: 20px;">
                    <h1 class="text-2xl font-bold text-gray-800 mb-5 text-center">Matriz Curricular - Curso de
                        Tecnologia em
                        Desenvolvimento de Software Multiplataforma</h1>
                    <div class="">
                        <!-- Accordion Item -->
                        <div class="border rounded-lg bg-white shadow">
                            <button class="w-full text-left p-4 flex justify-between items-center focus:outline-none"
                                onclick="toggleAccordion(this)">
                                <span class="font-medium text-gray-800">1º Semestre</span>
                                <svg class="w-5 h-5 text-gray-500 transition-transform transform"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="p-4 border-t hidden">
                                <table class="table-auto w-full text-left text-gray-700">
                                    <thead>
                                        <tr class="bg-gray-100 w-40">
                                            <th class="px-4 py-2">Disciplina</th>
                                            <th class="px-4 py-2">Carga Horária</th>
                                            <th class="px-4 py-2">Modalidade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="px-4 py-2">Modelagem de Banco de Dados</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-2">Desenvolvimento Web I</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2">Algoritmos e Lógica de Programação</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-2">Engenharia de Software I</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2">Design Digital</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-2">Sistemas Operacionais e Redes de Computadores</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Accordion Item -->
                        <!-- Accordion Item -->
                        <div class="border rounded-lg bg-white shadow">
                            <button class="w-full text-left p-4 flex justify-between items-center focus:outline-none"
                                onclick="toggleAccordion(this)">
                                <span class="font-medium text-gray-800">2º Semestre</span>
                                <svg class="w-5 h-5 text-gray-500 transition-transform transform"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="p-4 border-t hidden">
                                <table class="table-auto w-full text-left text-gray-700">
                                    <thead>
                                        <tr class="bg-gray-100">
                                            <th class="px-4 py-2">Disciplina</th>
                                            <th class="px-4 py-2">Carga Horária</th>
                                            <th class="px-4 py-2">Modalidade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="px-4 py-2">Banco de Dados - Relacional</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-2">Desenvolvimento Web II</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2">Técnicas de Programação I</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-2">Engenharia de Software II</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2">Estrutura de Dados</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-2">Matemática para Computação</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Accordion Item -->

                        <!-- Accordion Item -->
                        <div class="border rounded-lg bg-white shadow">
                            <button class="w-full text-left p-4 flex justify-between items-center focus:outline-none"
                                onclick="toggleAccordion(this)">
                                <span class="font-medium text-gray-800">3º Semestre</span>
                                <svg class="w-5 h-5 text-gray-500 transition-transform transform"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="p-4 border-t hidden">
                                <table class="table-auto w-full text-left text-gray-700">
                                    <thead>
                                        <tr class="bg-gray-100">
                                            <th class="px-4 py-2">Disciplina</th>
                                            <th class="px-4 py-2">Carga Horária</th>
                                            <th class="px-4 py-2">Modalidade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="px-4 py-2">Banco de Dados - Não Relacional</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-2">Desenvolvimento Web III</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2">Técnicas de Programação II</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-2">Gestão Ágil de Projetos de Software</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2">Interação Humano Computador</td>
                                            <td class="px-4 py-2">40 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-4 py-2">Álgebra Linear</td>
                                            <td class="px-4 py-2">80 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2">Inglês I</td>
                                            <td class="px-4 py-2">40 aulas</td>
                                            <td class="px-4 py-2">Presencial</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Accordion Item -->

                        <div <!-- Accordion Item -->
                            <div class="border rounded-lg bg-white shadow">
                                <button
                                    class="w-full text-left p-4 flex justify-between items-center focus:outline-none"
                                    onclick="toggleAccordion(this)">
                                    <span class="font-medium text-gray-800">4º Semestre</span>
                                    <svg class="w-5 h-5 text-gray-500 transition-transform transform"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="p-4 border-t hidden">
                                    <table class="table-auto w-full text-left text-gray-700">
                                        <thead>
                                            <tr class="bg-gray-100">
                                                <th class="px-4 py-2">Disciplina</th>
                                                <th class="px-4 py-2">Carga Horária</th>
                                                <th class="px-4 py-2">Modalidade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="px-4 py-2">Integração e Entrega Contínua</td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Presencial</td>
                                            </tr>
                                            <tr class="bg-gray-50">
                                                <td class="px-4 py-2">Laboratório de Desenvolvimento Web</td>
                                                <td class="px-4 py-2">60 aulas</td>
                                                <td class="px-4 py-2">Presencial</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2">Programação para Dispositivos Móveis I</td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Presencial</td>
                                            </tr>
                                            <tr class="bg-gray-50">
                                                <td class="px-4 py-2">Internet das Coisas e Aplicações</td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Presencial</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2">Experiência do Usuário</td>
                                                <td class="px-4 py-2">40 aulas</td>
                                                <td class="px-4 py-2">Presencial</td>
                                            </tr>
                                            <tr class="bg-gray-50">
                                                <td class="px-4 py-2">Estatística Aplicada</td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Presencial</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2">Inglês II</td>
                                                <td class="px-4 py-2">40 aulas</td>
                                                <td class="px-4 py-2">Presencial</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- End Accordion Item -->

                            <!-- Accordion Item -->
                            <div class="border rounded-lg bg-white shadow">
                                <button
                                    class="w-full text-left p-4 flex justify-between items-center focus:outline-none"
                                    onclick="toggleAccordion(this)">
                                    <span class="font-medium text-gray-800">5º Semestre</span>
                                    <svg class="w-5 h-5 text-gray-500 transition-transform transform"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="p-4 border-t hidden">
                                    <table class="table-auto w-full text-left text-gray-700">
                                        <thead>
                                            <tr class="bg-gray-100">
                                                <th class="px-4 py-2">Disciplina</th>
                                                <th class="px-4 py-2">Carga Horária</th>
                                                <th class="px-4 py-2">Modalidade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="px-4 py-2">Segurança no Desenvolvimento de Aplicações</td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Presencial</td>
                                            </tr>
                                            <tr class="bg-gray-50">
                                                <td class="px-4 py-2">Lab. de Desenvolvimento para Dispositivos Móveis I
                                                </td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Presencial</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2">Programação para Dispositivos Móveis II</td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Presencial</td>
                                            </tr>
                                            <tr class="bg-gray-50">
                                                <td class="px-4 py-2">Aprendizagem de Máquina</td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Presencial</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2">Computação em Nuvem I</td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Presencial</td>
                                            </tr>
                                            <tr class="bg-gray-50">
                                                <td class="px-4 py-2">Inglês III</td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Remoto</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2">Fundamentos da Redação Técnica</td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Remoto</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- End Accordion Item -->
                            <!-- Accordion Item -->
                            <div class="border rounded-lg bg-white shadow">
                                <button
                                    class="w-full text-left p-4 flex justify-between items-center focus:outline-none"
                                    onclick="toggleAccordion(this)">
                                    <span class="font-medium text-gray-800">6º Semestre</span>
                                    <svg class="w-5 h-5 text-gray-500 transition-transform transform"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="p-4 border-t hidden">
                                    <table class="table-auto w-full text-left text-gray-700">
                                        <thead>
                                            <tr class="bg-gray-100">
                                                <th class="px-4 py-2">Disciplina</th>
                                                <th class="px-4 py-2">Carga Horária</th>
                                                <th class="px-4 py-2">Modalidade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="px-4 py-2">Mineração de Dados</td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Remoto</td>
                                            </tr>
                                            <tr class="bg-gray-50">
                                                <td class="px-4 py-2">Laboratório de Desenvolvimento Multiplataforma I
                                                </td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Presencial</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2">Laboratório de Desenvolvimento Multiplataforma II
                                                </td>
                                                <td class="px-4 py-2">20 aulas</td>
                                                <td class="px-4 py-2">Remoto</td>
                                            </tr>
                                            <tr class="bg-gray-50">
                                                <td class="px-4 py-2">Qualidade e Testes de Software</td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Remoto</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2">Processamento de Linguagem Natural</td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Remoto</td>
                                            </tr>
                                            <tr class="bg-gray-50">
                                                <td class="px-4 py-2">Computação em Nuvem II</td>
                                                <td class="px-4 py-2">80 aulas</td>
                                                <td class="px-4 py-2">Remoto</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2">Inglês IV</td>
                                                <td class="px-4 py-2">40 aulas</td>
                                                <td class="px-4 py-2">Remoto</td>
                                            </tr>
                                            <tr class="bg-gray-50">
                                                <td class="px-4 py-2">Ética Profissional e Patente</td>
                                                <td class="px-4 py-2">40 aulas</td>
                                                <td class="px-4 py-2">Remoto</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div> <!-- End Accordion Item -->
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleAccordion(button) {
            const content = button.nextElementSibling;
            content.classList.toggle('hidden');
            const icon = button.querySelector('svg');
            icon.classList.toggle('rotate-180');
        }
    </script>

    <div class="menu-dis">
        <div class="max-w-8xl mx-auto bg-white p-6 rounded-lg shadow-md mt-20 mx-4 sm:mx-10 md:mx-20 lg:mx-40">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 text-center">Disciplinas do Curso de Desenvolvimento de
                Software
                Multiplataforma 1º Semestre</h1>
            <div class="max-w-full">
                <h2 class="text-xl font-semibold text-gray-800 mt-4">Modelagem de Banco de Dados</h2>
                <p class="text-gray-700 mb-4">
                    Esta disciplina aborda os fundamentos da modelagem de dados, incluindo técnicas de normalização e a
                    criação
                    de diagramas para representar estruturas de dados e suas relações.
                </p>

                <h2 class="text-xl font-semibold text-gray-800 mt-4">Desenvolvimento Web</h2>
                <p class="text-gray-700 mb-4">
                    Foco na criação de aplicações web, utilizando HTML, CSS, JavaScript e frameworks relevantes. Os
                    alunos
                    aprendem sobre design responsivo e melhores práticas de desenvolvimento.
                </p>

                <h2 class="text-xl font-semibold text-gray-800 mt-4">Algoritmos e Lógica de Programação</h2>
                <p class="text-gray-700 mb-4">
                    Introdução à lógica de programação e técnicas para resolver problemas através de algoritmos,
                    abrangendo
                    estruturas de controle e tipos de dados.
                </p>

                <h2 class="text-xl font-semibold text-gray-800 mt-4">Engenharia de Software</h2>
                <p class="text-gray-700 mb-4">
                    Disciplinas que exploram o ciclo de vida do desenvolvimento de software, metodologias ágeis e
                    práticas de
                    gestão de projetos, garantindo a entrega de software de qualidade.
                </p>

                <h2 class="text-xl font-semibold text-gray-800 mt-4">Design Digital</h2>
                <p class="text-gray-700 mb-4">
                    Abordando princípios de design e usabilidade, esta disciplina capacita os alunos a criar interfaces
                    atraentes e funcionais para aplicações digitais.
                </p>

                <h2 class="text-xl font-semibold text-gray-800 mt-4">Sistemas Operacionais e Redes de Computadores</h2>
                <p class="text-gray-700 mb-4">
                    Esta disciplina fornece uma visão geral sobre como os sistemas operacionais funcionam e como as
                    redes de
                    computadores se interconectam, incluindo conceitos de segurança e gerenciamento de redes.
                </p>
            </div>
        </div>

        <div class="menu-dis">
            <div class="max-w-8xl mx-auto bg-white p-6 rounded-lg shadow-md mt-20 mx-4 sm:mx-10 md:mx-20 lg:mx-40">
                <h1 class="text-2xl font-bold text-gray-800 mb-4 text-center">Disciplinas do Curso de Desenvolvimento de
                    Software
                    Multiplataforma 2º Semestre</h1>
                <div class="max-w-full">
                    <h2 class="text-xl font-semibold text-gray-800 mt-4">Banco de Dados - Relacional</h2>
                    <p class="text-gray-700 mb-4">
                        Esta disciplina aprofunda os fundamentos dos bancos de dados relacionais, incluindo modelagem
                        avançada, normalização e manipulação de dados com SQL. Os alunos aprendem a projetar,
                        implementar e gerenciar bancos de dados otimizados para atender às demandas do mercado.
                    </p>

                    <h2 class="text-xl font-semibold text-gray-800 mt-4">Desenvolvimento Web II</h2>
                    <p class="text-gray-700 mb-4">
                        Esta disciplina introduz conceitos essenciais de lógica e técnicas de programação. Os alunos
                        aprendem estruturas de controle, manipulação de dados e resolução de problemas usando linguagens
                        de programação modernas.
                    </p>

                    <h2 class="text-xl font-semibold text-gray-800 mt-4">Engenharia de Software II</h2>
                    <p class="text-gray-700 mb-4">
                        Os alunos aprofundam seus conhecimentos sobre o ciclo de vida do software, com foco em
                        metodologias ágeis, análise de requisitos e ferramentas de apoio à gestão e desenvolvimento de
                        projetos de software.
                    </p>

                    <h2 class="text-xl font-semibold text-gray-800 mt-4">Estrutura de Dados</h2>
                    <p class="text-gray-700 mb-4">
                        Os alunos estudam como organizar e manipular dados de forma eficiente utilizando estruturas como
                        listas, pilhas, filas e árvores. A disciplina enfatiza a aplicação prática desses conceitos em
                        algoritmos e sistemas computacionais.
                    </p>

                    <h2 class="text-xl font-semibold text-gray-800 mt-4">Técnicas de Programação I</h2>
                    <p class="text-gray-700 mb-4">
                        Esta disciplina introduz conceitos essenciais de lógica e técnicas de programação. Os alunos
                        aprendem estruturas de controle, manipulação de dados e resolução de problemas usando PHP.
                    </p>

                    <h2 class="text-xl font-semibold text-gray-800 mt-4">Matemática para Computação
                    </h2>
                    <p class="text-gray-700 mb-4">
                        Esta disciplina cobre fundamentos matemáticos necessários para resolver problemas
                        computacionais, incluindo lógica, análise combinatória e matemática discreta,
                        preparando os alunos para enfrentar desafios técnicos e analíticos.
                    </p>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <!-- Footer -->
    <footer class="text-white py-4 mt-28">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Fatec Jaú</p>
        </div>
    </footer>
</body>

</html>
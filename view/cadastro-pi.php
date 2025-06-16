<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro De Projetos Integradores</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

</head>


<body class="bg-gray-50">

    <div class="flex justify-center items-center min-h-screen bg-gray-100 py-8">
        <div class="max-w-3xl w-full bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Cadastro de Projetos</h2>

            <form>
                <!-- Nome Do Projeto -->
                <div class="mb-4">
                    <label for="nome_completo" class="block text-gray-700 font-medium">Nome Do Projeto</label>
                    <input type="text" id="nome_projeto" name="nome_projeto" required
                        placeholder="Digite o nome do Projeto Integrador"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <!-- Link no Github -->
                <div class="mb-4">
                    <label for="email_institucional" class="block text-gray-700 font-medium">Link Do Projeto no GitHub</label>
                    <input type="link" id="link_projeto" name="link_projeto" required
                        placeholder="Digite o Link do Projeto No Github"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <!-- Alunos no projeto -->
                <div class="mb-4">
                    <label for="linkedin" class="block text-gray-700 font-medium">Alunos no Projeto</label>
                    <!-- fazer puxar o nome do aluno pra cadastrar no PI -->
                    <input type="#" id="alunos_projeto" name="alunos_projeto" required
                        placeholder=""
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <!-- Semestre -->
                <div class="mb-4">
                    <label for="" class="block text-gray-700 font-medium">Semestre</label>
                    <br>
                    <select name="categoria" id="categoria">
                        <option value=""
                            disabled selected>Semestre em que o PI foi finalizado</option>
                        <option value="1 semestre">1° semestre</option>
                        <option value="2 semestre">2° semestre</option>
                        <option value="3 semestre">3° semestre</option>
                        <option value="4 semestre">4° semestre</option>
                        <option value="5 semestre">5° semestre</option>
                        <option value="6 semestre">6° semestre</option>
                    </select>
                </div>

                <!-- categoria -->
                <div class="mb-4">
                    <label for="" class="block text-gray-700 font-medium">Categoria</label>
                    <br>
                    <select name="categoria" id="categoria">
                        <option value="" disabled selected>Selecione a categoria</option>
                        <option value="">Valor 1</option>
                        <option value="">Valor 2</option>
                        <option value="">Valor 3</option>
                    </select>
                </div>

                <!-- Botão de Enviar -->
                <!-- <div class="mb-4 text-center">
                    <button
                        class="w-full bg-purple-600 text-white p-3 rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600">
                        <a href="./mensagem-cadastro-enviada.php">Cadastrar</a>
                    </button>
                </div> -->

                <div class="mb-4 text-center">
                    <a href="./mensagem-pi-cadastrado"
                        class="bg-purple-700 p-2 pr-10 pl-10 rounded-md text-white font-bold hover:bg-purple-600">Cadastrar</a>
                </div>

                <!-- Botão Voltar -->
                <div class="text-center">
                    <a href="./login" class="text-black font-bold hover:text-purple-600">Voltar</a>
                </div>

            </form>

        </div>
    </div>

</body>



</html>
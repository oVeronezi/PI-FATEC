<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro De Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

</head>


<body class="bg-gray-50">

    <div class="flex justify-center items-center min-h-screen bg-gray-100 py-8">
        <div class="max-w-3xl w-full bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Cadastro de Alunos</h2>

            <form>
                <!-- Nome Completo -->
                <div class="mb-4">
                    <label for="nome_completo" class="block text-gray-700 font-medium">Nome Completo</label>
                    <input type="text" id="nome_completo" name="nome_completo" required
                        placeholder="Digite seu nome completo"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <!-- E-mail Institucional -->
                <div class="mb-4">
                    <label for="email_institucional" class="block text-gray-700 font-medium">E-mail
                        Institucional</label>
                    <input type="email" id="email_institucional" name="email_institucional" required
                        placeholder="Digite seu e-mail institucional"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <!-- LinkedIn -->
                <div class="mb-4">
                    <label for="linkedin" class="block text-gray-700 font-medium">LinkedIn</label>
                    <input type="url" id="linkedin" name="linkedin" required
                        placeholder="Informe o link do seu linkedin"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <!-- GitHub -->
                <div class="mb-4">
                    <label for="github" class="block text-gray-700 font-medium">GitHub</label>
                    <input type="url" id="github" name="github" required placeholder="Informe o link do seu GitHub"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <!-- Semestre -->
                <div class="mb-4">
                    <label for="semestre" class="block text-gray-700 font-medium">Semestre</label>
                    <input type="text" id="semestre" name="semestre" required placeholder="Informe o seu semestre atual"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <!-- Botão de Enviar -->
                <!-- <div class="mb-4 text-center">
                    <button
                        class="w-full bg-purple-600 text-white p-3 rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600">
                        <a href="./mensagem-cadastro-enviada.php">Cadastrar</a>
                    </button>
                </div> -->

                <div class="mb-4 text-center">
                    <a href="./mensagem-aluno-cadastrado-enviado.php" class="bg-purple-700 p-2 pr-10 pl-10 rounded-md text-white font-bold hover:bg-purple-600">Cadastrar</a>
                </div>

                <!-- Botão Voltar -->
                <div class="text-center">
                    <a href="./contato.php" class="text-black font-bold hover:text-purple-600">Voltar</a>
                </div>

            </form>

        </div>
    </div>

</body>



</html>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro De Professores</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

</head>


<body class="bg-gray-50">

    <div class="flex justify-center items-center min-h-screen bg-gray-100 py-8">
        <div class="max-w-3xl w-full bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Cadastro de Professores</h2>

            <form action="../controller/cadastroProfessores.Controller.php" method="POST" enctype="multipart/form-data">

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
                        placeholder="Informe o link do seu LinkedIn"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <!-- Código Lattes -->
                <div class="mb-4">
                    <label for="codigo_lattes" class="block text-gray-700 font-medium">Código Lattes</label>
                    <input type="text" id="codigo_lattes" name="codigo_lattes" required
                        placeholder="Digite seu código Lattes"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <!-- Disciplina -->
                <div class="mb-4">
                    <label for="disciplina" class="block text-gray-700 font-medium">Disciplina</label>
                    <input type="text" id="disciplina" name="disciplina" required
                        placeholder="Digite a disciplina que leciona"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <!-- Upload da Foto -->
                <div class="mb-4">
                    <label for="foto" class="block text-gray-700 font-medium">Foto do Professor</label>
                    <input type="file" id="foto" name="foto" accept="image/*" required
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <div class="mb-4 text-center">
                    <button
                        class="w-full bg-purple-600 text-white p-3 rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600">
                        <a href="./mensagem-cadastro-enviada.php">Cadastrar</a>
                    </button>
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